<?php

// Connect styles
function tattoolab_res() {
	wp_enqueue_style( 'theme_css', get_template_directory_uri() . '/public/app.css' );
	
	global $wp_scripts;

    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );
    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/public/app.js', '');
}

add_action('wp_enqueue_scripts', 'tattoolab_res');

// Navigation
register_nav_menus(array(
	'header' => __('Header Menu'),
	'sidebar' => __('Sidebar Menu'),
	'social' => __('Social Links Menu')
));

// Add thumbnails in post
add_theme_support( 'post-thumbnails', array( 'post' ) );
add_theme_support( 'custom-header' );

// Includes
require get_parent_theme_file_path( '/inc/icon-functions.php' ); // Icon settings

// Widgets

function widgetsInit() {
	register_sidebar(array(
		'name' => 'Текст в шапке',
		'id' => 'headerdesc'
	));
}

add_action('widgets_init', 'widgetsInit');