<?php

/**
 * Service for registering custom post types.
 *
 * @package ptdStarter
 * @subpackage Theme
 */

namespace ptdStarter\PostTypes;

use ptdStarter\PostTypes\CaseStudyCPT;
/**
 * PostTypeServiceProvider class.
 */
class PostTypeServiceProvider
{

	/**
	 * The post types that should be bootstrapped.
	 *
	 * @var array
	 */
	public static array $post_types = [
		CaseStudyCPT::class,
	];

	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function __construct()
	{
		foreach (self::$post_types as $post_type) {
			new $post_type();
		}
	}
}
