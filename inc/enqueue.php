<?php

// Enqueue theme styles
if ( ! function_exists( 'cwkbase_styles' ) ) {
  function cwkbase_styles() {

  	// wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap.min.css' );
    wp_enqueue_style( 'app_css', get_template_directory_uri() . '/assets/css/app.css') ;
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

    // Google fonts
    // wp_enqueue_style( 'google_fonts', "https://fonts.googleapis.com/css?family=Slabo+27px|Open+Sans", false );
  }
}

add_action( 'wp_enqueue_scripts', 'cwkbase_styles' );

// Enqueue theme javascript
if ( ! function_exists( 'cwkbase_js' ) ) {
  function cwkbase_js() {

    wp_enqueue_script( 'app_js', get_template_directory_uri() . '/assets/js/dist/bundle.js', array('jquery'), '', true ) ;

  }
}

add_action( 'wp_enqueue_scripts', 'cwkbase_js' );