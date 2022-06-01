<?php
/**
 * The template part for displaying an author byline
 */
 	$queried_obj = get_queried_object();
 	$queried_id = $queried_obj->cat_ID;
	$cats = get_the_category_list(', ');
	$date = get_the_date( 'F j, Y' );
?>

<p class="byline">
	<span class="small-text">
	<?php
		echo $cats . ' | ' . $date;
	?>
	</span>
</p>	
