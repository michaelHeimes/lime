<?php 
	$fields = get_fields();

	$banner_image = $fields['banner_image'];
	$banner_copy = $fields['banner_copy'];
	
?>
<header class="article-header page-banner bg-forest-green">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
			<div class="left cell small-12 tablet-3 large-4">
				<?php 
				if( !empty( $banner_image ) ): ?>
					<img src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>" />
				<?php endif; ?>
			</div>
			<div class="right cell small-12 tablet-9 large-8">
				<div class="copy-wrap">
					<?php echo $banner_copy;?>
				</div>
				<?php 
				$link = get_field('banner_button_link');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
				<div class="link-wrap">
					<a class="button bg-aloha" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
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
</header> <!-- end article header -->