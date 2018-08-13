<?php
/**
 * @package _tk
 */
?>


<?php // Styling Tip!

// Want to wrap for example the post content in blog listings with a thin outline in Bootstrap style?
// Just add the class "panel" to the article tag here that starts below.
// Simply replace post_class() with post_class('panel') and check your site!
// Remember to do this for all content templates you want to have this,
// for example content-single.php for the post single view.



$project_featured_image = get_field('project_featured_image');
$project_thumb = $project_featured_image['sizes']['page-width'];

$pool_type = get_field('acf_pool_type');

$pool_type_name = $pool_type->name;


?>


				<?php
					$output = '';
					$term_classes = '';
					
					$career_categories = get_the_terms(get_the_ID(), 'career-category');
					
					foreach($career_categories as $career_category) {
						
						$term_classes .= ' ' . $career_category->slug;
						
					}
					
					
					
	
					
				?>


		        <div id="post-<?php the_ID(); ?>" class="media-box <?php echo $term_classes; ?>">
			        
			        <?php if($project_thumb) { ?>
			        
		            <div class="media-box-image">
		                <div data-thumbnail="<?php echo $project_thumb; ?>"></div>
		                
		                <a href="<?php the_permalink(); ?>"><div class="thumbnail-overlay">
	                      	<i class="fa fa-plus"></i>
		                </div></a>
		            </div>
		            
		            <?php } ?>

		            <div class="media-box-content">
		                <div class="media-box-title"><?php the_title(); ?></div>
		                <div class="media-box-pool-type"><p><?php echo $pool_type_name; ?></p></div>
		                <div class="media-box-text">
		                    <?php the_excerpt(); ?><a class="btn btn-orange-general" href="<?php the_permalink(); ?>">Apply Now</a>
		                </div>
		            </div>
		            

		        </div>

