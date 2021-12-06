<?php
/**
 * Footer settings
 * 
 * @since 1.0.0
 */

add_action( 'customize_register', 'bz_upsell_section_register', 10 );
/**
 * Add settings for upsell links
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bz_upsell_section_register( $wp_customize ) {
    require get_template_directory() . '/inc/admin/customizer-upsell/upsell-section/upsell-features.php';
	require get_template_directory() . '/inc/admin/customizer-upsell/upsell-section/upsell-button.php';
    $wp_customize->register_section_type( 'BZ_Upsell_Button' );
	$wp_customize->register_control_type( 'Bz_Upsell_Control' );

    /**
     * Add Upsell Button
     * 
     */
    $wp_customize->add_section(
		new BZ_Upsell_Button( $wp_customize, 
            'upsell_button', [
                'button_text'   => esc_html__( 'Upgrade To Pro', 'niva-store' ),
                'button_url'    => esc_url( '//blazethemes.com/theme/niva-store-pro/' ),
                'priority'      => 1
            ]
        )
	);

	$features = [
        'Multiple Header Layouts',
        'Full Width/Boxed Width Site Layouts',
        'Advanced Slider Settings',
        'Featured Widgets',
        'Optimized for Speed',
        'Easy One Click Demo Import',
        'Flexible Colors Options',
        'Blog Multiple Layouts ( 6+ )',
        'Sidebar Layouts',
        'Meta Show/Hide Settings',
        'Typography Settings',
        'Section Wise Colors Option',
        'Header/Page/Footer Dynamic Options',
        'WooCommerce Compatible',
        'Custom Widget Styling',
        'Fully Multilingual and Translation ready',
        '10+ Custom Widgets',
        'Landing Page',
        '10 + Widgets Area',
        'Unlimited Support',
        'Lifetime Licensing'
    ];

    /**
     * Add premium features listing section
     * 
     */
	$wp_customize->add_section( 'upgrade_section', array(
        'title' => esc_html__( 'Premium Features', 'niva-store' ),
        'priority'  => 1,
    ));

    /**
     * List out "features" settings
     * 
     */
    $wp_customize->add_setting( 'upgrade_settings',
		array(
            'sanitize_callback' => 'wp_kses_post',
      )
	);

    $wp_customize->add_control( 
        new Bz_Upsell_Control( $wp_customize, 'upgrade_settings', array(
            'section'     => 'upgrade_section',
            'description'   => '<a href="//blazethemes.com/theme/niva-store-pro/" target="_blank">' .esc_html__( "Update To Pro", "niva-store" ). '</a>',
            'type'		  => 'bz-upsell',
            'features' 	  => $features,
        ))
    );

    /**
     * Add Upsell Button
     * 
     */
    $wp_customize->add_section(
        new BZ_Upsell_Button( $wp_customize, 
            'demo_import_button', [
                'button_text'   => esc_html__( 'Go to Import', 'niva-store' ),
                'button_url'    => esc_url( admin_url('themes.php?page=niva-store-info.php') ),
                'title'         => esc_html__('Import Demo Data', 'niva-store'),
                'priority'  => 1000,
            ]
        )
    );
}

/**
 * Enqueue theme upsell controls scripts
 * 
 */
function bz_upsell_scripts() {
    wp_enqueue_style( 'bz-upsell', get_template_directory_uri() . '/inc/admin/customizer-upsell/upsell-section/upsell.css', array(), '2.0.0', 'all' );
    wp_enqueue_script( 'bz-upsell', get_template_directory_uri() . '/inc/admin/customizer-upsell/upsell-section/upsell.js', array(), '2.0.0', 'all' );
}
add_action( 'customize_controls_enqueue_scripts', 'bz_upsell_scripts' );