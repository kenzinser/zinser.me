<?php
/**
 * @package zme
 * @since zme 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'zme' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php zme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) : ?>

			<?php be_display_image_and_caption(); ?>

	<?php endif; ?> 

	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<p><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Continue reading %s', 'zme' ), the_title_attribute( 'echo=0' ) ) ); ?>">Continue Reading &rarr;</a></p>

	</div><!-- .entry-summary -->

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'zme' ) );
				if ( $categories_list && zme_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'zme' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'zme' ) );
				if ( $tags_list ) :
			?>
			<span class="sep"> &sdot; </span>
			<span class="tag-links">
				<?php printf( __( 'Tagged %1$s', 'zme' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="sep"> &sdot; </span>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'zme' ), __( '1 Comment', 'zme' ), __( '% Comments', 'zme' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'zme' ), '<span class="sep"> &sdot; </span><span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->