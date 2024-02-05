<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title><?php wp_title('|', true, 'right');
          bloginfo('name'); ?></title>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="google" content="nositelinkssearchbox">
  <base href="<?php get_home_url(); ?>">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="application-name" content="Tattoo Laboratory">
  <meta name="robots" content="all">

  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory') ?>/dist/fav/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory') ?>/dist/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory') ?>/dist/fav/favicon-16x16.png">
  <meta name="yandex-tableau-widget" content="logo=<?php bloginfo('template_directory') ?>/dist/fav/yandex-tab-icon.png, color=#dc2229">
  <link rel="mask-icon" href="<?php bloginfo('template_directory') ?>/dist/fav/safari-pinned-tab.svg" color="#dc2229">
  <meta name="msapplication-name" content="#dc2229">
  <meta name="msapplication-TileColor" content="<?php bloginfo('template_directory') ?>/dist/fav/mstile-144x144.png">
  <meta name="theme-color" content="#dc2229">

  <!-- <script async src="//www.googletagmanager.com/gtag/js?id=UA-122315342-1"></script> -->
  <!-- <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'UA-122315342-1');
  </script> -->

  <meta property="og:url" content="<?php get_home_url(); ?>">
  <meta property="og:type" content="article">
  <meta property="og:title" content="Tattoo Laboratory">
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
  <meta property="article:author" content="//www.facebook.com/maxdrugger">
  <meta property="og:site_name" content="Tattoo Laboratory">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="loader" id="screenLoader"></div>

  <div id="lightboxContainer" class="lightbox">
    <div class="closeContainer" id="hoverLightbox">
      <div class="close" id="closeLightbox">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </div>
      <div class="zoomUp" id="zoomUp">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM10.5 7.5v6m3-3h-6" />
        </svg>
      </div>
      <div class="zoomDown" id="zoomDown">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM13.5 10.5h-6" />
        </svg>
      </div>
    </div>
    <div class="leftContainer" id="hoverLightbox">
      <div class="left" id="previousImage"></div>
    </div>
    <div class="rightContainer" id="hoverLightbox">
      <div class="right" id="nextImage"></div>
    </div>
    <div id="lightboxWrapper"></div>
  </div>

  <div class="menuContainer" id="menuContainer">
    <?php
      wp_nav_menu(array(
        'theme_location' => 'header',
        'container' => 'nav',
        'container_class' => 'menuNav',
        'items_wrap' => '<ul>%3$s</ul>'
      ));
    ?>
    <div class="background">
      <div class="overlay"></div>
      <?php dynamic_sidebar('menu_bg'); ?>
    </div>
    <div class="contacts" id="headerContacts">
      <?php dynamic_sidebar('footer_text'); ?>
    </div>
  </div>

  <header 
    id="header"
    <?php if(!is_front_page()): ?>
      class="min"
    <?php endif; ?>
  >
    <div class="front_header">
      <?php if(!is_front_page()): ?>
      <a href="<?php echo home_url(); ?>" class="logo">
        <div class="big"></div>
        <div class="small"></div>
      </a>
      <?php endif; ?>
      <?php if (is_front_page()): ?>
      <div class="logo">
        <div class="big"></div>
        <div class="small"></div>
      </div>
      <?php endif; ?>
      <div class="menuButton" id="menuButton">
        <div class="menuIcon"></div>
      </div>
    </div>
  </header>

  <?php if (is_front_page()): ?>
    <div class="present" id="present">
      <h1><?php dynamic_sidebar('present_text'); ?></h1>
      <div class="video_cover"></div>
      <div class="bgVideo"><?php dynamic_sidebar('present_video'); ?></div>
    </div>
  <?php endif; ?>