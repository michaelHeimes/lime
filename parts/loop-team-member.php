<?php
	$image = get_field('image');
	$email_address = get_field('email_address');
	$twitter_url = get_field('twitter_url');
	$linkedin_url = get_field('linkedin_url');
	$introquote = get_field('introquote');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="left cell small-12 tablet-4">
				<?php 
				
				if( !empty( $image ) ): ?>
				<div class="img-wrap">
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				</div>
				<?php endif; ?>
				<div class="social-wrap text-center">
					<div class="small-caps">Connect With Me</div>
					<div class="grid-x align-center">
						<?php if($email_address):?>
						<div>
							<a href="mailto:<?php echo $email_address;?>">
								<span class="show-for-sr"><?php echo $email_address;?></span>
								<svg xmlns="http://www.w3.org/2000/svg" width="32.336" height="32.336" viewBox="0 0 32.336 32.336">
								  <g id="Group_1212" data-name="Group 1212" transform="translate(-575 -1337.012)">
									<path id="Path_145" data-name="Path 145" d="M16.168,0A16.168,16.168,0,1,1,0,16.168,16.168,16.168,0,0,1,16.168,0Z" transform="translate(575 1337.012)" fill="#2c4645"/>
								  </g>
								</svg>
							</a>
						</div>
						<?php endif;?>
					</div>
				</div>
			</div>
			<div class="right cell small-12 tablet-8 large-7 large-offset-1">
				<header class="article-header">
					<h2 class="title"><?php the_title(); ?></h2>
					<h3 class="small-caps"><?php the_field('title');?></h3>
					<?php if($introquote):?>
					<div class="intro-wrap">
						<p><?php the_field('introquote');?></p>
					</div>
					<?php endif;?>
				</header> <!-- end article header -->				
				<section class="entry-content" itemprop="text">
					<?php the_field('bio');?> 
				</section> <!-- end article section -->
			</div>
		</div>
	</div>
</article> <!-- end article -->