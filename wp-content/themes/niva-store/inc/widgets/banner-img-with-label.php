<?php
/**
 * Widget for Image with caption.
 *
 * @package Blaze Themes
 * @subpackage nivastore
 * @since 1.0.0
 */
add_action( 'widgets_init', 'niva_store_register_banner_image_with_caption' );

function niva_store_register_banner_image_with_caption() {
    register_widget( 'Banner_image_with_caption' );
}

class Banner_image_with_caption extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        $widget_ops = array( 
            'classname' => 'profile widget',
            'description' => __( 'Banner Image with caption', 'niva-store' )
        );
        parent::__construct( 'banner_image_with_caption', __( 'Niva Store: Banner Image with caption', 'niva-store' ), $widget_ops );
    }

    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {
        
        $fields = array(

        	'banner_image_main' => array(
        		'niva_store_widgets_name'         => 'banner_image_main',
                'niva_store_widgets_title'        => __( 'Banner Image', 'niva-store' ),
                'niva_store_widgets_field_type'   => 'upload'
        	),

            'banner_image_withcaption_title' => array(
                'niva_store_widgets_name'         => 'banner_image_withcaption_title',
                'niva_store_widgets_title'        => __( 'Caption Title', 'niva-store' ),
                'niva_store_widgets_field_type'   => 'text'
            ),

            'banner_image_withcaption_link_text' => array(
                'niva_store_widgets_name'         => 'banner_image_withcaption_link_text',
                'niva_store_widgets_title'        => __( 'Caption Link Text', 'niva-store' ),
                'niva_store_widgets_field_type'   => 'text'
            ),

            'banner_image_withcaption_link' => array(
                'niva_store_widgets_name'         => 'banner_image_withcaption_link',
                'niva_store_widgets_title'        => __( 'link', 'niva-store' ),
                'niva_store_widgets_field_type'   => 'url'
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
        if( empty( $instance ) ) {
            return ;
        }
       
        $banner_image_main = empty( $instance['banner_image_main'] ) ? '' : $instance['banner_image_main'];
        $banner_image_withcaption_title = empty( $instance['banner_image_withcaption_title'] ) ? '' : $instance['banner_image_withcaption_title'];
        $banner_image_withcaption_link_text = empty( $instance['banner_image_withcaption_link_text'] ) ? '' : $instance['banner_image_withcaption_link_text'];
        $banner_image_withcaption_link = empty( $instance['banner_image_withcaption_link'] ) ? '' : $instance['banner_image_withcaption_link'];



        echo $before_widget;

            ?>
            <div class="textwidget banner-image-widget">
                <?php if( $banner_image_main ){
                    ?>
                    <img src="<?php echo esc_url($banner_image_main); ?>">
                <?php } ?>

                <div class="banner-caption-content">
                    <h1 class="banner-caption-content-title animated bounceInRight">
                        <span style="background-color: #75AADA;">
                            <?php echo wp_kses_post( $banner_image_withcaption_title ); ?>        
                        </span>
                    </h1>
                    <?php if($banner_image_withcaption_link) { ?>
                        <a target="_blank" href="<?php echo esc_url($banner_image_withcaption_link); ?>" class="banner-button" rel="noopener">
                            <?php echo $banner_image_withcaption_link_text; ?>
                        </a>
                    <?php } ?>
                    
                 </div>
             </div>
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
     * @uses    niva_store_widgets_updated_field_value()      defined in bloglife-widget-fields.php
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
     * @uses    niva_store_widgets_show_widget_field()        defined in bloglife-widget-fields.php
     */
    public function form( $instance ) {
        $widget_fields = $this->widget_fields();

        // Loop through fields
        foreach ( $widget_fields as $widget_field ) {

            // Make array elements available as variables
            extract( $widget_field );
            $niva_store_widgets_field_value = !empty( $instance[$niva_store_widgets_name] ) ? wp_kses_post( $instance[$niva_store_widgets_name] ) : '';
            niva_store_widgets_show_widget_field( $this, $widget_field, $niva_store_widgets_field_value );
        }
    }

}