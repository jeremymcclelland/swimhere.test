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






$team_member_photo = get_field('team_member_photo');
$team_photo_media_box = $team_member_photo['sizes']['media-box-thumb'];

if(!$team_photo_media_box){
	$team_photo_media_box = get_stylesheet_directory_uri() . '/assets/media/default.jpg';
}

$team_member_title = get_field('team_member_title');
$team_member_email = get_field('team_member_email');


?>


				<?php
					
					$team_categories = get_the_terms(get_the_ID(), 'team-category');
					
					foreach($team_categories as $team_category) {
						
						$team_category_class .= ' ' . $team_category->slug;
						
					}

					
				?>


		        <div id="post-<?php the_ID(); ?>" class="text-center media-box <?php echo $team_category_class; ?>">
			        
			        <?php if($team_photo_media_box) { ?>
			        
		            <div class="media-box-image">
		                <div data-title="<?php the_title(); ?> - Heritage Pools, LLC" data-alt="<?php the_title(); ?> - Heritage Pools, LLC" data-thumbnail="<?php echo $team_photo_media_box; ?>"></div>
		                
		                <a href="<?php the_permalink(); ?>"><div class="thumbnail-overlay">
	                      	<i class="fa fa-plus"></i>
		                </div></a>
		            </div>
		            
		            <?php } ?>

		            <div class="media-box-content">
			            <div class="match-height">
		                <div class="media-box-title"><?php the_title(); ?></div>
		                <div class="media-box-member-title"><h3><?php echo $team_member_title; ?></h3></div>
		                <div class="media-box-member-email"><p><?php echo $team_member_email; ?></p></div>
			            </div>
		                <div class="media-box-text team-button">
		                    <a class="btn btn-orange-general" href="<?php the_permalink(); ?>">View Details</a>
		                </div>
		            </div>
		        </div>

