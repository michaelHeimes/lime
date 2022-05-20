<?php 
	$cats = get_categories(array(
		'parent'  => 0,
		'hide_empty' => true,
	));
	$queried_obj = get_queried_object();
	$queried_id = $queried_obj->cat_ID;
?>
<?php if($cats):?>
<div class="cat-links grid-x text-center">
	<a class="button" href="<?php echo esc_url(get_permalink(get_option('page_for_posts')));?>">All Posts</a>
	<?php foreach($cats as $category):
		$cat_id = $category->cat_ID;
		$category_link = get_category_link($category->cat_ID);?>
		<a class="button<?php if($cat_id === $queried_id):?> is-active<?php endif;?>" href="<?php echo esc_url($category_link);?>"><?php echo $category->name;?></a>
	<?php endforeach;?>
</div>
<?php endif;?>