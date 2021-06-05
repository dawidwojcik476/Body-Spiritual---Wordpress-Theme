<?php

function load_styles()
{
    wp_register_style('font', get_template_directory_uri() . '/fonts/style.css', array(), 1, 'all');
    wp_enqueue_style('font');


    wp_register_style('css', get_template_directory_uri() . '/css/main.css', array(), 1, 'all');
    wp_enqueue_style('css');
}

add_action('wp_enqueue_scripts', 'load_styles');

function load_js()
{
    wp_enqueue_script('script', get_template_directory_uri() . '/js/index.js', array(), 1.1, true);
    wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'load_js');


add_theme_support('menus');

register_nav_menus(

    array(
        'top-menu' => __('Top Menu', 'theme'),
    )
);



add_action('init', function () {
    pll_register_string('mats-gallery', 'Galeria Maty');
    pll_register_string('body-gallery', 'Galeria Body Spiritual');
    pll_register_string('people-gallery', 'Galeria Ludzie');
    pll_register_string('my-name-is', 'Nazywam się');
    pll_register_string('about-me', 'Mieszkałem...');
    pll_register_string('cooperation', 'Coop');
    pll_register_string('my-process', 'Process');
    pll_register_string('shop', 'Shop');
    pll_register_string('mats-header', 'Mats Header');
    pll_register_string('mats-descript-1', 'Descript 1');
    pll_register_string('mats-descript-2', 'Descript 2');
    pll_register_string('mats-descript-3', 'Descript 3');
});
