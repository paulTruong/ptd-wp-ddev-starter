<?php
/**
 * RV custom post type.
 *
 * @package ptdStarter
 */

namespace ptdStarter\PostTypes;

/**
 * Book post type class.
 */
class CaseStudyCPT extends PostType {

	/**
	 * The name of the post type.
	 *
	 * @var string
	 */
	public const NAME = 'case-study';

	/**
	 * The singular label of the post type.
	 *
	 * @var string
	 */
	public const SINGULAR_LABEL = 'Case Study';

	/**
	 * The plural label of the post type.
	 *
	 * @var string
	 */
	public const PLURAL_LABEL = 'Case Studies';


	/**
	 * The options of the post type.
	 *
	 * @var array
	 */
	protected array $options = [
		'menu_position' => 25,
		'menu_icon'     => 'dashicons-book',
		'rewrite'       => [
			'slug' => 'case-studies',
		],
		'supports'      => [
			'title',
			'editor',
			'custom-fields',
			'thumbnail',
			'author',
			'revisions',
			'page-attributes',
			'excerpt',
		],
	];

	/**
	 * Code to run when the post type is booted.
	 *
	 * @link https://developer.wordpress.org/reference/hooks/save_post_post-post_type/
	 *
	 * @return void
	 */
	public function booted(): void {
	}
}
