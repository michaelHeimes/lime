<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	
	<?php get_template_part('parts/content', 'page-banner');?>
    
    <?php if( have_rows('modules') ): ?>
	<section class="entry-content" itemprop="text">
		<?php while( have_rows('modules') ): the_row();
		
			if( get_row_layout() == 'centered_copy' ):
				get_template_part('/parts/modules/centered_copy');
			endif;

			if( get_row_layout() == 'image_and_copy' ):
				get_template_part('/parts/modules/image_and_copy');
			endif;

			if( get_row_layout() == 'list_and_image' ):
				get_template_part('/parts/modules/list_and_image');
			endif;

			if( get_row_layout() == 'service_cards' ):
				get_template_part('/parts/modules/service_cards');
			endif;

			if( get_row_layout() == 'team' ):
				get_template_part('/parts/modules/team');
			endif;

			if( get_row_layout() == 'yellow_gradient_bg_copy_and_image' ):
				get_template_part('/parts/modules/yellow_gradient_bg_copy_and_image');
			endif;
	
		endwhile; ?>
	</section> <!-- end article section -->
	<?php endif; ?>

	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->
  
	<?php comments_template(); ?>

</article> <!-- end article -->