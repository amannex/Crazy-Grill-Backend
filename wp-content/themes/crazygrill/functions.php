<?php

// Add theme support 
add_theme_support( 'post-thumbnails' );

// Register Custom Post Type
function hero_slides_post_type() {

	$labels = array(
		'name'                  => _x( 'Slides', 'Post Type General Name', 'cragygrill' ),
		'singular_name'         => _x( 'Slide', 'Post Type Singular Name', 'cragygrill' ),
		'menu_name'             => __( 'Slides', 'cragygrill' ),
		'name_admin_bar'        => __( 'Slides', 'cragygrill' ),
		'archives'              => __( 'Item Archives', 'cragygrill' ),
		'attributes'            => __( 'Item Attributes', 'cragygrill' ),
		'parent_item_colon'     => __( 'Parent Item:', 'cragygrill' ),
		'all_items'             => __( 'All Slides', 'cragygrill' ),
		'add_new_item'          => __( 'Add New Slide', 'cragygrill' ),
		'add_new'               => __( 'Add New', 'cragygrill' ),
		'new_item'              => __( 'New Item', 'cragygrill' ),
		'edit_item'             => __( 'Edit Item', 'cragygrill' ),
		'update_item'           => __( 'Update Item', 'cragygrill' ),
		'view_item'             => __( 'View Item', 'cragygrill' ),
		'view_items'            => __( 'View Items', 'cragygrill' ),
		'search_items'          => __( 'Search Item', 'cragygrill' ),
		'not_found'             => __( 'Not found', 'cragygrill' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'cragygrill' ),
		'featured_image'        => __( 'Featured Image', 'cragygrill' ),
		'set_featured_image'    => __( 'Set featured image', 'cragygrill' ),
		'remove_featured_image' => __( 'Remove featured image', 'cragygrill' ),
		'use_featured_image'    => __( 'Use as featured image', 'cragygrill' ),
		'insert_into_item'      => __( 'Insert into item', 'cragygrill' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'cragygrill' ),
		'items_list'            => __( 'Items list', 'cragygrill' ),
		'items_list_navigation' => __( 'Items list navigation', 'cragygrill' ),
		'filter_items_list'     => __( 'Filter items list', 'cragygrill' ),
	);
	$args = array(
		'label'                 => __( 'Slide', 'cragygrill' ),
		'description'           => __( 'Hero section slides', 'cragygrill' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-slides',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'slides', $args );

}
add_action( 'init', 'hero_slides_post_type', 0 );