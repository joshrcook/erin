<?php
/*
Plugin Name: Custom Galleries
Plugin URI: 
Description: Allows you to create a gallery for a page with more flexibility than a Wordpress gallery affords you.
Version: 1.0
Author: Joshua Cook
Author URI: http://www.joshrcook.com
License: GPL2
*/

require('jrc_gal_functions.php');
require('jrc_gal_meta_box.php');
require('jrc_gal_save_meta.php');
require('jrc_gal_shortcode.php');

function jrc_gal_post_type_init() { 
	// creating (registering) the custom type 
	register_post_type( 'jrc_gal', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Galleries', 'jrc_gal_plugin'), /* This is the Title of the Group */
			'singular_name' => __('Gallery', 'jrc_gal_plugin'), /* This is the individual type */
			'all_items' => __('All Galleries', 'jrc_gal_plugin'), /* the all items menu item */
			'add_new' => __('Add New', 'jrc_gal_plugin'), /* The add new menu item */
			'add_new_item' => __('Add New Gallery', 'jrc_gal_plugin'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jrc_gal_plugin' ), /* Edit Dialog */
			'edit_item' => __('Edit Gallery', 'jrc_gal_plugin'), /* Edit Display Title */
			'new_item' => __('New Gallery', 'jrc_gal_plugin'), /* New Display Title */
			'view_item' => __('View Gallery', 'jrc_gal_plugin'), /* View Display Title */
			'search_items' => __('Search Galleries', 'jrc_gal_plugin'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'jrc_gal_plugin'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'jrc_gal_plugin'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This post type allows you to display galleries.', 'jrc_gal_plugin' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => plugins_url() . '/jrc_custom_gallery/img/icon-small.png', /* the icon for the custom post type menu */
			// 'rewrite'	=> array( 'slug' => 'custom_type', 'with_front' => true ), /* you can specify its url slug */
			'has_archive' => false, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title' )
	 	) /* end of options */
	); /* end of register post type */
} 

add_action('init', 'jrc_gal_post_type_init');