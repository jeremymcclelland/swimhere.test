<?php

$featured_image = get_field('maintenance_plan_image');



	
	
?>
<div class="general-header text-center" style="background-image: url('<?php echo $featured_image[url]; ?>'); background-position: center center; background-size: cover;">
	
	<a class="btn btn-orange-general back-button" href="<?php get_site_url(); ?>/our-services/pool-maintenance/"><i class="fa fa-angle-left"></i> Back to Pool Maintenance</a>	
	
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-8 col-sm-4 text-center">
				<?php get_sidebar('light-gallery-maintenance-plan'); ?>
			</div>
			
		</div>
	</div>
	
</div>
