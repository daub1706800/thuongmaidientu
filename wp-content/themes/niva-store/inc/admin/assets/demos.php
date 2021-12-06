<?php
/**
 * Demo info
 * 
 * 
 */
$demos_array = array(
    'niva-store' => array(
        'name' => 'Niva Store',
        'external_url' => 'https://demo.blazethemes.com/import-files/niva-store/niva-store.zip',
        'image' => 'https://i0.wp.com/themes.svn.wordpress.org/niva-store/1.3.0/screenshot.png?w=572&strip=all',
        'preview_url' => 'https://demo.blazethemes.com/niva-store/',
        'menu_array' => array(
            'primary' => 'Header Menu',
            'social' => 'Social Menu',
            'footer' => 'Footer Menu'
        ),
        'home_slug' => 'home',
        'blog_slug' => 'blog',
        'plugins' => array(
            'woocommerce' => array(
                'name' => 'Woocommerce',
                'source' => 'wordpress',
                'file_path' => 'woocommerce/woocommerce.php',
            )
        ),
        'tags' => array(
            'free' => 'Free'
        )
    ),
    'niva-store-pro' => array(
        'name' => 'Niva Store Pro',
        'type' => 'pro',
        'buy_url'=> 'https://blazethemes.com/theme/niva-store-pro/',
        'external_url' => 'https://demo.blazethemes.com/import-files/niva-store/niva-store-pro.zip',
        'image' => 'https://i0.wp.com/themes.svn.wordpress.org/niva-store/1.3.0/screenshot.png?w=572&strip=all',
        'preview_url' => 'https://demo.blazethemes.com/niva-store-pro/',
        'menu_array' => array(
            'primary' => 'Main Menu',
            'top-social' => 'Social menu',
            'footer' => 'Footer Menu'
        ),
        'plugins' => array(
            'woocommerce' => array(
                'name' => 'Woocommerce',
                'source' => 'wordpress',
                'file_path' => 'woocommerce/woocommerce.php',
            )
        ),
        'tags' => array(
            'pro' => 'Pro'
        )
    )
);
return apply_filters( 'niva_store__demos_array_filter', $demos_array );