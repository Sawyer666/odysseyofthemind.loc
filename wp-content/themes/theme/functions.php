<?php

function add_my_stylesheet() {
	wp_register_style( 'custom-style', get_template_directory_uri() . '/css/main-min.css', array(), '', 'all' );
	wp_enqueue_style( 'custom-style' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', false, false, false );
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'common_script', get_template_directory_uri() . '/source/js/common.js', array(), '', true );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'common_script' );

	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
}

add_action( 'wp_enqueue_scripts', 'add_my_stylesheet' );

?>