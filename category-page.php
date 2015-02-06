<?php
/**
 * The template for displaying tags static page.
 *
 * Template Name: category-page
 *
 * @package Indian-minimalist
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<div class="tagcloud">
					<?php wp_tag_cloud( array( 'taxonomy' => 'category', 'number' => '0' ) ); ?>
				</div>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">', 'after' => '</div>', 'link_before' => '<span class="active-link">', 'link_after' => '</span>' ) ); ?>
			</div><!-- .entry-content -->
			<?php edit_post_link( __( 'Edit', 'indian_minimalist' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
		</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>	