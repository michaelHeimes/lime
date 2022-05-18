<?php 
	$small_caps_heading = get_sub_field('small_caps_heading');
	$copy = get_sub_field('copy');
	$remove_bottom_padding = get_sub_field('remove_bottom_padding');
?>
<section class="module centered-copy<?php if($remove_bottom_padding ):?> rbp<?php endif;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2 text-center">
				<?php if($small_caps_heading):?>
				<h2 class="small-caps">
					<?php echo $small_caps_heading;?>
				</h2>
				<?php endif;?>
				<?php if($copy):?>
					<div class="copy-wrap">
						<?php echo $copy;?>
					</div>
				<?php endif;?>
				
				<?php 
				$link = get_sub_field('button_link');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
				<div class="link-wrap">
					<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
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