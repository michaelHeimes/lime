<?php 
	$heading = get_sub_field('heading');
	$left_copy = get_sub_field('left_copy');
	$image = get_sub_field('right_image');
?>
<section class="module yellow-gradient-bg has-bg bg-light-gray">
	<div class="bg"></div>
	<div class="grid-container relative">
		<div class="heading grid-x grid-padding-x">
			<div class="cell small-12 tablet-10 tablet-offset-1 large-7">
				<?php echo $heading;?>
			</div>
		</div>
		<div class="copy-img grid-x grid-padding-x">
			<div class="left cell small-12 tablet-5 tablet-offset-1">
				<?php echo $left_copy;?>
			</div>
			<div class="right cell small-12 tablet-5 tablet-offset-1">
				<?php if( !empty( $image ) ): ?>
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>