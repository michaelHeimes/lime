<?php 
	$color_theme = get_sub_field('color_theme');
	$list = get_sub_field('list');
	$add_link_to_image = get_sub_field('add_link_to_image');
	$link = get_sub_field('link');
	$link_position = get_sub_field('link_position');
	$small_caps_heading = get_sub_field('small_caps_heading');
	$image = get_sub_field('image');
?>
<section class="module list-image color-theme-<?php echo $color_theme;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
			<div class="left cell small-12 tablet-7 large-8">
				<div class="list-wrap">
					<?php echo $list;?>
				</div>
			</div>
			<div class="right cell small-12 tablet-5 large-4">
				<div class="inner">
					<?php 
					if(!empty( $image ) ): ?>
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					<?php 
					if($add_link_to_image):
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						<a class="position-<?php echo $link_position;?> bg-lime-yellow round-link grid-x flex-dir-column align-center align-middle text-center" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
							<span><?php echo esc_html( $link_title ); ?></span>
							<svg id="Component_61" data-name="Component 61" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path id="Path_10" data-name="Path 10" d="M10,0,8.182,1.818,15.065,8.7H0v2.6H15.065L8.182,18.182,10,20,20,10Z" fill="#2b4644"/></svg>
						</a>
					<?php endif; endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>