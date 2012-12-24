<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the id=main div and all content after

 *

 * @package zme

 * @since zme 1.0

 */

?>



	</div><!-- #main .site-main -->



	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="site-info">

			<?php do_action( 'zme_credits' ); ?>

			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'zme' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'zme' ), 'WordPress' ); ?></a>

		</div><!-- .site-info -->

	</footer><!-- #colophon .site-footer -->

</div><!-- #page .hfeed .site -->



<?php wp_footer(); ?>



</body>

</html>