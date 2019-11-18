<?php

if ( ! function_exists( 'bs_prodinfo_setup' ) ) :
	function bs_prodinfo_setup() {
		load_theme_textdomain( 'bs-prodinfo', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-header' => esc_html__( 'Header menu', 'bs-prodinfo' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'bs_prodinfo_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'bs_prodinfo_setup' );
