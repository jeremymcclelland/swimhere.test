<?php
/**
 * The sidebar containing the main widget area
 *
 * @package _tk
 */
?>

	</div><!-- close .main-content-inner -->

	<div class="sidebar col-sm-12 col-md-4">

		<?php // add the class "panel" below here to wrap the sidebar in Bootstrap style ;) ?>
		<div class="sidebar-padder">
		
		<a class="btn btn-orange-general btn-block hidden-sm hidden-md hidden-lg" href="<?php get_site_url(); ?>/our-pools/completed-projects/">View All Projects</a>	
		
		<h3 class="text-center">Request More Information</h3>
		<p class="text-center">For more information, fill out the form below or give us a call at 843.762.3417</p>

		
		
		<div class="cognito sidebar-form">
		<script src="https://services.cognitoforms.com/s/w_Vlde1xr0KhvJs1sLO5mQ"></script>
		<script>Cognito.load("forms", { id: "6", entry: {"FormLocation":"<?php echo get_permalink();?>","ProjectNumber":"<?php echo get_the_title();?>"} });</script>
		</div>
			
		
			
		</div><!-- close .sidebar-padder -->
