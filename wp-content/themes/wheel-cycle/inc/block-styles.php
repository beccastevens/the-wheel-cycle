<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Wheel Cycle 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Wheel Cycle 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'wheelcycle-columns-overlap',
				'label' => esc_html__( 'Overlap', 'wheelcycle' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'wheelcycle-border',
				'label' => esc_html__( 'Borders', 'wheelcycle' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'wheelcycle-border',
				'label' => esc_html__( 'Borders', 'wheelcycle' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'wheelcycle-border',
				'label' => esc_html__( 'Borders', 'wheelcycle' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'wheelcycle-image-frame',
				'label' => esc_html__( 'Frame', 'wheelcycle' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'wheelcycle-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'wheelcycle' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'wheelcycle-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'wheelcycle' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'wheelcycle-border',
				'label' => esc_html__( 'Borders', 'wheelcycle' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'wheelcycle-separator-thick',
				'label' => esc_html__( 'Thick', 'wheelcycle' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'wheelcycle-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'wheelcycle' ),
			)
		);
	}
	add_action( 'init', 'twenty_twenty_one_register_block_styles' );
}
