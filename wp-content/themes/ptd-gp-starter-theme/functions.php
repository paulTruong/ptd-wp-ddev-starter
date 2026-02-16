<?php
if (!function_exists('ptdevblocks_theme_setup')) {

    function ptdevblocks_theme_setup()
    {
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

add_filter('generateblocks_typography_font_family_list', function ($font_families) {
    foreach ($font_families as $key => $font_category) {
        if ($font_category['label'] === __('System Fonts', 'generateblocks')) {
            unset($font_families[$key]);
        }
    }
    return array_values($font_families);
});

add_filter(
    'generateblocks_typography_font_family_list',
    function ($fonts) {
        $fonts[] = [
            'label' => 'Custom Fonts',
            'options' => [
                [
                    'label' => 'Cartridge',
                    'value' => 'Cartridge',
                ],
                [
                    'label' => 'Source Serif 4',
                    'value' => 'Source Serif 4',
                ],
            ],
        ];
        return $fonts;
    }
);

//remove emoji support
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
