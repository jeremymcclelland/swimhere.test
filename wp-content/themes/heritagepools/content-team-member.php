<?php
/**
 * @package _tk
 */
 
 
$team_member_photo = get_field('team_member_photo');
$team_photo_media_box = $team_member_photo['sizes']['media-box-thumb'];
$team_member_title = get_field('team_member_title');


if(!$team_photo_media_box){
	$team_photo_media_box = get_stylesheet_directory_uri() . '/assets/media/default.jpg';
}

$year = get_field('team_member_year_started');

$something_personal = get_field('something_personal');

 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="entry-content-thumbnail">
			<img class="img-responsive member-photo" alt="<?php the_title(); ?> - Heritage Pools, LLC" title="<?php the_title(); ?> - Heritage Pools, LLC" src="<?php echo $team_photo_media_box; ?>"/>
		</div>
		
		<?php 
			
		echo '<h3>' . get_the_title() . '</h3>';
		
		if($team_member_title){
			echo '<h4>' . $team_member_title . '</h4>';
		}
			
			
		if($year){
			echo '<p>On Board Since: ' . $year . '</p>';
		}
		
		$content = get_the_content();
		
		if($content){
			echo '<h3>Job Description</h3>' . wpautop($content);
		}
		
		if($something_personal){
			echo '<h3>Something Personal</h3>' . $something_personal;
		}
		?>
		
		
		
		
		
	</div><!-- .entry-content -->


	<hr>
	
	<?php echo do_shortcode('[addtoany]'); ?>

	<footer class="entry-meta">

	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
