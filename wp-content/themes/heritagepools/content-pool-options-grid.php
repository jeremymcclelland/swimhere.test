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



$pool_option_image = get_field('pool_option_image');
$pool_option_thumb = $pool_option_image['sizes']['media-box-thumb'];

//$pool_type = get_field('acf_pool_type');

//$pool_type_name = $pool_type->name;


?>


				<?php
					$output = '';
					$term_classes = '';
					
/*
					$terms = get_the_terms(get_the_ID(), 'pool-highlight');
					
					foreach($terms as $term) {
						
						$term_classes .= ' ' . $term->slug;
						
					    if(!empty($output))
					        
					        $output .= ', ';
							$output .= '<span class="cat">'.$term->name.'</span>';
					}
					
					
					
					
					$pool_types = get_the_terms(get_the_ID(), 'pool-type');
					
					foreach($pool_types as $pool_type) {
						
						$pool_type_class .= ' ' . $pool_type->slug;
						
					}
*/

					
				?>


		        <div id="post-<?php the_ID(); ?>" class="media-box <?php echo $term_classes . $pool_type_class; ?>">
			        
			        <?php if($pool_option_thumb) { ?>
			        
		            <div class="media-box-image">
		                <div data-title="<?php the_title(); ?> - Heritage Pools, LLC" data-alt="<?php the_title(); ?> - Heritage Pools, LLC" data-width="800px" data-height="700px" data-thumbnail="<?php echo $pool_option_thumb; ?>"></div>
		                
		                <a href="<?php the_permalink(); ?>"><div class="thumbnail-overlay">
	                      	<i class="fa fa-plus"></i>
		                </div></a>
		            </div>
		            
		            <?php } ?>

		            <div class="media-box-content">
			            <div class="match-height">
			                <div class="media-box-title"><?php the_title(); ?></div>
			                <div class="media-box-pool-type"><p><?php echo $pool_type_name; ?></p></div>
			                <div class="media-box-text">
			                    <?php echo excerpt(20); ?>
			                </div>
			               
			            </div>
			             <a class="btn btn-orange-general" href="<?php the_permalink(); ?>">View Details</a>
		            </div>
		            
		            
		            
		            

<!--
		            <div class="media-box-footer">
		            	<div class="media-box-categories"><span>Highlights:</span> <?php echo $output; ?></div>
		            </div>
-->
		        </div>

