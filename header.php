<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner d-flex">
                <nav class="header__col d-flex">
                    <div class="header-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'header-menu',
                        'menu_id'        => 'header-menu',
                        'menu_class'      => 'header-menu',
                        'container'       => 'div',
                        'container_class' => 'header-menu-inner',
                    ));
                    ?>
                </nav>
                <div class="header__col d-flex">
                    <div class="header-socials d-flex">
                        <a class="header-socials__link d-flex icon-box icon-box-sm" href="tel:">
                            <span class="btn-content">
                                <span class="icon-Phone"></span>
                            </span>
                        </a>
                        <a class="header-socials__link d-flex icon-box icon-box-sm" href="#" target="_blank">
                            <span class="btn-content">
                                <span class="icon-WhatsApp"></span>
                            </span>
                        </a>
                        <a class="header-socials__link d-flex icon-box icon-box-sm" href="#" target="_blank">
                            <span class="btn-content">
                                <span class="icon-Telegram"></span>
                            </span>
                        </a>
                    </div>
                    <button class="header-btn btn btn-primary btn-sm">
                        <span class="btn-content">ОСТАВИТЬ ЗАЯВКУ</span>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <div class="wrapper">
        <main class="main">