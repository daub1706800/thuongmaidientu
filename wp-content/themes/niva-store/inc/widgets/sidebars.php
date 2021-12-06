<?php 

/**
 * Register theme sidebars
 * @package Niva Store 
 */

 
function niva_store_widgets_init() {

	register_sidebar( array(
		'name' => esc_html__( 'Blog Right Sidebar', 'niva-store' ),
		'id' => 'blogright',
		'description' => esc_html__( 'Right sidebar for the blog', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Home Banner', 'niva-store' ),
		'id' => 'banner',
		'description' => esc_html__( 'For Images and Sliders.', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Announcement', 'niva-store' ),
		'id' => 'announcement',
		'description' => esc_html__( 'This is Announcement position but can be used for other things', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );	

	register_sidebar( array(
		'name' => esc_html__( 'Homepage Sections', 'niva-store' ),
		'id' => 'homepage',
		'description' => esc_html__( 'Homepage sections', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Page Right Sidebar', 'niva-store' ),
		'id' => 'pageright',
		'description' => esc_html__( 'Right sidebar for pages', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	
	register_sidebar( array(
		'name' => esc_html__( 'Top 1', 'niva-store' ),
		'id' => 'top1',
		'description' => esc_html__( 'Top 1 position', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Top 2', 'niva-store' ),
		'id' => 'top2',
		'description' => esc_html__( 'Top 2 position', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Top 3', 'niva-store' ),
		'id' => 'top3',
		'description' => esc_html__( 'Top 3 position', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Top 4', 'niva-store' ),
		'id' => 'top4',
		'description' => esc_html__( 'Top 4 position', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	
	register_sidebar( array(
		'name' => esc_html__( 'Content Top 1', 'niva-store' ),
		'id' => 'ctop1',
		'description' => esc_html__( 'Content Top 1 position', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Content Top 2', 'niva-store' ),
		'id' => 'ctop2',
		'description' => esc_html__( 'Content Top 2 position', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Content Top 3', 'niva-store' ),
		'id' => 'ctop3',
		'description' => esc_html__( 'Content Top 3 position', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Content Top 4', 'niva-store' ),
		'id' => 'ctop4',
		'description' => esc_html__( 'Content Top 4 position', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );		
			
	register_sidebar( array(
		'name' => esc_html__( 'Content Bottom 1', 'niva-store' ),
		'id' => 'cbottom1',
		'description' => esc_html__( 'Content Bottom 1 position', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Content Bottom 2', 'niva-store' ),
		'id' => 'cbottom2',
		'description' => esc_html__( 'Content Bottom 2 position', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Content Bottom 3', 'niva-store' ),
		'id' => 'cbottom3',
		'description' => esc_html__( 'Content Bottom 3 position', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Content Bottom 4', 'niva-store' ),
		'id' => 'cbottom4',
		'description' => esc_html__( 'Content Bottom 4 position', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Inset Top', 'niva-store' ),
		'id' => 'inset-top',
		'description' => esc_html__( 'This is an Inset Top position just above the main content and between the left and right column sidebars', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Inset Bottom', 'niva-store' ),
		'id' => 'inset-bottom',
		'description' => esc_html__( 'This is an Inset Bottom position just below the main content and between the left and right column sidebars', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	
	register_sidebar( array(
		'name' => esc_html__( 'Bottom 1', 'niva-store' ),
		'id' => 'bottom1',
		'description' => esc_html__( 'Bottom 1 position', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Bottom 2', 'niva-store' ),
		'id' => 'bottom2',
		'description' => esc_html__( 'Bottom 2 position', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Bottom 3', 'niva-store' ),
		'id' => 'bottom3',
		'description' => esc_html__( 'Bottom 3 position', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Bottom 4', 'niva-store' ),
		'id' => 'bottom4',
		'description' => esc_html__( 'Bottom 4 position', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );		
	register_sidebar( array(
		'name' => esc_html__( 'Header', 'niva-store' ),
		'id' => 'header',
		'description' => esc_html__( 'Located in the top header area but limited to header styles 1 and 4', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Call to Action', 'niva-store' ),
		'id' => 'cta',
		'description' => esc_html__( 'For adding a Call to Action just below the banner sidebar.', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );	
	
	register_sidebar( array(
		'name' => esc_html__( 'Breadcrumbs', 'niva-store' ),
		'id' => 'breadcrumbs',
		'description' => esc_html__( 'For adding breadcrumb navigation if using a plugin, or you can add content here.', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Showcase Top', 'niva-store' ),
		'id' => 'showcase-top',
		'description' => esc_html__( 'This is a sidebar position that sits just below the Banner and Call to Action, and is full width.', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	) );	

	register_sidebar( array(
		'name' => esc_html__( 'Showcase Bottom', 'niva-store' ),
		'id' => 'showcase-bottom',
		'description' => esc_html__( 'This is a sidebar position that sits above the bottom sidebar group and is full width.', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title divider-with-text no-margin"><h3>',
		'after_title' => '</h3><span class="line"></span></div>',
	) );	

	// instagram section
	register_sidebar( array(
		'name' => esc_html__( 'Social Section', 'niva-store' ),
		'id' => 'footer-insta-section',
		'description' => esc_html__( 'This is a section to display instagram images.', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title divider-with-text no-margin"><h3>',
		'after_title' => '</h3><span class="line"></span></div>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Footer', 'niva-store' ),
		'id' => 'footer',
		'description' => esc_html__( 'This is a sidebar position that sits above the footer menu and copyright', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );	
	
	// enable or disable woocommerce sidebars
	register_sidebar( array(
		'name' =>  esc_html__( 'WooCommerce Sidebar', 'niva-store' ),
		'id' => 'shop',
		'description' => esc_html__( 'Woocommerce Sidebar', 'niva-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	

	// enable or disable bbpress sidebars	
	register_sidebar( array(
		'name' => esc_html__( 'bbPress Sidebar', 'niva-store' ),
		'id' => 'bbpress-sidebar',
		'description' => esc_html__( 'This is a special sidebar that is available if you use the bbPress forum plugin.', 'niva-store' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 id="bbpress-heading">',
		'after_title' => '</h3>',
	) );		

	if ( niva_store_is_active_woocommerce() ) {
		register_widget('Niva_store_Category_Products');
	}


	
}
add_action( 'widgets_init', 'niva_store_widgets_init' );


/**
 * Count the number of widgets to enable resizable widgets
 * in the top group.
 */

function niva_store_top() {
	$count = 0;
	if ( is_active_sidebar( 'top1' ) )
		$count++;
	if ( is_active_sidebar( 'top2' ) )
		$count++;
	if ( is_active_sidebar( 'top3' ) )
		$count++;		
	if ( is_active_sidebar( 'top4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-md-6';
			break;
		case '3':
			$class = 'col-md-4';
			break;
		case '4':
			$class = 'col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . esc_attr($class) . '"';
}

/**
 * Count the number of widgets to enable resizable widgets
 * in the content top group.
 */

function niva_store_ctop() {
	$count = 0;
	if ( is_active_sidebar( 'ctop1' ) )
		$count++;
	if ( is_active_sidebar( 'ctop2' ) )
		$count++;
	if ( is_active_sidebar( 'ctop3' ) )
		$count++;		
	if ( is_active_sidebar( 'ctop4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-md-6';
			break;
		case '3':
			$class = 'col-md-4';
			break;
		case '4':
			$class = 'col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . esc_attr($class) . '"';
}

/**
 * Count the number of widgets to enable resizable widgets
 * in the content bottom group.
 */

function niva_store_cbottom() {
	$count = 0;
	if ( is_active_sidebar( 'cbottom1' ) )
		$count++;
	if ( is_active_sidebar( 'cbottom2' ) )
		$count++;
	if ( is_active_sidebar( 'cbottom3' ) )
		$count++;		
	if ( is_active_sidebar( 'cbottom4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-md-6';
			break;
		case '3':
			$class = 'col-md-4';
			break;
		case '4':
			$class = 'col-md-3';
			break;
	}
	if ( $class )
		echo 'class="' . esc_attr($class) . '"';
}
/**
 * Count the number of widgets to enable resizable widgets
 * in the bottom group.
 */

function niva_store_bottom() {
	$count = 0;
	if ( is_active_sidebar( 'bottom1' ) )
		$count++;
	if ( is_active_sidebar( 'bottom2' ) )
		$count++;
	if ( is_active_sidebar( 'bottom3' ) )
		$count++;		
	if ( is_active_sidebar( 'bottom4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-lg-6';
			break;
		case '3':
			$class = 'col-lg-4';
			break;
		case '4':
			$class = 'col-lg-3';
			break;
	}
	if ( $class )
		echo 'class="' . esc_attr($class) . '"';
}








