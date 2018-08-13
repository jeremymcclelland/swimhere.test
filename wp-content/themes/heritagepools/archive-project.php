<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _tk
 */

get_header(); 



$copings = get_terms( array(
    'taxonomy' => 'pool-coping',
    'hide_empty' => true,
) );

$filter_options = '';

foreach($copings as $coping){
	$filter_options .= '<li><a href="#" data-filter=".' . $coping->slug . ' ">' . $coping->name . ' Coping</a></li>';
}




$deckings = get_terms( array(
    'taxonomy' => 'pool-decking',
    'hide_empty' => true,
) );


$decking_options = '';

foreach($deckings as $decking){
	$decking_options .= '<li><a href="#" data-filter=".' . $decking->slug . ' ">' . $decking->name . ' Decking</a></li>';
}



$pool_types = get_terms( array(
    'taxonomy' => 'pool-type',
    'hide_empty' => true,
) );

$pool_options = '';

foreach($pool_types as $pool_type){
	$pool_options .= '<li><a href="#" data-filter=".' . $pool_type->slug . ' ">' . $pool_type->name . '</a></li>';
}


?>

<div class="main-content grid-wrapper">
	
	
<?php get_sidebar('archive-header'); ?>	
	
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">

<div id="content" class="main-content-inner col-sm-12 col-md-12">





        <!--  ================== MEDIA BOXES ================== -->

        <div class="filters-container">

            <div class="media-boxes-search">
                <span class="media-boxes-icon fa fa-search"></span>
                <input type="text" id="search" placeholder="Search by title">
                <span class="media-boxes-clear fa fa-close"></span>
            </div>
    
<!--
            <div class="media-boxes-drop-down">
                <div class="media-boxes-drop-down-header">
                </div>
                <ul class="media-boxes-drop-down-menu filters" data-id="third-filter">
                  <li><a class="selected" href="#" data-filter="*">All</a></li>
                  <li><a href="#" data-filter=".red">Red</a></li>
                  <li><a href="#" data-filter=".green">Green</a></li>
                  <li><a href="#" data-filter=".blue">Blue</a></li>
                </ul>
            </div>
-->


            <div class="media-boxes-drop-down">
                <div class="media-boxes-drop-down-header">
                </div>
                <ul class="media-boxes-drop-down-menu filters" data-id="third-filter">
                  <li><a class="selected" href="#" data-filter="*">Pool Coping</a></li>
                   <?php echo $filter_options; ?>
                </ul>
            </div>
            
            
            <div class="media-boxes-drop-down">
                <div class="media-boxes-drop-down-header">
                </div>
                <ul class="media-boxes-drop-down-menu filters" data-id="second-filter">
                  <li><a class="selected" href="#" data-filter="*">Pool Decking</a></li>
                   <?php echo $decking_options; ?>
                </ul>
            </div>

            <div class="media-boxes-drop-down">
                <div class="media-boxes-drop-down-header">
                </div>
                <ul class="media-boxes-drop-down-menu filters" data-id="first-filter">
                  <li><a class="selected" href="#" data-filter="*">Pool Types</a></li>
                  <?php echo $pool_options; ?>
                </ul>
            </div>

        </div>




	
	
<div id="grid" class="project-grid">

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to overload this in a child theme then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', 'project-grid' );
			?>

		<?php endwhile; ?>

		<?php // _tk_content_nav( 'nav-below' ); ?>
        <?php //_tk_pagination(); ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'index' ); ?>

	<?php endif; ?>

			
			</div><!-- Closes #Grid -->

			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<script>

/*
    jQuery('.project-grid').mediaBoxes({
    	search: '#search',
    	sortContainer: '#sort',
    	deepLinkingOnFilter: true,
    	columns: 3,
    	boxesToLoadStart: 6,
    	boxesToLoad: 6,
    	waitUntilThumbWithRatioLoads: true,
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
		filterContainer: '.filters',
        
        
    }); 
*/

</script>


<?php get_footer(); ?>