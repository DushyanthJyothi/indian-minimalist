<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Indian-minimalist
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>
				<?php
					/*
					 * Queue the first post, that way we know what author
					 * we're dealing with (if that is the case).
					 *
					 * We reset this later so we can run the loop properly
					 * with a call to rewind_posts().
					 */
					the_post();
				?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Author: %s', 'indian_minimalist' ), get_the_author() ); ?></h1>
				<div class="archive-meta-author">
					<?php
						printf( '<div class="archive-meta-author-img">%1$s</div>', get_avatar( get_the_author_meta( 'ID' ), '80' ) );
						print( '<div class="archive-meta-author-info">' );
							printf( '<div class="archive-meta-author-name">' . __( '%s', 'indian_minimalist' ) . '</div>', '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
							printf( '<div class="archive-meta-author-url">' . __( '%s', 'indian_minimalist' ) . '</div>', '<a href="' .esc_url( get_the_author_meta( 'user_url', get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() . '\'s website' ) . '">' . get_the_author_meta( 'user_url', get_the_author_meta( 'ID' ) ) . '</a>' );
							printf( '<div class="archive-meta-author-bio">' . __( '%s', 'indian_minimalist' ) . '</div>', get_the_author_meta( 'user_description', get_the_author_meta( 'ID' ) ) );
						print( '</div>' );					
					?>
				</div>
			</header><!-- .archive-header -->

			<?php
					/*
					 * Since we called the_post() above, we need to rewind
					 * the loop back to the beginning that way we can run
					 * the loop properly, in full.
					 */
					rewind_posts();

					// Start the Loop.
					while ( have_posts() ) : the_post();

						get_template_part( 'content', get_post_format() );

					endwhile;
					// Previous/next page navigation.
					indian_minimalist_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
