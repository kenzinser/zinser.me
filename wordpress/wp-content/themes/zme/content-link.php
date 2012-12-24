<?php
/**
 * The template for displaying posts in the Link post format
 *
 * @package zme
 * @since zme 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail( 'link_thumbnail' ); ?>
 		</div>
	<?php endif; ?> 

	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_field( 'link_url' ); ?>" title="<?php echo esc_attr( sprintf( __( 'Link to %s', 'zme' ), the_title_attribute( 'echo=0' ) ) ); ?>" target="_blank"><?php the_title(); ?></a></h1>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php zme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
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

		<?php edit_post_link( __( 'Edit', 'zme' ), '<span class="sep"> &sdot; </span><span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->