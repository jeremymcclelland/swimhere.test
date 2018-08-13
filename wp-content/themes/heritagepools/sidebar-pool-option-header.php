<?php

$featured_image = get_field('pool_option_image');

$position = get_field('pool_option_image_position');
if(!$position){
	$position = 'center';
}

	
	
?>
<div class="general-header text-center" style="background-image: url('<?php echo $featured_image[url]; ?>'); background-position: center <?php echo $position; ?>; background-size: cover;">
	
	<a class="btn btn-orange-general back-button hidden" href="<?php get_site_url(); ?>/our-pools/pool-options/"><i class="fa fa-angle-left"></i> All Pool Options</a>	
	
	<div class="container">
		<div class="row">
			
			<div class="col-sm-4 text-left">
				<a class="btn btn-orange-general view-all hidden-xs" href="<?php get_site_url(); ?>/our-pools/pool-options">View All Options</a>	
			</div>
			
			<div class="col-sm-offset-4 col-sm-4 text-center">
				<?php get_sidebar('light-gallery-pool-option'); ?>
			</div>
			
		</div>
	</div>
	
</div>
