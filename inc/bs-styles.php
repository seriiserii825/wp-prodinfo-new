<?php
function bs_prodinfo_scripts() {
	wp_enqueue_style( 'bs-prodinfo-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bs-prodinfo-fontawesome', get_template_directory_uri().'/site/assets/libs/fontawesome-free-5.10.1-web/css/all.min.css');
	wp_enqueue_style( 'bs-prodinfo-my-style', get_template_directory_uri().'/site/assets/css/my.css');

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('bs-jquery.easeScroll-js', get_template_directory_uri().'/site/assets/libs/jquery-easy-scroll/jquery.easeScroll.js', ['jquery'], null, true);
	wp_enqueue_script('bs-slick.min-js', get_template_directory_uri().'/site/assets/libs/slick/slick/slick.min.js', ['jquery'], null, true);
	wp_enqueue_script('bs-equal-height-js', get_template_directory_uri().'/site/assets/libs/equal-height/equal-heights.js', ['jquery'], null, true);

	wp_enqueue_script('bs-main-js', get_template_directory_uri().'/site/assets/js/main.js', ['jquery'], null, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'bs_prodinfo_scripts' );
