<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-archive-sidebar cell'); ?> role="article">
	<header class="article-header">
		<a href="<?php the_permalink() ?>">
			<?php the_post_thumbnail('full'); ?>
			<h2><a class="forest-green grid-x align-middle" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		</a>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
	</header> <!-- end article header -->
</article> <!-- end article -->
