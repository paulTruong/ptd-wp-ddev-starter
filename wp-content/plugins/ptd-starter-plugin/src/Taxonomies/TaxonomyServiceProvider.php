<?php
/**
 * Service for registering custom taxonomies.
 *
 * @package ptdStarter
 * @subpackage Theme
 */

namespace ptdStarter\Taxonomies;

/**
 * TaxonomyServiceProvider class.
 */
class TaxonomyServiceProvider {

	/**
	 * The post types that should be bootstrapped.
	 *
	 * @var array
	 */
	public static array $taxonomies = [
		ExampleCPTCategory::class,
	];

	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function __construct() {
		foreach ( static::$taxonomies as $taxonomy ) {
			new $taxonomy();
		}
	}
}
