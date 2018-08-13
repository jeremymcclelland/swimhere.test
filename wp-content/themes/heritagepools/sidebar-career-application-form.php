<?php
/**
 * The sidebar containing the main widget area
 *
 * @package _tk
 */
 
 $first_name = get_field('first_name');
 
?>

	</div><!-- close .main-content-inner -->

	<div class="sidebar col-sm-12 col-md-6">

		<?php // add the class "panel" below here to wrap the sidebar in Bootstrap style ;) ?>
		<div class="sidebar-padder">
		

		<h3 class="text-center">Apply Today</h3>
		<p class="text-center">To apply for this position, fill out the form below</p>

		
		<div class="cognito">
		<script src="https://services.cognitoforms.com/s/w_Vlde1xr0KhvJs1sLO5mQ"></script>
		<script>Cognito.load("forms", { id: "4", entry: {"FormLocation":"<?php echo get_permalink();?>","Position":"<?php echo get_the_title();?>"} });</script>
		</div>		
			
		<a class="btn btn-block btn-orange-general" href="<?php get_site_url(); ?>/contact/careers">View All Careers</a>		
		</div><!-- close .sidebar-padder -->

