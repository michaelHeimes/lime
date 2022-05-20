<?php
	$heading = get_sub_field('heading'); 
	$image = get_sub_field('heading_image');
	$copy = get_sub_field('copy');
	$link = get_sub_field('button_link');
?>

<section class="module green-bg-heading-image-copy bg-forest-green">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="left cell small-12 tablet-6 large-5 large-offset-1">
				<?php echo $heading;?>
			</div>
			<div class="right cell small-12 tablet-6 large-5">
				<?php if( !empty( $image ) ): ?>
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
		</div>	
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 large-10 large-offset-1">
				<?php echo $copy;?>
				<?php if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
				<div class="link-wrap">
					<a class="button arrow-link bg-aloha" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
					<span><?php echo esc_html( $link_title ); ?></span>
					<span class="bg-lime-yellow grid-x align-middle align-center">
						<svg id="Component_1" data-name="Component 1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path id="Path_10" data-name="Path 10" d="M10,0,8.182,1.818,15.065,8.7H0v2.6H15.065L8.182,18.182,10,20,20,10Z" fill="#2c4645"/></svg>
					</span>
				</a>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>