<?php

function tattoolab_res()
{ // Connect main files
  wp_enqueue_style('theme_css', get_template_directory_uri() . '/dist/app.css');
  wp_enqueue_style('vendors_css', get_template_directory_uri() . '/dist/vendors.css');
  wp_enqueue_script('theme_js', get_template_directory_uri() . '/dist/assets/js/app.js');
}
add_action('wp_enqueue_scripts', 'tattoolab_res');

register_nav_menus(array( // Navigation
  'header' => __('Header Menu'),
  'bottomHeader' => __('Under Header Menu'),
  'sidebar' => __('Sidebar Menu'),
  'social' => __('Social Links Menu')
));

// Add thumbnails in post
add_theme_support('post-thumbnails', array('post'));
add_theme_support('custom-header');

require get_parent_theme_file_path('icon-functions.php'); // Icon settings

function widgetsInit()
{ // Widgets
  register_sidebar(array(
    'name' => 'Текст в шапке',
    'id' => 'headerdesc'
  ));
  register_sidebar(array(
    'name' => 'Текст в подвале',
    'id' => 'footerDescription'
  ));
}
add_action('widgets_init', 'widgetsInit');

/**
 * Disable the emoji's
 */
function disable_emoji()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  add_filter('tiny_mce_plugins', 'disable_emoji_tinymce');
  add_filter('wp_resource_hints', 'disable_emoji_remove_dns_prefetch', 10, 2);
}
add_action('init', 'disable_emoji');

function disable_emoji_tinymce($plugins)
{
  if (is_array($plugins)) {
    return array_diff($plugins, array('wpemoji'));
  } else {
    return array();
  }
}

function disable_emoji_remove_dns_prefetch($urls, $relation_type)
{
  if ('dns-prefetch' == $relation_type) {
    $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');
    $urls = array_diff($urls, array($emoji_svg_url));
  }
  return $urls;
}
