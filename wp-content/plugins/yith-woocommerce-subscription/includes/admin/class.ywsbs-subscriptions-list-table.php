<?php // phpcs:ignore WordPress.Files.FileName.InvalidClassFileName
/**
 * Subscription List Table
 *
 * @class   YITH_YWSBS_Subscriptions_List_Table
 * @package YITH WooCommerce Subscription
 * @since   1.0.0
 * @author  YITH
 */

if ( ! defined( 'ABSPATH' ) || ! defined( 'YITH_YWSBS_VERSION' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Class YITH_YWSBS_Subscriptions_List_Table
 */
class YITH_YWSBS_Subscriptions_List_Table extends WP_List_Table {

	/**
	 * Post type
	 *
	 * @var string
	 */
	private $post_type;

	/**
	 * YITH_YWSBS_Subscriptions_List_Table constructor.
	 *
	 * @param array $args Arguments.
	 */
	public function __construct( $args = array() ) {
		parent::__construct( array() );
		$this->post_type = 'ywsbs_subscription';
	}

	/**
	 * Return the columns
	 *
	 * @return array
	 */
	public function get_columns() {
		$columns = array(
			'cb'         => '<input type="checkbox" />',
			'id'         => __( 'ID', 'yith-woocommerce-subscription' ),
			'status'     => __( 'Status', 'yith-woocommerce-subscription' ),
			'post_title' => __( 'Product', 'yith-woocommerce-subscription' ),
			'recurring'  => __( 'Recurring', 'yith-woocommerce-subscription' ),
			'order'      => __( 'Order', 'yith-woocommerce-subscription' ),
			'user'       => __( 'User', 'yith-woocommerce-subscription' ),
			'expired'    => __( 'Expires', 'yith-woocommerce-subscription' ),
		);
		return $columns;
	}

	/**
	 * Prepare items
	 */
	public function prepare_items() {
		global $wpdb, $_wp_column_headers;

		$screen = get_current_screen();
		$get = $_GET; //phpcs:ignore

		$columns               = $this->get_columns();
		$hidden                = array();
		$sortable              = $this->get_sortable_columns();
		$this->_column_headers = array( $columns, $hidden, $sortable );

		$args  = array(
			'post_type' => $this->post_type,
		);
		$query = new WP_Query( $args );

		$orderby = ! empty( $get['orderby'] ) ? $get['orderby'] : 'ID';
		$order   = ! empty( $get['order'] ) ? $get['order'] : 'DESC';

		$link         = '';
		$order_string = '';
		if ( ! empty( $orderby ) & ! empty( $order ) ) {
			$order_string = 'ORDER BY ywsbs_pm.meta_value ' . $order;
			switch ( $orderby ) {
				case 'status':
					$link = " AND ( ywsbs_pm.meta_key = '_status' ) ";
					break;
				default:
					$order_string = ' ORDER BY ' . $orderby . ' ' . $order;
			}
		}

		$query = $wpdb->prepare(
			"SELECT ywsbs_p.* FROM $wpdb->posts as ywsbs_p INNER JOIN " . $wpdb->prefix . "postmeta as ywsbs_pm ON ( ywsbs_p.ID = ywsbs_pm.post_id )
        WHERE 1=1 $link
        AND ywsbs_p.post_type = %s
        GROUP BY ywsbs_p.ID $order_string", //phpcs:ignore
			$this->post_type
		);

		$totalitems = $wpdb->query( $query ); //phpcs:ignore

		$perpage = 15;
		// Which page is this?
		$paged = ! empty( $get['paged'] ) ? $get['paged'] : '';
		// Page Number.
		if ( empty( $paged ) || ! is_numeric( $paged ) || $paged <= 0 ) {
			$paged = 1;
		}
		// How many pages do we have in total?
		$totalpages = ceil( $totalitems / $perpage );
		// adjust the query to take pagination into account.
		if ( ! empty( $paged ) && ! empty( $perpage ) ) {
			$offset = ( $paged - 1 ) * $perpage;
			$query .= ' LIMIT ' . (int) $offset . ',' . (int) $perpage;
		}

		/* -- Register the pagination -- */
		$this->set_pagination_args(
			array(
				'total_items' => $totalitems,
				'total_pages' => $totalpages,
				'per_page'    => $perpage,
			)
		);
		// The pagination links are automatically built according to those parameters.

		$_wp_column_headers[ $screen->id ] = $columns;
		$this->items                       = $wpdb->get_results( $query ); //phpcs:ignore

	}

	/**
	 * Column default
	 *
	 * @param array|object $item Current item.
	 * @param string       $column_name Column name.
	 * @return mixed|string|void
	 */
	public function column_default( $item, $column_name ) {
		$subscription = new YWSBS_Subscription( $item->ID );

		switch ( $column_name ) {
			case 'id':
				return $item->ID;
			case 'status':
				$status = $subscription->status;
				return $status;
			case 'post_title':
				$product_name = $subscription->product_name;
				$quantity     = $subscription->quantity;
				$qty          = ( $quantity > 1 ) ? ' x ' . $quantity : '';
				return $product_name . $qty;
			case 'user':
				$user_data = get_userdata( $subscription->user_id );
				if ( ! empty( $user_data ) ) {
					return '<a href="' . admin_url( 'profile.php?user_id=' . $subscription->user_id ) . '">' . $user_data->user_nicename . '</a>';
				}
				break;
			case 'recurring':
				$recurring = $subscription->line_total;
				$currency  = $subscription->order_currency;
				return wc_price( $recurring, array( 'currency' => $currency ) );
			case 'order':
				$order_ids = $subscription->order_ids;
				if ( ! empty( $order_ids ) ) {
					$last_order = end( $order_ids );
					return '#' . $last_order;
				}
				break;
			case 'expired':
				$expired_date = get_post_meta( $item->ID, 'expired_date', true );
				$expired_date = ( '' !== $expired_date ) ? $expired_date : '';

				return ( $expired_date ) ? date_i18n( wc_date_format(), $expired_date ) : __( 'Never', 'yith-woocommerce-subscription' );
			default:
				return ''; // Show the whole array for troubleshooting purposes.
		}
	}

	/**
	 * Bulk action
	 *
	 * @return array
	 */
	public function get_bulk_actions() {

		$actions = $this->current_action();
		if ( ! empty( $actions ) && isset( $_POST['ywsbs_subscription_ids'] ) ) { //phpcs:ignore

			$subscriptions = (array) $_POST['ywsbs_subscription_ids']; //phpcs:ignore

			if ( 'delete' === $actions ) {
				foreach ( $subscriptions as $subscriptions_id ) {
					wp_delete_post( $subscriptions_id, true );
				}
			}

			$this->prepare_items();
		}

		$actions = array(
			'delete' => __( 'Delete', 'yith-woocommerce-subscription' ),
		);

		return $actions;
	}

	/**
	 * Return the sortable columns
	 *
	 * @return array[]
	 */
	public function get_sortable_columns() {
		$sortable_columns = array(
			'id'     => array( 'ID', false ),
			'status' => array( 'status', false ),
		);
		return $sortable_columns;
	}

	/**
	 * Column cb
	 *
	 * @param array|object $item Item.
	 * @return string|void
	 */
	public function column_cb( $item ) {
		return sprintf(
			'<input type="checkbox" name="ywsbs_subscription_ids[]" value="%s" />',
			$item->ID
		);
	}
}
