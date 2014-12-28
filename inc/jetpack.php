<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Indian-minimalist
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function indian_minimalist_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'main',
		'footer'         => 'content',
		'type'           => 'click',
	) );

}
add_action( 'after_setup_theme', 'indian_minimalist_jetpack_setup' );

