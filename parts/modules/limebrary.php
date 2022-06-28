<?php
	$heading = get_sub_field('heading');
	$intro_text = get_sub_field('intro_text');
?>
<section class="module limebrary-module bg-lime-green">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 large-10 large-offset-1">
				<h2 class="small-caps text-center"><?php echo $heading;?></h2>
				<div class="intro-wrap"><?php echo $intro_text;?></div>
				
				<?php 
					$cats = get_categories(array(
						'parent'  => 0,
						'hide_empty' => true,
					));
				?>
				<?php if($cats):?>
				<div class="cat-links grid-x text-center align-center">
					<?php foreach($cats as $category):
						$cat_id = $category->cat_ID;
						$category_link = get_category_link($category->cat_ID);?>
						<a class="button" href="<?php echo esc_url($category_link);?>"><?php echo $category->name;?></a>
					<?php endforeach;?>
				</div>
				<?php endif;?>
				
				<?php			
				$args = array(  
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page' => 1,
				);
				
				$loop = new WP_Query( $args ); 
				
				if ( $loop->have_posts() ) : 
					
					while ( $loop->have_posts() ) : $loop->the_post();
					
					get_template_part('parts/loop-archive');	
					
					endwhile;

				endif;
				wp_reset_postdata(); 
				?>

			</div>
		</div>
	</div>
</section>