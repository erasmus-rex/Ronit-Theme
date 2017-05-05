<?php

function ronit_script_enqueue() {

        wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/ronit.css', array(), '1.0.0', 'all');
        wp_enqueue_script('customjs', get_template_directory_uri() . '/js/ronit.css', array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'ronit_script_enqueue');

function ronit_theme_setup() {

        add_theme_support('menus');

        register_nav_menu('primary', 'Primary header navigation');

}
add_action('init', 'ronit_theme_setup');