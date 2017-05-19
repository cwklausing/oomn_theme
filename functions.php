<?php

if ( ! function_exists( 'cwkbase_setup' ) ) {
  // Molly Horton Pottery theme setup

  function cwkbase_setup() {
    // Enable support for Post Thumbnails, and declare two sizes.
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 672, 372, true );

    // Enable menus
    add_theme_support( 'menus' );

    // Register a single nav menu for this theme
    register_nav_menus( array(
      'main'        => __( 'Main Menu', 'cwkbase' ),
      'secondary'   => __( 'Secondary Menu', 'cwkbase'),
    ) );
  }
}

add_action( 'after_setup_theme', 'cwkbase_setup' );

// Enqueue theme styles
if ( ! function_exists( 'cwkbase_styles' ) ) {
  function cwkbase_styles() {

    wp_enqueue_style( 'app_css', get_template_directory_uri() . '/assets/css/app.css') ;
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

    // Google fonts
    wp_enqueue_style( 'mh_google_fonts', "https://fonts.googleapis.com/css?family=Lato:300,400,700", false );
  }
}

add_action( 'wp_enqueue_scripts', 'cwkbase_styles' );

// Enqueue theme javascript
if ( ! function_exists( 'cwkbase_js' ) ) {
  function cwkbase_js() {

    wp_enqueue_script( 'app_js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '', true ) ;

  }
}

add_action( 'wp_enqueue_scripts', 'cwkbase_js' );

// Add Options page using Advanced Custom Fields
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}
