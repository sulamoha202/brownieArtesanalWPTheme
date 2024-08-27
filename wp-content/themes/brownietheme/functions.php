<?php

function brownie_artisanal_setup() {
    //Añadir soporte para varios característica
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    //Registrar menu de navegacion
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'brownie-artesanal')
    ));
}
add_action('after_setup_theme', 'brownie_artisanal_setup');

function brownie_artesanal_scripts() {
    //Enqueue de estilos
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('main-css', get_stylesheet_uri());

    //Enqueue de scripts
    wp_enqueue_script('bootstrap-bundle-js','https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'brownie_artesanal_scripts');


?>
