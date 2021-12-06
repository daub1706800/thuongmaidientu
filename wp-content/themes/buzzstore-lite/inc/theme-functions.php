<?php
/**
 * remove parent actions
 */
add_action( 'init', 'buzzstore_lite_remove_action');

function buzzstore_lite_remove_action() {
    remove_action('buzzstore-services-area','buzzstore_service_section');
}
/**
 * BuzzStore Lite Service section
*/
if ( ! function_exists( 'buzzstore_lite_service_section' ) ) {
    function buzzstore_lite_service_section() {
          $icon_one = esc_attr( get_theme_mod( 'buzzstore_first_icon_block_area', 'fa-user' ) );
          $icon_title_one = esc_html( get_theme_mod( 'buzzstore_first_title_icon_block_area' ) );      
          $icon_title1 = esc_html( get_theme_mod( 'buzzstore_first_title' ) );      
          $icon_two = esc_attr( get_theme_mod( 'buzzstore_second_icon_block_area', 'fa-university' ) );
          $icon_title_two = esc_html( get_theme_mod( 'buzzstore_second_title_icon_block_area' ) );      
          $icon_title_2 = esc_html( get_theme_mod( 'buzzstore_second_title' ) );      
          $icon_three = esc_attr( get_theme_mod( 'buzzstore_third_icon_block_area', 'fa-futbol-o' ) );
          $icon_title_three = esc_html( get_theme_mod( 'buzzstore_thired_title_icon_block_area' ) );       
          $icon_title_3 = esc_html( get_theme_mod( 'buzzstore_thired_title' ) );       
          $icon_area = esc_attr( get_theme_mod( 'buzzstore_icon_block_section','enable' ) );
          if(!empty($icon_area) && $icon_area == 'enable') {
        ?>
          <section class="buzz-servicesarea">
              <div class="buzz-container buzz-clearfix buzz-serviceswrap">                   
                  <div class="buzz-services">
                      <?php if(!empty( $icon_title_one )) { ?>                        
                      <div class="buzz-services-item wow fadeInLeft" data-wow-delay="0.3s">
                          <span class="fa <?php echo esc_attr( $icon_one ); ?>"></span>
                          <div class="content">
                            <h4><?php echo esc_html( $icon_title1 ); ?></h4>
                            <p><?php echo esc_html( $icon_title_one ); ?></p>
                          </div>
                      </div>
                      <?php } ?>
                  </div>
                  <div class="buzz-services">
                      <?php if(!empty( $icon_title_two )) { ?> 
                      <div class="buzz-services-item wow fadeInUp" data-wow-delay="0.3s">
                          <span class="fa <?php echo esc_attr( $icon_two ); ?>"></span>
                          <div class="content">
                            <h4><?php echo esc_html( $icon_title_2 ); ?></h4>
                            <p><?php echo esc_html( $icon_title_two ); ?></p>
                          </div>
                      </div>
                      <?php } ?>
                  </div>
                  <div class="buzz-services">
                      <?php if(!empty( $icon_title_three )) { ?>
                      <div class="buzz-services-item wow fadeInRight" data-wow-delay="0.3s">
                          <span class="fa <?php echo esc_attr( $icon_three ); ?>"></span>
                          <div class="content">
                            <h4><?php echo esc_html( $icon_title_3 ); ?></h4>
                            <p><?php echo esc_html( $icon_title_three ); ?></p>
                          </div>
                      </div>
                      <?php } ?>
                  </div>
              </div>
          </section>
  <?php  } } }
  add_action('buzzstore-services-area','buzzstore_lite_service_section');