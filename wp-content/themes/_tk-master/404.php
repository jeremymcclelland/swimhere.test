<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package _tk
 */

get_header(); ?>

<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">

<div id="content" class="main-content-flex-wrapper col-md-12">

	<?php // add the class "panel" below here to wrap the content-padder in Bootstrap style ;) ?>
	<section class="content-padder error-404 not-found">

		<header>
			<h2 class="page-title"><?php _e( 'Oops! Something went wrong here.', '_tk' ); ?></h2>
		</header><!-- .page-header -->

		<div class="page-content">

			<p><?php _e( 'Nothing could be found at this location. Maybe try a search?', '_tk' ); ?></p>

			<?php get_search_form(); ?>

		</div><!-- .page-content -->

	</section><!-- .content-padder -->
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<?php get_footer(); ?>