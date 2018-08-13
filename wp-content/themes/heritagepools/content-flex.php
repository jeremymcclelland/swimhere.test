<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _tk
 */
?>

<?php if(get_the_content()){ ?>

<article id="post-<?php the_ID(); ?>" class="flex-page-content-top">

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->


<?php } ?>