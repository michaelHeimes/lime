<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>

	<?php get_template_part('parts/content', 'page-banner');?>
			
	<div class="content">
		<div class="grid-container">
			<div class="inner-content grid-x grid-padding-x">
		
		    	<main class="main cell small-12" role="main">
					
					<?php get_template_part('parts/content', 'cat-links');?>
					
					<div class="grid-x grid-padding-x">

						<?php $count_posts = get_option('posts_per_page'); $i = 0; ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<?php
						if($i == 0) {
							echo '<div class="cell small-12 tablet-8 xlarge-9">';
							
						}
						
						if($i <= 1) {
							get_template_part( 'parts/loop', 'archive' );
						} else {
							get_template_part( 'parts/loop', 'archive-sidebar' );
						}

						$i++;
						if($i == 2) {
							
							echo '</div>';
							echo '<div class="cell small-12 tablet-4 xlarge-3">';
						}
						?>
						
						<?php endwhile; ?>
						
						<?php
						if($i > 0) {
							echo '</div>';
						}
						if($i == $count_posts) {
							echo '</div>';
						}
						endif;?>	
						
					</div>
					
					<?php
						the_posts_pagination(array(
								'mid_size'  => 2,
								'prev_text' => __( '<svg xmlns="http://www.w3.org/2000/svg" width="17.002" height="11.773" viewBox="0 0 17.002 11.773">
								  <g id="Group_334" data-name="Group 334" transform="translate(1575.966 2566.074) rotate(-180)">
									<g id="Group_96" data-name="Group 96" transform="translate(1558.964 2554.832)">
									  <g id="Group_95" data-name="Group 95" transform="translate(0 5.356)">
										<line id="Line_1088" data-name="Line 1088" x2="15.8" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="1.5"/>
									  </g>
									  <path id="Path_35" data-name="Path 35" d="M67,.4l5.356,5.356L67,11.112" transform="translate(-56.414 -0.4)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="1.5" fill-rule="evenodd"/>
									</g>
								  </g>
								</svg>
', 'textdomain' ),
								'next_text' => __( '<svg xmlns="http://www.w3.org/2000/svg" width="17.002" height="11.773" viewBox="0 0 17.002 11.773">
								  <g id="Group_334" data-name="Group 334" transform="translate(-1558.964 -2554.301)>
									<g id="Group_96" data-name="Group 96" transform="translate(1558.964 2554.832)">
									  <g id="Group_95" data-name="Group 95" transform="translate(0 5.356)">
										<line id="Line_1088" data-name="Line 1088" x2="15.8" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="1.5"/>
									  </g>
									  <path id="Path_35" data-name="Path 35" d="M67,.4l5.356,5.356L67,11.112" transform="translate(-56.414 -0.4)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="1.5" fill-rule="evenodd"/>
									</g>
								  </g>
								</svg>
', 'textdomain' ),
						));?>
	
		    	</main> <!-- end #main -->
					
			</div> <!-- end #inner-content -->
		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>