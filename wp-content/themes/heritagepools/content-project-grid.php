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
$project_thumb = $project_featured_image['sizes']['media-box-thumb'];

$pool_type = get_field('acf_pool_type');

$pool_type_name = $pool_type->name;


?>


				<?php
					$output = '';
					$term_classes = '';
					
					$terms = get_the_terms(get_the_ID(), 'pool-highlight');
					
					foreach($terms as $term) {
						
						$term_classes .= ' ' . $term->slug;
						
					    if(!empty($output))
					        
					        $output .= ', ';
							$output .= '<span class="cat">'.$term->name.'</span>';
					}
					
					
					$coping_classes = '';
					$copings = get_the_terms(get_the_ID(), 'pool-coping');
					
					foreach($copings as $coping) {
						
						$coping_classes .= ' ' . $coping->slug;
						
					}
					
					
					$decking_classes = '';
					$deckings = get_the_terms(get_the_ID(), 'pool-decking');
					
					foreach($deckings as $decking) {
						
						$decking_classes .= ' ' . $decking->slug;
						
					}
					
					
					
					
					$pool_types = get_the_terms(get_the_ID(), 'pool-type');
					
					foreach($pool_types as $pool_type) {
						
						$pool_type_class .= ' ' . $pool_type->slug;
						
					}

					
				?>


		        <div id="post-<?php the_ID(); ?>" class="media-box <?php echo $term_classes . $pool_type_class . $coping_classes . $decking_classes; ?>">
			        
			        <?php if($project_thumb) { ?>
			        
		            <div class="media-box-image">
		                <div data-title="Project: <?php the_title(); ?> - Heritage Pools, LLC" data-alt="Project: <?php the_title(); ?> - Heritage Pools, LLC" data-width="800px" data-height="700px" data-thumbnail="<?php echo $project_thumb; ?>"></div>
		                
		                <a href="<?php the_permalink(); ?>"><div class="thumbnail-overlay">
	                      	<i class="fa fa-plus"></i>
		                </div></a>
		            </div>
		            
		            <?php } ?>

		            <div class="media-box-content">
		                <div class="media-box-title">Project: <?php the_title(); ?></div>
		                <div class="media-box-pool-type"><p><?php echo $pool_type_name; ?></p></div>
		                <div class="media-box-text">
		                    <?php the_excerpt(); ?><a class="btn btn-orange-general" href="<?php the_permalink(); ?>">View Details</a>
		                </div>
		            </div>
		            
		            
		            
		            

		            <div class="media-box-footer match-height">
		            	<div class="media-box-categories"><span>Highlights:</span> <?php echo $output; ?></div>
		            </div>
		        </div>

