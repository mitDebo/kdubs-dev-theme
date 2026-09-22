<?php

function kdubsdev_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'kdubsdev_setup' );

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
