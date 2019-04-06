<?php

$featured_image = get_field('project_featured_image');

$alignment = get_field('project_banner_alignment');

if(!$alignment){
	$alignment = 'bottom';
}
	
	
?>
<div class="general-header text-center" style="background-image: url('<?php echo $featured_image['url']; ?>'); background-position: center <?php echo $alignment; ?>; background-size: cover;">
	
	<a class="btn btn-orange-general back-button hidden" href="<?php get_site_url(); ?>/our-pools/completed-projects/"><i class="fa fa-angle-left"></i> All Projects</a>	
	
	<div class="container">
		<div class="row">
			
			<div class="col-sm-4 text-left">
				<a class="btn btn-orange-general view-all hidden-xs" href="<?php get_site_url(); ?>/our-pools/completed-projects/">View All Projects</a>	
			</div>
			
			<div class="col-sm-offset-4 col-sm-4 text-center">
				
			</div>
			
		</div>
	</div>
	
</div>
