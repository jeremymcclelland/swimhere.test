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
// for example content-single.php for the post single view. ?>


						<?php
							/* translators: used between list items, there is a space after the comma */
							foreach((get_the_category()) as $category) {
							    $cat_classes .= $category->slug . ' ';
							   
							}
							
						?>


		        <div id="post-<?php the_ID(); ?>" class="media-box <?php echo $cat_classes; ?>">
			        
			        <?php if(get_the_post_thumbnail_url()) { ?>
			        
		            <div class="media-box-image">
		                <div data-title="<?php the_title(); ?>" data-alt="<?php the_title(); ?>" data-thumbnail="<?php the_post_thumbnail_url('media-box-thumb'); ?>"></div>
		                
		                <a href="<?php the_permalink(); ?>"><div class="thumbnail-overlay">
	                      	<i class="fa fa-plus"></i>
		                </div></a>
		            </div>
		            
		            <?php } ?>

		            <div class="media-box-content">
		                <div class="media-box-title"><?php the_title(); ?></div>
		                <div class="media-box-date"><?php _tk_posted_on(); ?></div>
		                <div class="media-box-text">
		                    <?php the_excerpt(); ?><a class="btn btn-orange-general" href="<?php the_permalink(); ?>">Read more</a>
		                </div>
		            </div>
		            
	
		            
		            

		        </div>

