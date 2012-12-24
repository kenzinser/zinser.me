<?php
/**
 * Template Name: Front Page Template
 *
 * @package zme
 * @since zme 1.0
 */

get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>



				<?php $my_query = new WP_Query( 'posts_per_page=3' ); ?>

				<h2 class="front-title">Blog</h2>

				<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>