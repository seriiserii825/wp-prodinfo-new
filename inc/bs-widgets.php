<?php
function bs_prodinfo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bs-prodinfo' ),
		'id'            => 'language',
		'description'   => esc_html__( 'Add widgets here.', 'bs-prodinfo' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Yandex map', 'bs-prodinfo' ),
		'id'            => 'map',
		'description'   => esc_html__( 'Add widgets here.', 'bs-prodinfo' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'bs_prodinfo_widgets_init' );
