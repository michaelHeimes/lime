<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-archive'); ?> role="article">					
	
	<header class="article-header">
		<?php the_post_thumbnail('full'); ?>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
		<h2><?php the_title(); ?></h2>
	</header> <!-- end article header -->
					
	<section class="entry-content" itemprop="text">
		<a href="<?php the_permalink() ?>"></a>
		<?php the_excerpt(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
    	<a class="forest-green grid-x align-middle" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><span>Continue Reading</span>
			<svg id="Component_39" data-name="Component 39" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
	  		<path id="Path_10" data-name="Path 10" d="M10,0,8.182,1.818,15.065,8.7H0v2.6H15.065L8.182,18.182,10,20,20,10Z" fill="#2b4644"/>
			</svg>
		</a>
	</footer> <!-- end article footer -->	
				    						
</article> <!-- end article -->
