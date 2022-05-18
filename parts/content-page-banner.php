<?php 
	$fields = get_fields();

	$alternative_title = $fields['alternative_title'];
	$hide_gradient_background = $fields['hide_gradient_background'];
	$banner_background_color = $fields['banner_background_color'];
	$sub_banner_content = $fields['sub-banner_content'];
?>
<header class="article-header page-banner bg-<?php echo $banner_background_color;?><?php if($hide_gradient_background):?> no-gradient-bg<?endif;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 tablet-10 tablet-offset-1">
				<?php if($alternative_title):?>
					<h1 class="page-title"><?php echo $alternative_title; ?></h1>
				<?php else:?>
					<h1 class="page-title"><?php the_title(); ?></h1>
				<?php endif;?>
			</div>
		</div>
		<?php if($fields['add_sub-banner_content']):?>
			<?php if($sub_banner_content):?>
			<section class="grid-x grid-padding-x sub-banner-content has-bg">
				<?php if($hide_gradient_background !='true'):?>
					<div class="bg"></div>
				<?php endif;?>
				<div class="cell inner">
					<div class="grid-x grid-padding-x">
						<div class="left cell small-12 tablet-5 tablet-offset-1">
							<?php echo $sub_banner_content['left_copy'];?>
						</div>
						<div class="right cell small-12 tablet-6">
							<?php 
							$image = $sub_banner_content['right_image'];
							if( !empty( $image ) ): ?>
							<div class="img-wrap">
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</div>
							<?php endif; ?>
							<?php echo $sub_banner_content['right_copy'];?>
						</div>				
					</div>
				</div>
			</section>
			<?php endif;?>
		<?php endif;?>
	</div>
</header> <!-- end article header -->