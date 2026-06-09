<?php
defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'kadence-parent-style',
		get_template_directory_uri() . '/style.css'
	);
} );
