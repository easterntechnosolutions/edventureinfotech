<?php

//register taxonomies before post types, so taxonomy rewrites don't 404 (when the tax rewrite contains same text as post-type rewrite)
// Add a taxonomy to a Post Type



/**
 * Custom Post type start Here
 */
register_post_type( 'Case Study',
	// CPT Options
	array(
		'labels' => array(
		'name' => __( 'Case Study' ),
		"singular_name" => __( 'Case Study', 'Easternts' ),
		"menu_name" => __( 'Case Study', 'Easternts' ),
		"all_items" => __( 'All Case Study ', 'Easternts' ),
		"add_new" => __( 'Add Case Study ', 'Easternts' ),
		"add_new_item" => __( 'Add Case Study ', 'Easternts' ),
		"edit_item" => __( 'Edit Case Study ', 'Easternts' ),
		"new_item" => __( 'Case Study', 'Easternts' ),
		"view_item" => __( 'View Case Study ', 'Easternts' ),
		"search_items" => __( 'Search Case Study ', 'Easternts' ),
		"not_found" => __( 'No Case Study  Found', 'Easternts' ),
		"not_found_in_trash" => __( 'No Case Study  found in the Trash', 'Easternts' ),
		"parent_item_colon" => __( 'Parent Case Study ', 'Easternts' ),
		"archives" => __( 'Case Study ', 'Easternts' ),
		"filter_items_list" => __( 'Filter Case Study  List', 'Easternts' ),
		"items_list_navigation" => __( 'Case Study  Navigation', 'Easternts' ),
		"items_list" => __( 'Case Study ', 'Easternts' ),
		"parent_item_colon" => __( 'Parent Case Study ', 'Easternts' ),
	),
		'public' => true,
		'has_archive' => false,
		'rewrite' => array('slug' => 'casestudy'),
		'supports' => array('thumbnail', "title", "editor"),
		'menu_icon' => 'dashicons-testimonial',
	)
	);
	
/**
 * Custom Post type Career
 */
register_post_type( 'Career',
// CPT Options
array(
	'labels' => array(
	'name' => __( 'Career' ),
	"singular_name" => __( 'Career', 'Easternts' ),
	"menu_name" => __( 'Career', 'Easternts' ),
	"all_items" => __( 'All Career ', 'Easternts' ),
	"add_new" => __( 'Add Career ', 'Easternts' ),
	"add_new_item" => __( 'Add Career ', 'Easternts' ),
	"edit_item" => __( 'Edit Career ', 'Easternts' ),
	"new_item" => __( 'Career', 'Easternts' ),
	"view_item" => __( 'View Career ', 'Easternts' ),
	"search_items" => __( 'Search Career ', 'Easternts' ),
	"not_found" => __( 'No Career  Found', 'Easternts' ),
	"not_found_in_trash" => __( 'No Career  found in the Trash', 'Easternts' ),
	"parent_item_colon" => __( 'Parent Career ', 'Easternts' ),
	"archives" => __( 'Career ', 'Easternts' ),
	"filter_items_list" => __( 'Filter Career  List', 'Easternts' ),
	"items_list_navigation" => __( 'Career  Navigation', 'Easternts' ),
	"items_list" => __( 'Career ', 'Easternts' ),
	"parent_item_colon" => __( 'Parent Career ', 'Easternts' ),
),
	'public' => true,
	'has_archive' => false,
	'rewrite' => array('with_front' => false,'slug' => 'career'),
	'supports' => array('thumbnail', "title", "editor"),
	'menu_icon' => 'dashicons-testimonial',
)
);