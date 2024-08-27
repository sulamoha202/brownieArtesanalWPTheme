<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wp-content/themes/brownietheme/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light clearfix">
        <div class="container-fluid">
            <div class="navbar-brand mx-auto float-start">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brownie-logo.png" alt="">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container-fluid d-flex">
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'navbar-nav', // keeps the 'navbar-nav' class
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth' => 2,
                        ));
                    ?>
                </div>
                <div class="profile-pic-container">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile-img.png" alt="Profile Picture" class="profile-pic"></a>
                </div>
            </div>
        </div>
    </nav>
</header>
