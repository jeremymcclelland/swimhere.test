<?php
/**
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="entry-content-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<hr>
	
	<?php echo do_shortcode('[addtoany]'); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
