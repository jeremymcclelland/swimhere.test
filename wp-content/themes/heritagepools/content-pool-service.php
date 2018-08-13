<?php
/**
 * @package _tk
 */
 
 
$pool_option_image = get_field('pool_service_image');
$pool_option_image_small = $pool_option_image['sizes']['media-box-thumb'];

 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="entry-content-thumbnail hidden-sm hidden-md hidden-lg">
			<img class="img-responsive member-photo" src="<?php echo $pool_option_image_small; ?>" alt="<?php the_title(); ?> - Heritage Pools, LLC" title="<?php the_title(); ?> - Heritage Pools, LLC"/>
		</div>
		<h1 class="page-title"><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div><!-- .entry-content -->


	<hr>
	
	<?php echo do_shortcode('[addtoany]'); ?>

	<footer class="entry-meta">

	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
