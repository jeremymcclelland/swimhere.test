<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package _tk
 */

get_header(); ?>

<div class="main-content grid-wrapper">
	
<?php get_sidebar('archive-header'); ?>	

	<div class="container">
		<div class="row">

<div id="content" class="main-content-inner col-sm-12 col-md-12">

	<?php if ( have_posts() ) : ?>

		<header>
			<h2 class="search-results-title page-title"><?php printf( __( 'Search Results for: %s', '_tk' ), '<span>' . get_search_query() . '</span>' ); ?></h2><hr>
		</header><!-- .page-header -->

		<?php // start the loop. ?>
		
		<div id="grid" class="search-grid">

		
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'search-grid' ); ?>

		<?php endwhile; ?>
		
		</div><!-- Closes #Grid -->


	<?php else : ?>

		<?php get_template_part( 'no-results', 'search' ); ?>

	<?php endif; // end of loop. ?>


			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<script>

/*
    jQuery('.search-grid').mediaBoxes({
    	filterContainer: '#filter',
    	search: '#search',
    	sortContainer: '#sort',
    	columns: 3,
    	boxesToLoadStart: 6,
    	boxesToLoad: 6,
    	horizontalSpaceBetweenBoxes: 30,
    	verticalSpaceBetweenBoxes: 30,
    	getSortData: {
          title: '.media-box-title',
          categories: '.media-box-categories'
        },
        minBoxesPerFilter: 999,
        resolutions: [
            {
                maxWidth: 979,
                columnWidth: 'auto',
                columns: 2,
            },
            {
                maxWidth: 650,
                columnWidth: 'auto',
                columns: 1,
            },
            {
                maxWidth: 450,
                columnWidth: 'auto',
                columns: 1,
            },
        ],

        
        
    }); 
*/

</script>


<?php get_footer(); ?>