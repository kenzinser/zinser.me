<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package zinser.me
 * @since zinser.me 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<h2 class="separator"><span>Colophon</span></h2>
			<?php do_action( 'zinser_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'zinser' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'zinser' ), 'WordPress' ); ?></a>
					</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>