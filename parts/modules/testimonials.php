<?php
	$heading = get_sub_field('heading');
	$image = get_sub_field('image');
	$testimonials = get_sub_field('testimonials');
?>

<section class="module testimonials has-bg">
	<div class="bg bg-light-gray"></div>
	<div class="grid-container relative">
		<div class="grid-x grid-padding-x">
			<div class="left cell small-12 tablet-6 xlarge-5">
				<?php if($heading):
					echo $heading;
				endif;
				if( !empty( $image ) ): ?>
				<div class="img-wrap">
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				</div>
				<?php endif; ?> 
			</div>
			<div class="right cell small-12 tablet-6 xlarge-7">
				<?php
				$args = array(  
					'post_type' => 'testimonial',
					'post_status' => 'publish',
					'posts_per_page' => -1,
				);
				
				$loop = new WP_Query( $args ); 
				
				if ( $loop->have_posts() ) :?>
				<div class="swiper testimonial-slider">
					<div class="swiper-wrapper">
					
						<?php while ( $loop->have_posts() ) : $loop->the_post();
						
						$testimonial_text = get_field('testimonial');
						$authors_name_and_title = get_field('authors_name_and_title');
						$company = get_field('authors_company');
						$link_for_author = get_field('link_for_author');
						
						?>
						
						<div class="swiper-slide">
							<div class="inner">
								<div class="top">
									<?php echo $testimonial_text;?>
								</div>
								<div class="bottom">
									<div><b>
										<?php if($link_for_author):?>
											<a href="<?php echo esc_url($link_for_author);?>" target="_blank">
										<?php endif;?>
										
										<?php echo $authors_name_and_title;?>
										
										<?php if($link_for_author):?>
											</a>
										<?php endif;?>
										
									</b></div>
									<div><span class="small-text"><?php echo $company;?></span></div>
								</div>
							</div>
						</div>
						
						<?php endwhile;?>
					</div>
				</div>
						
				<div class="swiper-nav grid-x align-middle align-right">
					<div class="swiper-btn button-prev">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
					  	<g id="Component_39" data-name="Component 39" transform="translate(20 20) rotate(180)">
							<path id="Path_10" data-name="Path 10" d="M10,0,8.182,1.818,15.065,8.7H0v2.6H15.065L8.182,18.182,10,20,20,10Z" fill="#2c4645"/>
					  	</g>
						</svg>
					</div>
					<div class="swiper-btn button-next">
						<svg id="Component_38" data-name="Component 38" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
					  	<path id="Path_10" data-name="Path 10" d="M10,0,8.182,1.818,15.065,8.7H0v2.6H15.065L8.182,18.182,10,20,20,10Z" fill="#2c4645"/>
						</svg>
					</div>
				</div>
				
				<?php endif;
				wp_reset_postdata(); 
				?>
						

			</div>

		</div>
	</div>
</section>