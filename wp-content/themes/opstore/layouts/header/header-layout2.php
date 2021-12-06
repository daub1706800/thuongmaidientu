<header class="site-header header-2">
    <?php opstore_mobile_nav(); ?>
    <div class="container">
        <div class="row top">              
                
            <div class="header-middle-wrapp">
                <div class="col-sm-3 col-md-3 col-xs-12 hidden-xs">
                    <?php opstore_site_brandings(); ?>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12 hidden-xs">
                    <?php 
                     if(is_active_sidebar('header-area')){
                        dynamic_sidebar('header-area');
                     }
                    ?>
                </div>
                <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="middle-right-wrapp">
                        <div class="mobile-logo visible-xs">
                            <?php opstore_site_brandings(); ?>
                        </div>
                        <?php do_action('opstore_header_icons'); ?>
                    </div>
                </div>
            </div>
            <!--right-->
        </div>
    </div>

    <nav class="navbar navbar-default">
        
        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="container">
                <?php 
                $args = array(
                    'theme_location' => 'primary',
                    'menu_class' => 'nav navbar-nav nav-left'
                );

                if( has_nav_menu( 'primary' ) ):
                    wp_nav_menu( $args );
                endif;

                $search_enable = get_theme_mod('opstore_search_enable','show');
                if($search_enable == 'show'){
                    ?>
                    <div class="searchbox hidden-xs">
                        <span class="searchbox-icon"><span class="lnr lnr-magnifier"></span></span>
                    </div>
                <?php
                } 
                ?>
            </div>
            <!--container-->
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</header>