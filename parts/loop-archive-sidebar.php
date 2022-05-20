<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-archive-sidebar cell'); ?> role="article">
	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
		<header class="article-header">
			<?php the_post_thumbnail('full'); ?>
			<h2><?php the_title(); ?></h2>
			<?php get_template_part( 'parts/content', 'byline' ); ?>
		</header> <!-- end article header -->
	</a>
</article> <!-- end article -->
