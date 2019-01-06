<?php
/**
 * @package _tk
 */
 
 $city = get_field('project_city');
 $state = get_field('project_state');
 
 
$type = get_field('acf_pool_type');
$coping = get_field('acf_pool_coping');
$decking = get_field('acf_pool_decking');
$features = get_field('acf_pool_features');
 
$liner = get_field('project_liner_type');

$pool_size = get_field('project_pool_size');
 
 
 
 $liner_id = $liner[0]->ID;
 
 $discontinued = get_field('discontinued', $liner_id);

if($discontinued){
	$liner_title = $liner[0]->post_title . ' <i>Discontinued</i>';
} else {
	$liner_title = $liner[0]->post_title;
}
 
 $liner_image = get_the_post_thumbnail_url($liner_id, 'thumbnail');
 
 
 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content">
		
		<h1 class="page-title">Project: <?php the_title(); ?></h1>
		<h2 class="location"><?php echo $city . ', ' . $state; ?></h2>
		
		<?php the_content(); ?>
	
	<hr>	
	<h2 class="pool-type">Pool Type</h2>
	<p><?php echo $type->name; ?></p>

	<hr>	
	<h2 class="pool-type">Pool Size</h2>
	<p><?php echo $pool_size; ?></p>
	
	<hr>	
	<h2 class="pool-type">Coping</h2>
	<p><?php echo $coping->name; ?></p>
	
	<hr>	
	<h2 class="pool-type">Decking</h2>
	<p><?php echo $decking->name; ?></p>
	
	<hr>
	<h2 class="pool-features">Highlights</h2>

	<?php

	$pool_highlights_override = get_field('pool_highlights_override');

	if($pool_highlights_override) {

		echo $pool_highlights_override;
	} else {

		echo '<ul class="features-list">';

		foreach($features as $feature){
				
			echo '<li>' . $feature->name . '</li>';
				
		}


		echo '</ul>';
	}


	?>

	
		
		
	
	<hr>
	
	<?php if($liner) { ?>
	
	<h2 class="pool-liner">Pool Finish</h2>
	<p><?php echo $liner_title ?></p>
	<img src="<?php echo $liner_image; ?>" alt="Pool Finish: <?php echo $liner_title ?>" title="Pool Finish: <?php echo $liner_title ?>" class="img-responsive img-circle"/>
	<hr>
	<?php } ?>
	<?php echo do_shortcode('[addtoany]'); ?>
		
	</div><!-- .entry-content -->

	<footer class="entry-meta">
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
