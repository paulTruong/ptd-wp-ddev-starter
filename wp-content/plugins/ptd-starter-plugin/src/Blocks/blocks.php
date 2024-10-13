<?php

namespace ptdStarter\Blocks;

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */

class Blocks
{
    public static array $blocks = [
        'dynamic-example',
        'static-example',
    ];

    public function __construct()
    {
        add_action('init', [$this, 'init_blocks']);
    }

    public function init_blocks()
    {
        foreach (static::$blocks as $dir) {
            register_block_type(PTD_PLUGIN_PATH . '/build/blocks/' . $dir);
        }
    }
}
