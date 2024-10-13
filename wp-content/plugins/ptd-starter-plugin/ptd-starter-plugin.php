<?php

/**
 * Plugin Name:       PTD Starter Plugin
 * Description:       Starter plugin scaffolded with create-block.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Paul Truong
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       ptd-starter-plugin
 *
 * @package PtdStarter
 */

use ptdStarter\App;

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

define('PTD_PLUGIN_VERSION', '0.1.0');
define('PTD_PLUGIN_TEMPLATE_URL', plugin_dir_url(__FILE__));
define('PTD_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PTD_PLUGIN_SRC', PTD_PLUGIN_PATH . 'src/');

// Autoload using Composer so we don't need to require files to use them.
require PTD_PLUGIN_PATH . "/vendor/autoload.php";

// Instantiate the entry point in to the plugin
new App();
