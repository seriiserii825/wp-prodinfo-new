<?php

if (!defined('ABSPATH')) exit;

add_action('init', 'my_custom_init');
function my_custom_init()
{
	register_post_type('advantage', array(
		'labels' => array(
			'name' => __('Advantage', 'bs-dental'), // Основное название типа записи
			'singular_name' => __('Advantage', 'bs-dental'), // отдельное название записи типа Book
			'add_new' => __('Add new', 'bs-dental'),
			'add_new_item' => __('Add new', 'bs-dental'),
			'edit_item' => __('Edit new', 'bs-dental'),
			'new_item' => __('New item', 'bs-dental'),
			'view_item' => __('View', 'bs-dental'),
			'search_items' => __('Search', 'bs-dental'),
			'parent_item_colon' => '',
			'menu_name' => __('Advantage', 'bs-dental')

		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'thumbnail')
	));

	register_post_type('members', array(
		'labels' => array(
			'name' => __('Members', 'bs-dental'), // Основное название типа записи
			'singular_name' => __('Members', 'bs-dental'), // отдельное название записи типа Book
			'add_new' => __('Add new', 'bs-dental'),
			'add_new_item' => __('Add new', 'bs-dental'),
			'edit_item' => __('Edit new', 'bs-dental'),
			'new_item' => __('New item', 'bs-dental'),
			'view_item' => __('View', 'bs-dental'),
			'search_items' => __('Search', 'bs-dental'),
			'parent_item_colon' => '',
			'menu_name' => __('Members', 'bs-dental')

		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'thumbnail')
	));

}
