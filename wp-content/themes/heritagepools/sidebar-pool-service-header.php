<?php

$featured_image = get_field('pool_service_image');
$featured_image = $featured_image['url'];

if(!$featured_image){
	$featured_image = get_stylesheet_directory_uri() . '/assets/media/water.jpg';
}


	
	
?>
<div class="general-header text-center" style="background-image: url('<?php echo $featured_image; ?>'); background-position: center center; background-size: cover;">
	
	<a class="btn btn-orange-general back-button hidden" href="<?php get_site_url(); ?>/our-services/other-pool-services/"><i class="fa fa-angle-left"></i> All Pool Services</a>	
	
	<div class="container">
		<div class="row">
			
			<div class="col-sm-4 text-left">
				<a class="btn btn-orange-general view-all hidden-xs" href="<?php get_site_url(); ?>/our-services/other-pool-services/">View All Services</a>	
			</div>
			
			<div class="col-sm-offset-4 col-sm-4 text-center">
				<?php get_sidebar('light-gallery-pool-service'); ?>
			</div>
			
		</div>
	</div>
	
</div>
