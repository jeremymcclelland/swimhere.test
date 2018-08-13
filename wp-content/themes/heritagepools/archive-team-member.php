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







$team_categories = get_terms( array(
    'taxonomy' => 'team-category',
    'hide_empty' => false,
) );

$team_options = '';

foreach($team_categories as $team_category){
	$team_options .= '<li><a href="#" data-filter=".' . $team_category->slug . ' ">' . $team_category->name . '</a></li>';
}


?>



<div class="main-content grid-wrapper">
	
	
<?php get_sidebar('archive-header'); ?>	
	
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">

<div id="content" class="main-content-inner col-sm-12 col-md-12">





		<div class="filters-container hidden">

            <div class="media-boxes-search">
                <span class="media-boxes-icon fa fa-search"></span>
                <input type="text" id="search" placeholder="Search by Name">
                <span class="media-boxes-clear fa fa-close"></span>
            </div> 
    

            
            
            <ul class="media-boxes-filter filters" id="filter">
			  	<li><a class="selected" href="#" data-filter="*">All</a></li>
			  	<?php echo $team_options; ?>
			  	
			</ul>



        </div>


	
	
<div id="grid" class="team-member-grid">

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to overload this in a child theme then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', 'team-grid' );
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
    jQuery('.team-member-grid').mediaBoxes({
    	search: '#search',
    	sortContainer: '#sort',
    	deepLinkingOnFilter: true,
    	columns: 4,
    	boxesToLoadStart: 8,
    	boxesToLoad: 4,
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