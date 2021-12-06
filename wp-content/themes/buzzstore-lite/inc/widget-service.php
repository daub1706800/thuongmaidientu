<?php
/**
 * BuzzStore Lite Service Area
 */
add_action('widgets_init', 'buzzstore_lite_service_widget');

function buzzstore_lite_service_widget() {
    register_widget('buzzstore_lite_service_widget');
}

class buzzstore_lite_service_widget extends WP_Widget {

    /**
     * Register widget with WordPress.
    */
    public function __construct() {
        parent::__construct(
                'buzzstore_lite_service_widget', esc_html__('&nbsp;Buzz: Services','buzzstore-lite'), array(
            'description' => esc_html__('A widget that display Services', 'buzzstore-lite')
        ));
    }

    private function widget_fields() {

        $fields = array(
            'title' => array(
                'buzzstore_widgets_name' => 'title',
                'buzzstore_widgets_title' => esc_html__('Main Title', 'buzzstore-lite'),
                'buzzstore_widgets_field_type' => 'title',
            ),

            'service_icon1' => array(
                'buzzstore_widgets_name' => 'service_icon1',
                'buzzstore_widgets_title' => esc_html__('Service Icon 1', 'buzzstore-lite'),
                'buzzstore_widgets_field_type' => 'title',
            ),
            'service_title1' => array(
                'buzzstore_widgets_name' => 'service_title1',
                'buzzstore_widgets_title' => esc_html__('Service Title 1', 'buzzstore-lite'),
                'buzzstore_widgets_field_type' => 'title',
            ),

            'service_description1' => array(
                'buzzstore_widgets_name' => 'service_description1',
                'buzzstore_widgets_title' => esc_html__('Service Description 1', 'buzzstore-lite'),
                'buzzstore_widgets_field_type' => 'textarea',
            ),

            
            'service_icon2' => array(
                'buzzstore_widgets_name' => 'service_icon2',
                'buzzstore_widgets_title' => esc_html__('Service Icon 2', 'buzzstore-lite'),
                'buzzstore_widgets_field_type' => 'title',
            ),
            'service_title2' => array(
                'buzzstore_widgets_name' => 'service_title2',
                'buzzstore_widgets_title' => esc_html__('Service Title 2', 'buzzstore-lite'),
                'buzzstore_widgets_field_type' => 'title',
            ),

            'service_description2' => array(
                'buzzstore_widgets_name' => 'service_description2',
                'buzzstore_widgets_title' => esc_html__('Service Description 2', 'buzzstore-lite'),
                'buzzstore_widgets_field_type' => 'textarea',
            ),

            'service_icon3' => array(
                'buzzstore_widgets_name' => 'service_icon3',
                'buzzstore_widgets_title' => esc_html__('Service Icon 3', 'buzzstore-lite'),
                'buzzstore_widgets_field_type' => 'title',
            ),
            'service_title3' => array(
                'buzzstore_widgets_name' => 'service_title3',
                'buzzstore_widgets_title' => esc_html__('Service Title 3', 'buzzstore-lite'),
                'buzzstore_widgets_field_type' => 'title',
            ),

            'service_description3' => array(
                'buzzstore_widgets_name' => 'service_description3',
                'buzzstore_widgets_title' => esc_html__('Service Description 3', 'buzzstore-lite'),
                'buzzstore_widgets_field_type' => 'textarea',
            ),

            'service_icon4' => array(
                'buzzstore_widgets_name' => 'service_icon4',
                'buzzstore_widgets_title' => esc_html__('Service Icon 4', 'buzzstore-lite'),
                'buzzstore_widgets_field_type' => 'title',
            ),
            'service_title4' => array(
                'buzzstore_widgets_name' => 'service_title4',
                'buzzstore_widgets_title' => esc_html__('Service Title 4', 'buzzstore-lite'),
                'buzzstore_widgets_field_type' => 'title',
            ),

            'service_description4' => array(
                'buzzstore_widgets_name' => 'service_description4',
                'buzzstore_widgets_title' => esc_html__('Service Description 4', 'buzzstore-lite'),
                'buzzstore_widgets_field_type' => 'textarea',
            ),

            
            
            
        );

        return $fields;
    }

    public function widget($args, $instance) {
        extract($args);
        extract($instance);
        
        /**
         * wp query for first block
        */
        $blog_post_title           = empty( $instance['title'] ) ? '' : $instance['title'];
        $service_title1       = empty( $instance['service_title1'] ) ? '' : $instance['service_title1'];
        $service_title2       = empty( $instance['service_title2'] ) ? '' : $instance['service_title2'];
        $service_title3       = empty( $instance['service_title3'] ) ? '' : $instance['service_title3'];
        $service_title4       = empty( $instance['service_title4'] ) ? '' : $instance['service_title4'];
        
        $service_icon1       = empty( $instance['service_icon1'] ) ? '' : $instance['service_icon1'];
        $service_icon2       = empty( $instance['service_icon2'] ) ? '' : $instance['service_icon2'];
        $service_icon3       = empty( $instance['service_icon3'] ) ? '' : $instance['service_icon3'];
        $service_icon4       = empty( $instance['service_icon4'] ) ? '' : $instance['service_icon4'];
        
        $service_description1       = empty( $instance['service_description1'] ) ? '' : $instance['service_description1'];
        $service_description2       = empty( $instance['service_description2'] ) ? '' : $instance['service_description2'];
        $service_description3       = empty( $instance['service_description3'] ) ? '' : $instance['service_description3'];
        $service_description4       = empty( $instance['service_description4'] ) ? '' : $instance['service_description4'];


        

        echo $before_widget; ?>

        <section id="fromBlog" class="buzz-container home-section buzz-service-widget buzz-clearfix">
            
            <div class="buzz-titlewrap">
              <?php if(!empty( $blog_post_title )) { ?>
                  <h2 class="buzz-title wow zoomIn" data-wow-delay="0.3s">
                      <?php echo esc_html( $blog_post_title ); ?>
                  </h2>
              <?php } ?>
            </div>

            <div class="blog-container starSeparatorBox">

                <div class="starSeparator wow zoomIn" data-wow-delay="0.3s">
                    <span class="icon-star" aria-hidden="true"></span>
                </div>

                <div class="buzz-container buzz-clearfix buzz-serviceswrap layout2">                   
                <div class="grid grid-4">
                  <div class="buzz-services">
                      <?php if(!empty( $service_title1 )) { ?>                        
                      <div class="buzz-services-item wow fadeInLeft" data-wow-delay="0.3s">
                          <span class="fa <?php echo esc_attr( $service_icon1 ); ?>"></span>
                          <div class="content">
                            <h4><?php echo esc_html( $service_title1 ); ?></h4>
                            <p><?php echo esc_html( $service_description1 ); ?></p>
                          </div>
                      </div>
                      <?php } ?>
                  </div>

                  <div class="buzz-services">
                      <?php if(!empty( $service_title2 )) { ?>                        
                      <div class="buzz-services-item wow fadeInLeft" data-wow-delay="0.3s">
                          <span class="fa <?php echo esc_attr( $service_icon2 ); ?>"></span>
                          <div class="content">
                            <h4><?php echo esc_html( $service_title2 ); ?></h4>
                            <p><?php echo esc_html( $service_description2 ); ?></p>
                          </div>
                      </div>
                      <?php } ?>
                  </div>
                  <div class="buzz-services">
                      <?php if(!empty( $service_title3 )) { ?>                        
                      <div class="buzz-services-item wow fadeInLeft" data-wow-delay="0.3s">
                          <span class="fa <?php echo esc_attr( $service_icon3 ); ?>"></span>
                          <div class="content">
                            <h4><?php echo esc_html( $service_title3); ?></h4>
                            <p><?php echo esc_html( $service_description3 ); ?></p>
                          </div>
                      </div>
                      <?php } ?>
                  </div>

                  <div class="buzz-services">
                      <?php if(!empty( $service_title4 )) { ?>                        
                      <div class="buzz-services-item wow fadeInLeft" data-wow-delay="0.4s">
                          <span class="fa <?php echo esc_attr( $service_icon4 ); ?>"></span>
                          <div class="content">
                            <h4><?php echo esc_html( $service_title4); ?></h4>
                            <p><?php echo esc_html( $service_description4 ); ?></p>
                          </div>
                      </div>
                      <?php } ?>
                  </div>
                </div>

                  
                  
              </div>
            </div>
        </section>

        <?php
        echo $after_widget;
    }

    public function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $widget_fields = $this->widget_fields();
        foreach ($widget_fields as $widget_field) {
            extract($widget_field);
            $instance[$buzzstore_widgets_name] = buzzstore_widgets_updated_field_value($widget_field, $new_instance[$buzzstore_widgets_name]);
        }
        return $instance;
    }

    public function form($instance) {
        $widget_fields = $this->widget_fields();
        foreach ($widget_fields as $widget_field) {
            extract($widget_field);
            $buzzstore_widgets_field_value = !empty($instance[$buzzstore_widgets_name]) ? $instance[$buzzstore_widgets_name] : '';
            buzzstore_widgets_show_widget_field($this, $widget_field, $buzzstore_widgets_field_value);
        }
    }

}