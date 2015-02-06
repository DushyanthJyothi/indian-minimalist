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
			<header class="archive-header">
				<h1 class="archive-title"><?php
						if ( is_day() ) :
							printf( __( 'Day: %s', 'indian_minimalist' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'indian_minimalist' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'indian_minimalist' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'indian_minimalist' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'indian_minimalist' ) ) . '</span>' );

						else :
							_e( 'Archives', 'indian_minimalist' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>				
			</header><!-- .page-header -->

			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
			
						indian_minimalist_get_post_titiles_only();

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
