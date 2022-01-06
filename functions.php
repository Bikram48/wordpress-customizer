<?php
    function mytheme_customize_register( $wp_customize ) {
        $wp_customize -> add_panel( 'header_navigation_panel',
        array(
            'title' => 'Header Navigation Panel',
            'description' => 'Adjust your header navigation',
            'priority' => 40,
            'capability' => 'edit_theme_option',
            'theme_options' => '',
            'active_callback' => ''
        ) );
    }
    
    add_action( 'customize_register', 'mytheme_customize_register' );


