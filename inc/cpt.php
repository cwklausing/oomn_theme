<?php 
/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Movies', 'Post Type General Name', 'sbconnor' ),
        'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'sbconnor' ),
        'menu_name'           => __( 'Movies', 'sbconnor' ),
        'parent_item_colon'   => __( 'Parent Movie', 'sbconnor' ),
        'all_items'           => __( 'All Movies', 'sbconnor' ),
        'view_item'           => __( 'View Movie', 'sbconnor' ),
        'add_new_item'        => __( 'Add New Movie', 'sbconnor' ),
        'add_new'             => __( 'Add New', 'sbconnor' ),
        'edit_item'           => __( 'Edit Movie', 'sbconnor' ),
        'update_item'         => __( 'Update Movie', 'sbconnor' ),
        'search_items'        => __( 'Search Movie', 'sbconnor' ),
        'not_found'           => __( 'Not Found', 'sbconnor' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'sbconnor' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'movies', 'sbconnor' ),
        'description'         => __( 'Movie news and reviews', 'sbconnor' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'movies', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );