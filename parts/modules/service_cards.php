<?php 
	$service_cards = get_sub_field('service_cards');
?>
<section class="module service-cards">
	<div class="grid-container">
		<?php if($service_cards):?>
		<div class="cards-wrap grid-x grid-margin-x">
			<?php foreach ($service_cards as $service_card):?>
			<div class="single-card cell small-12 medium-6">
				<div class="inner theme-<?php echo $service_card['color_theme'];?>">
					<div class="heading-wrap text-center">
						<h3 class="small-caps"><?php echo $service_card['card_heading'];?></h3>
					</div>
					<?php 
					$copy_rows = $service_card['copy_rows'];
					if($copy_rows):?>
					<div class="copy-rows">
						<?php foreach ($copy_rows as $copy_row):
							$icon = $copy_row['icon'];
							$heading = $copy_row['heading'];
							$sub_heading = $copy_row['sub-heading'];
							$copy = $copy_row['copy'];
						?>
						<div class="headings-wrap grid-x">
							<?php if(!empty($icon)):?>
							<div class="icon-wrap cell shrink">
								<img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
							</div>
							<?php endif;?>
							<div class="text-wrap cell auto">
								<h4><?php echo $heading;?></h4>
								<?php if($sub_heading):?>
								<h5 class="h6 font-acumen"><?php echo $sub_heading;?></h5>
								<?php endif;?>
							</div>
						</div>
						<div class="copy-wrap">
							<?php echo $copy;?>
						</div>
						<?php endforeach;?>
					</div>
					<?php endif;?>	
				</div>
			</div>
			<?php endforeach;?>
		</div>
		<?php endif;?>
	</div>
</section>