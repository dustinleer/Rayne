<?php

function add_custom_post_types() {

   /**
    * Register a custom post type
    *
    * Supplied is a "reasonable" list of defaults
    * @see register_post_type for full list of options for register_post_type
    * @see add_post_type_support for full descriptions of 'supports' options
    * @see get_post_type_capabilities for full list of available fine grained capabilities that are supported
    */
    register_post_type( 'portfolio', array(
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'portfolio' ),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'thumbnail', 'revisions' ),
        'capability_type' => 'post',
        'capabilities' => array(),
        'labels' => array(
            'name' => __( 'Portfolio', 'textdomain' ),
            'singular_name' => __( 'Artwork', 'textdomain' ),
            'add_new' => __( 'Add New', 'textdomain' ),
            'add_new_item' => __( 'Add New Artwork', 'textdomain' ),
            'edit_item' => __( 'Edit Artwork', 'textdomain' ),
            'new_item' => __( 'New Artwork', 'textdomain' ),
            'all_items' => __( 'All Portfolio', 'textdomain' ),
            'view_item' => __( 'View Artwork', 'textdomain' ),
            'search_items' => __( 'Search Portfolio', 'textdomain' ),
            'not_found' =>  __( 'No artwork found', 'textdomain' ),
            'not_found_in_trash' => __( 'No artwork found in Trash', 'textdomain' ),
            'parent_item_colon' => '',
            'menu_name' => 'Portfolio'
        )
    ) );
}
add_action( 'init', 'add_custom_post_types' );