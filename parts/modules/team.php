<section class="module team">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				
				<?php
				$team_members = get_sub_field('team_members');
				if( $team_members ): ?>
					<ul class="accordion" data-accordion>
					<?php $count = 0; foreach( $team_members as $post ): 
						$count = $count + 1;
						setup_postdata($post); 

						$image = get_field('image');
						$email_address = get_field('email_address');
						$twitter_url = get_field('twitter_url');
						$linkedin_url = get_field('linkedin_url');
						$introquote = get_field('introquote');
						?>
						<li class="accordion-item<?php if($count == 1):?> is-active<?php endif;?>" data-accordion-item>
							<a href="#" class="accordion-title">
								<div class="grid-x grid-padding-x align-middle">
									<div class="left cell small-12 tablet-4">
										<?php 			
										if( !empty( $image ) ): ?>
										<div class="img-wrap text-center">
											<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										</div>
										<?php endif; ?>
									</div>
									<div class="right text-center cell small-12 tablet-8">
										<div class="headings-wrap">
											<h2 class="title"><?php the_title(); ?></h2>
											<h3 class="small-caps"><?php the_field('title');?></h3>
										</div>
									</div>
								</div>
							</a>
							<div class="accordion-content" data-tab-content>
								<div class="grid-x grid-padding-x">
									<div class="left cell small-12 tablet-4">
										<div class="social-wrap text-center">
											<div class="small-caps">Connect With Me</div>
											<div class="grid-x align-center">
												<?php if($email_address):?>
												<div>
													<a href="mailto:<?php echo $email_address;?>">
														<span class="show-for-sr">Email</span>
														<svg width="33px" height="33px" viewBox="0 0 33 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>email-2</title><defs><rect id="path-1" x="0" y="0" width="17.24" height="10.932"></rect></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="email-2"><path d="M16.168,0 C25.0973398,0 32.336,7.23866016 32.336,16.168 C32.336,25.0973398 25.0973398,32.336 16.168,32.336 C7.23866016,32.336 0,25.0973398 0,16.168 C0,7.23866016 7.23866016,0 16.168,0 Z" id="Path_145" fill="#2C4645" fill-rule="nonzero"></path><g id="Group_1217-Clipped" transform="translate(7.548000, 10.702000)"><mask id="mask-2" fill="white"><use xlink:href="#path-1"></use></mask><g id="Rectangle_5934"></g><g id="Group_1217" mask="url(#mask-2)" fill="#FFFFFF" fill-rule="nonzero"><g transform="translate(-0.000007, -0.000001)" id="Path_9918"><path d="M1.26200714,3.75107024e-07 C1.10360275,0.00144637479 0.946881621,0.032654912 0.800007144,0.0920007526 L8.11400714,6.32000075 C8.39102846,6.59401295 8.83698582,6.59401295 9.11400714,6.32000075 L16.4380071,0.0860007526 C16.2913375,0.0290425861 16.1353482,-0.000120644689 15.9780071,3.75107024e-07 L1.26200714,3.75107024e-07 Z M0.0130071439,1.07700075 C0.00434578929,1.13795138 3.55592367e-06,1.1994378 3.55592367e-06,1.26100075 L3.55592367e-06,9.67100075 C-0.000791939128,10.0059483 0.131911773,10.3274074 0.368756124,10.5642518 C0.605600474,10.8010961 0.927059604,10.9337998 1.26200714,10.9330043 L15.9780071,10.9330043 C16.3129547,10.9337998 16.6344138,10.8010961 16.8712582,10.5642518 C17.1081025,10.3274074 17.2408062,10.0059483 17.2400107,9.67100075 L17.2400107,1.26100075 C17.2400107,1.19943579 17.2357256,1.1379453 17.2270071,1.07700075 L9.93400714,7.27700075 C9.17124034,7.92042203 8.05577395,7.92042203 7.29300714,7.27700075 L0.0130071439,1.07700075 Z"></path></g></g></g></g></g></svg>
													</a>
												</div>
												<?php endif;?>
												<?php if($twitter_url):?>
												<div>
													<a href="mailto:<?php echo $twitter_url;?>" target="_blank">
														<span class="show-for-sr">Twitter</span>
															<svg xmlns="http://www.w3.org/2000/svg" width="32.336" height="32.336" viewBox="0 0 32.336 32.336"><g id="Group_1215" data-name="Group 1215" transform="translate(-378.111 -7709.664)"><ellipse id="Ellipse_8" data-name="Ellipse 8" cx="16.168" cy="16.168" rx="16.168" ry="16.168" transform="translate(378.111 7709.664)" fill="#2c4645"/><g id="Group_20" data-name="Group 20" transform="translate(388.013 7719.544)"><path id="Path_5" data-name="Path 5" d="M13.232,7.962v4.7H10.509V8.281c0-1.1-.389-1.857-1.379-1.857a1.491,1.491,0,0,0-1.4.99,1.936,1.936,0,0,0-.088.672v4.58H4.9s.035-7.445,0-8.205H7.626V5.628c0,.018-.018.018-.018.035h.018V5.628a2.706,2.706,0,0,1,2.458-1.362c1.8,0,3.148,1.167,3.148,3.7ZM2.038.5A1.43,1.43,0,0,0,.5,1.915,1.409,1.409,0,0,0,2,3.329h.018A1.42,1.42,0,0,0,3.559,1.915,1.4,1.4,0,0,0,2.038.5ZM.659,12.666H3.382V4.461H.659Zm0,0" transform="translate(-0.5 -0.5)" fill="#fff"/></g></g></svg>
													</a>
												</div>
												<?php endif;?>
												<?php if($linkedin_url):?>
												<div>
													<a href="<?php echo $linkedin_url;?>" target="_blank">
														<span class="show-for-sr">LinkedIn</span>
														<svg xmlns="http://www.w3.org/2000/svg" width="32.336" height="32.336" viewBox="0 0 32.336 32.336"><g id="Group_1214" data-name="Group 1214" transform="translate(-331.614 -7709.664)"><ellipse id="Ellipse_39" data-name="Ellipse 39" cx="16.168" cy="16.168" rx="16.168" ry="16.168" transform="translate(331.614 7709.664)" fill="#2c4645"/><g id="Group_10" data-name="Group 10" transform="translate(341.01 7721.13)"><g id="Group_37" data-name="Group 37" transform="translate(0 0)"><path id="Path_131" data-name="Path 131" d="M13.543,49.3a5.789,5.789,0,0,1-1.6.438,2.761,2.761,0,0,0,1.221-1.535,5.549,5.549,0,0,1-1.761.672,2.776,2.776,0,0,0-4.8,1.9,2.859,2.859,0,0,0,.064.633,7.859,7.859,0,0,1-5.723-2.9A2.777,2.777,0,0,0,1.8,52.217a2.742,2.742,0,0,1-1.254-.342v.03a2.789,2.789,0,0,0,2.224,2.728,2.771,2.771,0,0,1-.728.091,2.455,2.455,0,0,1-.526-.047,2.8,2.8,0,0,0,2.594,1.934A5.579,5.579,0,0,1,.664,57.8,5.2,5.2,0,0,1,0,57.758,7.817,7.817,0,0,0,4.259,59a7.848,7.848,0,0,0,7.9-7.9c0-.123,0-.241-.01-.359A5.539,5.539,0,0,0,13.543,49.3Z" transform="translate(0 -48)" fill="#fff"/></g></g></g></svg>

													</a>
												</div>
												<?php endif;?>
											</div>
										</div>
									</div>
									<div class="right cell small-12 tablet-8">
										<?php if($introquote):?>
										<div class="intro-wrap">
											<p><?php the_field('introquote');?></p>
										</div>
										<?php endif;?>
										<div class="entry-content" itemprop="text">
											<?php the_field('bio');?> 
										</div>
									</div>
								</div>
							</div>
						</li>
					<?php endforeach; ?>
					</ul>
					<?php 
					// Reset the global post object so that the rest of the page works correctly.
					wp_reset_postdata(); ?>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>