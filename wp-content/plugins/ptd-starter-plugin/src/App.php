<?php

/**
 * The main plugin application instance.
 *
 * @package ptd-starter
 * 
 */

namespace ptdStarter;

use ptdStarter\Blocks\Blocks;
use ptdStarter\PostTypes\PostTypeServiceProvider;
use ptdStarter\Taxonomies\TaxonomyServiceProvider;

class App
{
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        new PostTypeServiceProvider();
        new TaxonomyServiceProvider();
        new Blocks();
    }
}
