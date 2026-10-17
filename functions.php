<?php

function kdubsdev_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'kdubsdev_setup' );

function kdubsdev_posts_per_page( $query ) {
	if ( ! is_admin() && $query->is_main_query() && ( $query->is_home() || $query->is_front_page() ) ) {
		$query->set( 'posts_per_page', 10 );
	}
}
add_action( 'pre_get_posts', 'kdubsdev_posts_per_page' );

function kdubsdev_scripts() {
	wp_enqueue_style(
		'kdubsdev-google-fonts',
		'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'kdubsdev-style',
		get_stylesheet_uri(),
		array( 'kdubsdev-google-fonts' ),
		filemtime( get_stylesheet_directory() . '/style.css' )
	);
}
add_action( 'wp_enqueue_scripts', 'kdubsdev_scripts' );

function kdubsdev_document_title_parts( $title ) {
	if ( is_front_page() ) {
		return array( 'title' => get_bloginfo( 'name', 'display' ) );
	}

	return array(
		'title' => isset( $title['title'] ) ? $title['title'] : '',
		'site'  => get_bloginfo( 'name', 'display' ),
	);
}
add_filter( 'document_title_parts', 'kdubsdev_document_title_parts' );

function kdubsdev_document_title_separator() {
	return '|';
}
add_filter( 'document_title_separator', 'kdubsdev_document_title_separator' );
