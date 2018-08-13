<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _tk
 */

get_header(); ?>

<div class="main-content project-content-wrapper">
	
<?php get_sidebar('project-header'); ?>	
	
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			
<div id="content" class="main-content-inner col-sm-12 col-md-8">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single-project' ); ?>

		<?php _tk_content_nav( 'nav-below' ); ?>


	<?php endwhile; // end of the loop. ?>

<?php get_sidebar('project-form'); ?>

			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->

<?php get_sidebar('google-map'); ?>
	
</div><!-- close .main-content -->
<?php get_footer(); ?>