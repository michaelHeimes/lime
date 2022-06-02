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
			<h2><?php the_title(); ?></h2>
		</a>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
	</header> <!-- end article header -->
</article> <!-- end article -->
