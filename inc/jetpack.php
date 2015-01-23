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
		'render'		 => 'indian_minimalist_load_titles_only',
	) );

}
add_action( 'after_setup_theme', 'indian_minimalist_jetpack_setup' );


function indian_minimalist_load_titles_only() {
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			indian_minimalist_get_post_titiles_only();
		endwhile;
	endif;
}