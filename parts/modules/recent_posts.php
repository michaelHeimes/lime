<?php 
	$recent_posts = get_sub_field('posts');
?>
<section class="module recent-posts">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell">
				<h3 class="text-center">Recent LimeLights™</h3>
			</div>
		</div>
		<div class="grid-x grid-margin-x align-center small-up-1 medium-up-2 tablet-up-3">
		<?php
		foreach( $recent_posts as $post ): ?>
			<?php get_template_part( 'parts/loop', 'archive-sidebar' );?>
		<?php
		endforeach;wp_reset_postdata();?>
		</div>
	</div>
</section>