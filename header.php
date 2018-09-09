<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php echo wp_get_document_title(); ?></title>
	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122315342-1"></script>
	<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-122315342-1');
	</script>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory') ?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory') ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory') ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory') ?>/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_directory') ?>/favicon/safari-pinned-tab.svg" color="#ff1133">
    <meta name="apple-mobile-web-app-title" content="Tattoo Laboratory">
    <meta name="application-name" content="Tattoo Laboratory">
    <meta name="msapplication-TileColor" content="#ff1133">
    <meta name="theme-color" content="#ffffff">
	<!-- Meta Info -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="yandex-verification" content="92ab6f768f13768d" />
	<meta name="google" content="nositelinkssearchbox" />
	<base href="//tattoo-laboratory.ru/">
	<meta name="description" content="'Тату лаборатория' - это частная творческая студия проектирования и создания татуировок. В планы студии входит создание интересных работ с художественной стороны и уникальных с технической, внедрение новых приемов цветопередачи и гармоничное расположение работы в пластике тела">
	<meta name="application-name" content="Tattoo Laboratory">
	<meta name="robots" content="all"/>
	<!-- Open Graph -->
	<meta property="og:url" content="http://tattoo-laboratory.ru">
	<meta property="og:type" content="article">
	<meta property="og:title" content="Tattoo Laboratory">
	<meta property="og:description" content="'Тату лаборатория' - это частная творческая студия проектирования и создания татуировок. В планы студии входит создание интересных работ с художественной стороны и уникальных с технической, внедрение новых приемов цветопередачи и гармоничное расположение работы в пластике тела">
	<meta property="article:author" content="https://www.facebook.com/maxdrugger">
	<meta property="og:image" content="http://tattoo-laboratory.ru/wp-content/themes/tattoo-laboratory-theme-wordpress/img/logo.svg">
	<meta property="og:site_name" content="Tattoo Laboratory">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700" rel="stylesheet">
    <?php wp_head(); ?>
    <?php

    if(is_page('tattoo')){
            ?>
                <style>
                    .main-header {
                        background: url('<?php bloginfo('template_directory') ?>/public/0590ef9fd12239ee6b34c474c5062fd1.png') no-repeat center;
                        background-size: 100%;
                    }
                    @media screen and (max-width: 1257px) {
                        .main-header {
                            background-size: auto 100%;
                            background-position: -1100px 0;
                        }
                    }
                </style>
            <?php
    }
    
    if(is_page('sketches')){
            ?>
                <style>
                    .main-header {
                        background: url('<?php bloginfo('template_directory') ?>/public/0461834a7bc525aa46e37003f0ed7d8b.png') no-repeat center;
                        background-size: 100%;
                    }
                    @media screen and (max-width: 1257px) {
                        .main-header {
                            background-size: auto 100%;
                            background-position: -500px 0;
                        }
                    }
                </style>
            <?php
    }
    
    if(is_page('pictures')){
            ?>
                <style>
                    .main-header {
                        background: url('<?php bloginfo('template_directory') ?>/public/eac28b3aaa3e6b221475743acea68a12.png') no-repeat;
                        background-size: 100%;
                    }
                    @media screen and (max-width: 1257px) {
                        .main-header {
                            background-size: auto 100%;
                            background-position: -300px 0;
                        }
                    }
                </style>
            <?php
    }
    
    if(is_page('info')){
            ?>
                <style>
                    .main-header {
                        background: url('<?php bloginfo('template_directory') ?>/public/bafeac6bf1d555508e92662aec8bc964.png') no-repeat;
                        background-size: 100%;
                    }
                    @media screen and (max-width: 1257px) {
                        .main-header {
                            background-size: auto 100%;
                            background-position: -1500px 0;
                        }
                    }
                </style>
            <?php
    }
    
    if(is_page('contacts')){
            ?>
                <style>
                    .main-header {
                        background: url('<?php bloginfo('template_directory') ?>/public/cdb60039d83ee7adc9e1fa28a20c0c8f.png') no-repeat;
                        background-position: center;
                        background-size: 100%;
                    }
                    @media screen and (max-width: 1257px) {
                        .main-header {
                            background-position: center;
                            background-size: auto 100%;
                        }
                    }
                </style>
            <?php
    }
    
    if(is_page('tktx')){
            ?>
                <style>
                    .main-header {
                        background: url('<?php bloginfo('template_directory') ?>/public/be2295560e2fc670f79971378ad6a431.png') no-repeat;
                        background-size: 100%;
                    }
                    @media screen and (max-width: 1257px) {
                        .main-header {
                            background-position: center;
                            background-size: auto 100%;
                        }
                    }
                </style>
            <?php
    }
    
    if(is_page('doctor-pro')){
            ?>
                <style>
                    .main-header {
                        background: url('<?php bloginfo('template_directory') ?>/public/794ea9a7d78d28d4362aa24bb580d4c3.png') no-repeat;
                        background-size: 100%;
                    }
                    @media screen and (max-width: 1257px) {
                        .main-header {
                            background-position: center;
                            background-size: auto 100%;
                        }
                    }
                </style>
            <?php
    }
    
    if(is_page('dermalize-pro')){
            ?>
                <style>
                    .main-header {
                        background: url('<?php bloginfo('template_directory') ?>/public/5149644f1175dab9f86ce37b50d5be49.png') no-repeat;
                        -webkit-background-size: 100%;
                        background-size: 100%;
                    }
                    @media screen and (max-width: 1257px) {
                        .main-header {
                            background-position: center;
                            background-size: auto 100%;
                        }
                    }
                </style>
            <?php
    }
?>
</head>
<body <?php body_class(); ?>>
    <div class="min-menu disable">
        <li class="toggleNav" id="toggleNav"><span></span></li>
        <?php 
            wp_nav_menu( array(
                'theme_location'  => 'header',
                'menu'            => '',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => '',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul>%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ) );
        ?>
    </div>

    <div class="main-header">
        <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory') ?>/public/img/logo.svg" class="logo"></a>
        <div class="wrapper-info">
            <div class="info">
                Россия, Ростовская область, 347371<br>
                г. Волгодонск, ул. Молодёжная 20<br>
                Тату-мастер тел.: <a href="tel:+79185153604">+7 918 515 3604</a><br>
                Лазер-мастер тел.: <a href="tel:+79185367616">+7 918 536 7616</a><br>
            </div>
        </div>
        <ul class="nav" id="headerNav">
            <div class="menu">
                <?php 
                    wp_nav_menu( array(
                        'theme_location'  => 'header',
                        'menu'            => '',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => '',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '%3$s',
                        'depth'           => 0,
                        'walker'          => '',
                    ) );
                ?>
            </div>
            <li class="toggleNav" id="toggleNav"><span>Открыть меню</span></li>
        </ul>
        <?php 
            if ( get_header_image() ) : ?>
                <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
            <?php endif; 
        ?>
    </div>