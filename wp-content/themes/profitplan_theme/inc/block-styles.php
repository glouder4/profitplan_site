<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'profitplan_theme-columns-overlap',
				'label' => esc_html__( 'Overlap', 'profitplan_theme' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'profitplan_theme-border',
				'label' => esc_html__( 'Borders', 'profitplan_theme' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'profitplan_theme-border',
				'label' => esc_html__( 'Borders', 'profitplan_theme' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'profitplan_theme-border',
				'label' => esc_html__( 'Borders', 'profitplan_theme' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'profitplan_theme-image-frame',
				'label' => esc_html__( 'Frame', 'profitplan_theme' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'profitplan_theme-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'profitplan_theme' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'profitplan_theme-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'profitplan_theme' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'profitplan_theme-border',
				'label' => esc_html__( 'Borders', 'profitplan_theme' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'profitplan_theme-separator-thick',
				'label' => esc_html__( 'Thick', 'profitplan_theme' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'profitplan_theme-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'profitplan_theme' ),
			)
		);
	}
	add_action( 'init', 'twenty_twenty_one_register_block_styles' );
}
