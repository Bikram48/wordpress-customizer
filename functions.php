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

        $wp_customize -> add_section ( 'custom_control_section',
        array(
            'title' => 'Custom Section',
            'description' => 'This is custom section',
            'priority' => 40,
            'capability' => 'edit_theme_option',
            'theme_options' => '',
            'active_callback' => '',
            'description_hidden' => 'false',
        ) );

        $wp_customize -> add_setting ( 'sample_default_text',
        array(
            'default' => '',
            'transport' => 'refresh',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_option',
            'theme_supports' => '',
            'validate_callback' => '',
            'sanitize_callback' => '',
            'sanitize_js_callback' => '',
            'dirty' => false,
        ) );

        $wp_customize -> add_control ( 'sample_default_text',
        array(
            'label' => 'Default text control',
            'description' => 'This is a text type control',
            'section' => 'custom_control_section',
            'priority' => 10,
            'type' => 'text',
            'capability' => 'edit_theme_option',
            'input_attrs' => array(
                'placeholder' => 'Enter full name'
            ),
        ) );
    }
    
    add_action( 'customize_register', 'mytheme_customize_register' );


