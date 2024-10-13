<?php
if (!function_exists('ptdevblocks_theme_setup')) {

    function ptdevblocks_theme_setup()
    {
        // Enqueue editor styles.
        add_editor_style('style.css');
    }
}
add_action('after_setup_theme', 'ptdevblocks_theme_setup');

if (!function_exists('ptdevblocks_enqueue_scripts')) {

    function ptdevblocks_enqueue_scripts()
    {
        wp_register_style('pt-starter-style', get_stylesheet_uri());

        // Enqueue theme stylesheet.
        wp_enqueue_style('pt-starter-style');
    }
}
add_action('wp_enqueue_scripts', 'ptdevblocks_enqueue_scripts');

// //remove emoji support
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
