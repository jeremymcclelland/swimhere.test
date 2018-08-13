<?php
/**
 * The sidebar containing the main widget area
 *
 * @package _tk
 */
 
 $first_name = get_field('first_name');
 
?>

	</div><!-- close .main-content-inner -->

	<div class="sidebar col-sm-12 col-md-4">

		<?php // add the class "panel" below here to wrap the sidebar in Bootstrap style ;) ?>
		<div class="sidebar-padder">
		<a class="btn btn-block btn-orange-general sidebar-btn hidden-sm hidden-md hidden-lg" href="<?php get_site_url(); ?>/our-pools/pool-options">View All Options</a>	

		<h3 class="text-center">Request Information</h3>
		<p class="text-center">For more information for <?php echo get_the_title(); ?>, fill out the form below or give us a call at 843.762.3417</p>

		
		<div class="cognito">
		<script src="https://services.cognitoforms.com/s/w_Vlde1xr0KhvJs1sLO5mQ"></script>
		<script>Cognito.load("forms", { id: "5", entry: {"FormLocation":"<?php echo get_permalink();?>","PoolOption":"<?php echo get_the_title();?>"} });</script>
		</div>		
			
		
		
		</div><!-- close .sidebar-padder -->

