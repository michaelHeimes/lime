<?php
/*
Template Name: Privacy Policy
*/

get_header(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	
	<?php get_template_part('parts/content', 'page-banner');?>
		<div class="content">
			<div class="grid-container">
				<div class="inner-content grid-x grid-padding-x">
			
		    		<main class="main cell small-12 tablet-10 tablet-offset-1" role="main">
						
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
							<?php the_content(); ?>
							
						<?php endwhile; endif; ?>							
		
					</main> <!-- end #main -->
		    		
				</div> <!-- end #inner-content -->
			</div>
		</div> <!-- end #content -->
	</article>

<?php get_footer(); ?>
