<?php

// Enqueue theme styles
if ( ! function_exists( 'orgofmn_styles' ) ) {
  function orgofmn_styles() {

    wp_enqueue_style( 'app_css', get_template_directory_uri() . '/assets/css/app.css') ;
    // wp_enqueue_style( 'app_css', get_template_directory_uri() . '/assets/css/app.min.css') ;
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  }
}

add_action( 'wp_enqueue_scripts', 'orgofmn_styles' );

// Enqueue theme javascript
if ( ! function_exists( 'orgofmn_js' ) ) {
  function orgofmn_js() {
    wp_enqueue_script( 'masonry_layout', get_template_directory_uri() . '/assets/js/masonry.js', array(), '', true ) ;
    wp_enqueue_script( 'click_events', get_template_directory_uri() . '/assets/js/clicks.js', array(), '', true ) ;
  }
}

add_action( 'wp_enqueue_scripts', 'orgofmn_js' );