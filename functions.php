<?php

function tattoolab_res() { // Connect main files
  wp_enqueue_style('theme_css', get_template_directory_uri() . '/dist/app.css');
  wp_enqueue_script('theme_js', get_template_directory_uri() . '/dist/app.js');
}
add_action('wp_enqueue_scripts', 'tattoolab_res');

register_nav_menus(array( // Navigation
  'header' => __('Header Menu')
));

add_theme_support('custom-background', array( // Background
  'default-color' => 'dd222b'
));

// Add thumbnails in post
add_theme_support('post-thumbnails', array('post'));
add_theme_support('custom-header');

function widgetsInit() { // Widgets
  register_sidebar(array(
    'name' => 'Текст подвала',
    'id' => 'footer_text'
  ));
  register_sidebar(array(
    'name' => 'Заголовок на главной странице',
    'id' => 'present_text'
  ));
  register_sidebar(array(
    'name' => 'Фоновое видео главной страницы',
    'id' => 'present_video'
  ));
  register_sidebar(array(
    'name' => 'Ссылки на соц. сети',
    'id' => 'social_links'
  ) );
  register_sidebar(array(
    'name' => 'Форма для тестирования сайта',
    'id' => 'dev_field'
  ));
}
add_action('widgets_init', 'widgetsInit');

function example_add_post_class_to_single_post( $classes ) { // Add classes to single post
	if (is_single()) {
		array_push( $classes, 'single-post' );
	}
	return $classes;
}
add_filter( 'post_class', 'example_add_post_class_to_single_post' );

// Disable the emoji's
function emoji_tms($plugins) {
  if (is_array($plugins)) {
    return array_diff($plugins, array('wpemoji'));
  } else { return array(); }
}
function dns_emoji($urls, $relation_type) {
  if ('dns-prefetch' == $relation_type) {
    $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');
    $urls = array_diff($urls, array($emoji_svg_url));
  }
  return $urls;
}
function disable_emoji() {
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  add_filter('tiny_mce_plugins', 'emoji_tms');
  add_filter('wp_resource_hints', 'dns_emoji', 10, 2);
}
add_action('init', 'disable_emoji');
