<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.ico">
    <title><?php bloginfo('name'); ?></title>
    </title>
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- header -->
    <header class="header">
        <div class="header-logo">
            <div class="inner">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="">
            </div>
        </div>
        <div class="header-nav">
            <div class="inner">
                <nav class="global-nav">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'place_global',
                            'container' => false,
                        )
                    );
                    ?>
                </nav>
            </div>
        </div>
    </header>
    <!-- /header -->