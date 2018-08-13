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



$pool_option_image = get_the_post_thumbnail_url();
$pool_option_thumb = get_the_post_thumbnail_url();




?>


						<?php
							$output = '';
							$term_classes = '';
							
							$terms = get_the_terms(get_the_ID(), 'liner-type');
							
							if($terms){
								foreach($terms as $term) {
									
									$term_classes .= ' ' . $term->slug;
									
								    if(!empty($output))
								        
								        $output .= ', ';
										$output .= '<span class="cat">'.$term->name.'</span>';
								}
							}
							
							

							
						?>


		        <div id="post-<?php the_ID(); ?>" class="text-center match-height media-box <?php echo $term_classes; ?>">
			        
			        <?php if($pool_option_thumb) { ?>
			        
		            <div class="media-box-image">
		                <div data-title="<?php the_title(); ?> - Pool Liners" data-alt="<?php the_title(); ?> - Pool Liners" data-width="500px" data-height="500px" data-thumbnail="<?php echo $pool_option_thumb; ?>"></div>
		                
		               <div class="thumbnail-overlay">
	                      	<i class="fa fa-plus mb-open-popup" data-src="<?php echo $pool_option_thumb; ?>" data-title="<?php the_title(); ?>"></i>
		                </div>
		            </div>
		            
		            <?php } ?>

		            <div class="media-box-content">
		                <div class="media-box-title"><?php the_title(); ?></div>
		                <div class="media-box-text">
		               	 <p><?php echo $output; ?></p>
		                </div>
		            </div>
		            
		            
		            
		            

<!--
		            <div class="media-box-footer">
		            	<div class="media-box-categories"><span>Highlights:</span> <?php echo $output; ?></div>
		            </div>
-->
		        </div>

