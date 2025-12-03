<?php
function jalan_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'jalan_enqueue_styles');


/* --
   1. Enqueue custom-style.css (styles for front-page + single)
   ---- */
function jalan_custom_styles() {
    wp_enqueue_style(
        'custom-style',
        get_stylesheet_directory_uri() . '/custom-style.css',
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'jalan_custom_styles');


/* 
   2. Enqueue logged-in.css (ONLY for logged-in users)
    */
function jalan_logged_in_styles() {
    if ( is_user_logged_in() ) {
        wp_enqueue_style(
            'logged-in-css',
            get_stylesheet_directory_uri() . '/logged-in.css',
            array(),
            wp_get_theme()->get('Version')
        );
    }
}
add_action('wp_enqueue_scripts', 'jalan_logged_in_styles');
