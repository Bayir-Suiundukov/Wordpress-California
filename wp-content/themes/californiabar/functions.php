<?php
add_action( 'wp_enqueue_scripts', function() {
	
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style( 'adaptive', get_template_directory_uri() . '/assets/css/adaptive.css');
	wp_enqueue_style( 'fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css');
	wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com');
	wp_enqueue_style( 'fonts-googleapis', 'https://fonts.googleapis.com');
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap');

	
	wp_enqueue_script( 'jquerry', "https://code.jquery.com/jquery-3.6.2.js");
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
