<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Indian-minimalist
 *
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer-bar"></div>
		<div class="site-footer-nav-wrapper">
				<div id="search-toggle-nav" class="panel">
					<div class="search-wrapper">
						<?php get_search_form(); ?>
					</div>
				</div>
				<div id="menu-toggle-nav" class="panel">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
				<?php if ( has_nav_menu( 'social' ) ) : ?>
					<div id="social-links-toggle-nav" class="panel">
						<?php wp_nav_menu( array( 'theme_location' => 'social', 'depth' => 1, 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'container_class' => 'social-links', ) ); ?>
					</div>
				<?php endif; ?>
		</div><!-- #site-footer-menu-wrapper -->
		<div class="site-info">
			&copy; Dushyanth Jyothi 2004-2015.
			<span class="sep"> | </span>
			<?php printf( __( 'Theme %1$s by %2$s.', 'indian_minimalist' ), '<a href="https://github.com/DushyanthJyothi/indian-minimalist">Indian-minimalist</a>', '<a href="http://dushi.co.uk/" rel="designer">Dushyanth Jyothi</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
