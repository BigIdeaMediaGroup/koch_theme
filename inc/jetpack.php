<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package BIMG Base
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function bimg_base_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'bimg_base_jetpack_setup' );
