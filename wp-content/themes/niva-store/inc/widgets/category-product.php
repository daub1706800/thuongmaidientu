<?php
/**
 * Widget for displaying category products.
 *
 * @package Niva Store
 */

class Niva_store_Category_Products extends WP_Widget{

  /**
     * Register widget with WordPress.
     */
    public function __construct() {
        $widget_ops = array( 
            'classname'                     => 'niva-store-widget niva_store_category_products',
            'description'                   => __( 'Display products from selected category.', 'niva-store' ),
            'customize_selective_refresh'   => true,
        );
        parent::__construct( 'niva_store_category_products', __( 'Niva Store: Display Products by Category', 'niva-store' ), $widget_ops );
    }

    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {

        $fields = array(
            'widget_title' => array(
                'niva_store_widgets_name'         => 'widget_title',
                'niva_store_widgets_title'        => __( 'Widget Title', 'niva-store' ),
                'niva_store_widgets_default'      => __( 'Category Products', 'niva-store' ),
                'niva_store_widgets_field_type'   => 'text'
            ),

            'category_product_cat_id' => array(
                'niva_store_widgets_name'         => 'category_product_cat_id',
                'niva_store_widgets_title'        => __( 'Product Categories', 'niva-store' ),
                'niva_store_widgets_default'      => '',
                'niva_store_widgets_field_type'   => 'woo_category_dropdown'
            ),

            'category_product_slider_post_count' => array(
                'niva_store_widgets_name'         => 'category_product_slider_post_count',
                'niva_store_widgets_title'        => __( 'Post Count', 'niva-store' ),
                'niva_store_widgets_default'      => 6,
                'niva_store_widgets_field_type'   => 'number'
            ),
            'category_product_enable_slider' => array(
                'niva_store_widgets_name'         => 'category_product_enable_slider',
                'niva_store_widgets_title'        => __( 'Enable Slider', 'niva-store' ),
                'niva_store_widgets_default'      => 6,
                'niva_store_widgets_field_type'   => 'checkbox'
            ),
        );
        return $fields;
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract( $args );
        if ( empty( $instance ) ) {
            return;
        }

        $widget_title               = empty( $instance['widget_title'] ) ? '' : $instance['widget_title'];
        $category_product_cat_id  = empty( $instance['category_product_cat_id'] ) ? '' : $instance['category_product_cat_id'];
        $category_product_slider_post_count = empty( $instance['category_product_slider_post_count'] ) ? '' : $instance['category_product_slider_post_count'];
        $category_product_enable_slider = empty($instance['category_product_enable_slider'])? '' : $instance['category_product_enable_slider'];

        echo $before_widget;
?>
<div class="bz-container">
    <div class="niva-store-category-products-section <?php if($category_product_enable_slider){ echo 'niva_product_cat_slider_wrap';} ?>">
      <?php
      
        if( is_numeric( $category_product_cat_id ) ) {
            $term = get_term( $category_product_cat_id );
            $category_product_cat_id = $term->slug;
        }
        
        $category_product_cat_args = array(
            'post_type'     => 'product',
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'slug',
                    'terms' => array( $category_product_cat_id ),
                ),
            ),
            'posts_per_page'=> absint( $category_product_slider_post_count ),
        );

        $category_product_cat_query = new WP_Query( $category_product_cat_args );
        
        if ( $category_product_cat_query -> have_posts() ) :
            ?>
            <?php
            $get_cat_link = get_term_link($category_product_cat_id, 'product_cat');
              if ( !empty( $widget_title ) ) {?>
                <div class="divider-with-text no-margin">
                    <h3><a href="<?php echo esc_url($get_cat_link); ?>"><?php echo esc_html( $widget_title ); ?></a></h3>
                    <span class="line"></span>
                </div>
              <?php }
            ?>
            <div class="category-products-wrap clearfix <?php if($category_product_enable_slider){ echo 'niva_product_cat_slider';} ?>">
            <?php
            while ( $category_product_cat_query -> have_posts() ) : $category_product_cat_query -> the_post();
                wc_get_template_part( 'content', 'product' );
            endwhile;
            ?>
            </div><!-- .category-products-wrap -->
            <?php 
        endif;
        wp_reset_postdata();
      ?>
        
    </div><!-- .niva-store-category-products-section -->
</div><!-- bz-container -->
<?php
      echo $after_widget;
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param   array   $new_instance   Values just sent to be saved.
     * @param   array   $old_instance   Previously saved values from database.
     *
     * @uses    niva_store_widgets_updated_field_value()      defined in widget-fields.php
     *
     * @return  array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;

        $widget_fields = $this->widget_fields();

        // Loop through fields
        foreach ( $widget_fields as $widget_field ) {

            extract( $widget_field );

            // Use helper function to get updated field values
            $instance[$niva_store_widgets_name] = niva_store_widgets_updated_field_value( $widget_field, $new_instance[$niva_store_widgets_name] );
        }

        return $instance;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param   array $instance Previously saved values from database.
     *
     * @uses    niva_store_widgets_show_widget_field()        defined in widget-fields.php
     */
    public function form( $instance ) {

        $widget_fields = $this->widget_fields();

        // Loop through fields
        foreach ( $widget_fields as $widget_field ) {

            // Make array elements available as variables
            extract( $widget_field );
            if( $niva_store_widgets_field_type === 'woo_category_dropdown' ) {
                if( is_numeric( $instance[$niva_store_widgets_name] ) ) {
                    $term = get_term( $instance[$niva_store_widgets_name] );
                    $instance[$niva_store_widgets_name] = $term->slug;
                }
            }

            if ( empty( $instance ) && isset( $niva_store_widgets_default ) ) {
                $niva_store_widgets_field_value = $niva_store_widgets_default;
            } elseif ( empty( $instance ) ) {
                $niva_store_widgets_field_value = '';
            } else {
                $niva_store_widgets_field_value = wp_kses_post( $instance[$niva_store_widgets_name] );
            }
            niva_store_widgets_show_widget_field( $this, $widget_field, $niva_store_widgets_field_value );
        }
    }
}
