<?php
    function mytheme_customize_register( $wp_customize ) {
        
        $wp_customize->add_panel( 'header_navigation_panel',
        array(
            'title' => 'Header Navigation Panel',
            'description' => 'Adjust your header navigation',
            'priority' => 160,
        ) );

        $wp_customize->add_section( 'custom_control_section',
        array(
            'title' => 'Custom Section',
            'description' => 'This is custom section',
            'panel' => 'header_navigation_panel',
            'priority' => 40,
        ) );

        $wp_customize->add_setting( 'sample_default_text',
        array(
            'default' => '#081b4d',
            'transport' => 'refresh',
            'type' => 'theme_mod',
            'theme_supports' => '',
        ) );

        $wp_customize->add_control( 'sample_default_text',
        array(
            'label' => 'Default text control',
            'description' => 'This is a text type control',
            'section' => 'custom_control_section',
            'priority' => 10,
            'type' => 'text',
            'capability' => 'edit_theme_options',
        ));
    }
    
    add_action( 'customize_register', 'mytheme_customize_register' );

    function estore_customize_preview_js() {
        
        error_log(print_r(get_template_directory_uri(),true));

	    wp_enqueue_script( 
          'mytheme-themecustomizer',            
          get_template_directory_uri().'/customizer.js',
          '',   
          '',                   
          true                     
        );		 
    }

    add_action( 'customize_controls_enqueue_scripts', 'estore_customize_preview_js' );

   
    function background_color_css() {

        $primary_color = get_theme_mod( 'sample_default_text', '#00a9e0' );

        $estore_internal_css = '';

        if ( $primary_color != '#00a9e0' ) {
            $estore_internal_css = 'body{background-color:'.$primary_color.'; }';
        }

        if ( ! empty( $estore_internal_css ) ) {
    ?>
    
        <style type="text/css"><?php echo $estore_internal_css; ?></style>

    <?php
        }
    }

    add_action('wp_head','background_color_css');




