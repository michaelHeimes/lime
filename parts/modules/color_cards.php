<?php 
	$heading = get_sub_field('heading');
	$color_cards = get_sub_field('cards');
?>
<section class="module color-cards bg-light-gray">
	<div class="grid-container">
		<?php if($heading):?>
		<div class="heading-wrap grid-x grid-margin-x text-center">
			<div class="cell small-12 tablet-10 tablet-offset-1 large-6 large-offset-3">
				<?php echo $heading;?>
			</div>
		</div>
		<?php endif;?>
		<?php if($color_cards):?>
		<div class="cards-wrap grid-x grid-margin-x">
			<?php foreach ($color_cards as $color_card):?>
			<div class="single-card cell small-12 medium-6">
				<div class="inner bg-<?php echo $color_card['color_theme'];?> grid-x flex-dir-column align-justify">
					<div class="top">
						<?php 
						$rows = $color_card['rows'];
						if($rows):?>
						<div class="copy-rows">
							<?php foreach ($rows as $row):
								$heading = $row['heading'];
								$text = $row['text'];
							?>
								<div class="single-row">
									<h3><?php echo $heading;?></h3>
									<p><?php echo $text;?></p>
								</div>
							<?php endforeach;?>
						</div>
						<?php endif;?>	
					</div>
					<?php 
					$link = $color_card['link'];
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
					<div class="link-wrap bg-<?php echo $color_card['color_theme'];?>">
						<a class="grid-x align-middle small-caps" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
							<span><?php echo esc_html( $link_title ); ?></span>
							<svg id="Component_41" data-name="Component 41" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
							  <path id="Path_10" data-name="Path 10" d="M10,0,8.182,1.818,15.065,8.7H0v2.6H15.065L8.182,18.182,10,20,20,10Z" fill="#fff"/>
							</svg>
						</a>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<?php endforeach;?>
		</div>
		<?php endif;?>
	</div>
</section>