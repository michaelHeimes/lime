<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

	<?php get_template_part('parts/content', 'page-banner');?>
	<div class="content">
		<div class="grid-container">
			<div class="inner-content grid-x grid-padding-x">
		
				<main class="main cell small-12 tablet-10 tablet-offset-1" role="main">
				
		    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
		    			<?php get_template_part( 'parts/loop', 'single' ); ?>
		    			
		    		<?php endwhile; else : ?>
				
		   				<?php get_template_part( 'parts/content', 'missing' ); ?>
		
		    		<?php endif; ?>
		
				</main> <!-- end #main -->
		
			</div> <!-- end #inner-content -->
		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>