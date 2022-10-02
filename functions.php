<?php
/**
 * Theme Functions.
 *
 * @package  Adea
 */

function adea_enqueue_scripts(){
    wp_register_style('adea-main-style',get_template_directory_uri() . '/assets/css/adea-main-style.css', [], filemtime(get_template_directory() . '/assets/css/adea-main-style.css'), 'all' );
    wp_enqueue_style('adea-main-style');

    wp_register_script('adea-main-script',get_template_directory_uri() . '/assets/js/adea-main-script.js', [], filemtime(get_template_directory() . '/assets/js/adea-main-script.js'), true );
    wp_enqueue_script('adea-main-script');
};

add_action('wp_enqueue_scripts', 'adea_enqueue_scripts');