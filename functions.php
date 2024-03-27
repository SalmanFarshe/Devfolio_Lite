<?php
    wp_enqueue_style( "styleFiles", get_stylesheet_uri( ) );
    wp_enqueue_style( "styleFilesResponsive", get_template_directory_uri( ) . "/responsive.css" );
    // add_theme_support('post-thumbnails');
    function adding_scripts(){
        wp_register_script( 'jQuery', 'https://code.jquery.com/jquery-3.6.0.min.js', null, null, true );
        wp_enqueue_script('jQuery');
        wp_register_script( 'AOS', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.js', null, null, true );
        wp_enqueue_script('AOS');
        wp_register_script( 'WOW', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', null, null, true );
        wp_enqueue_script('WOW');
        wp_enqueue_script( 'scriptt', get_template_directory_uri() . '/js/scrollspy.js', 1.1, true);
        wp_enqueue_script('scriptt');
        wp_enqueue_script( 'scriptRoot', get_template_directory_uri() . '/js/root.js', 1.1, true);
        wp_enqueue_script('scriptRoot');
        wp_enqueue_script( 'onepageNavjs', get_template_directory_uri() . '/js/onepageNav.js', 1.1, true);
        wp_enqueue_script('onepageNavjs');
    }
    add_action('wp_enqueue_scripts','adding_scripts');