<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer bg-forest-green" role="contentinfo">
					<div class="grid-container">
						<div class="inner-footer grid-x grid-padding-x">
							
							<div class="left cell small-12 medium-shrink">
								<a href="<?php echo home_url(); ?>">
									<?php 
									$image = get_field('footer_logo', 'option');
									if( !empty( $image ) ): ?>
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
								</a>
								<div class="footer-tagline theme-lime-green">
									<p><?php the_field('footer_tagline', 'option');?></p>
								</div>
	    					</div>
							
							<div class="right cell small-12 tablet-auto">
								<div class="grid-x grid-padding-x">
									<div class="cell small-12 medium-3 large-3">
										<nav role="navigation">
											<h3>Sitemap</h3>
											<?php joints_footer_links(); ?>
										</nav>
									</div>
									<div class="cell small-12 medium-6 large-4">
										<h3>Get In Touch</h3>
										<ul class="menu vertical">
											<li>
												<?php the_field('phone_number', 'option');?>
											</li>
											<li>
												<a href="mailto:<?php the_field('email_address', 'option');?>"">
													<?php the_field('email_address', 'option');?>
												</a>
											</li>
											<li><?php the_field('address', 'option');?></li>
										</ul>
									</div>
									<div class="cell small-12 medium-shrink large-shrink">
										<h3>Connect</h3>
										<?php joints_social_links(); ?>
									</div>
								</div>
							</div>
							
							<div class="small-12 medium-12 large-12 cell">
								<p class="source-org copyright small">Copyright &copy; <?php echo date('Y'); ?> Lime LLC - All Rights reserved. <a href="https://proprdesign.com/" target="_blank">Made by Propr Design</a></p>
							</div>
						
						</div> <!-- end #inner-footer -->
					</div>
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->