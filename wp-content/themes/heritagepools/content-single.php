<?php
/**
 * @package _tk
 */
 
 $post_thumbnail_url = get_the_post_thumbnail_url();
 $featured = '';
 if($post_thumbnail_url){
	 $featured = '<img class="img-responsive" alt="' . get_the_title() . '" title="' . get_the_title() . '" src="' . $post_thumbnail_url . '"/>';
 }
 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="entry-content-thumbnail">
			<?php echo $featured; ?>
		</div>
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		
		<?php
			$output = '';
			$term_classes = '';
			
			$terms = get_the_terms(get_the_ID(), 'blog-category');
			
			if($terms){
				foreach($terms as $term) {
					
					$term_classes .= ' ' . $term->slug;
					
				    if(!empty($output))
				        
				        $output .= ', ';
						$output .= '<span class="cat">'.$term->name.'</span>';
				}
			}
			
			

			
		?>
		
		
		
		<?php
			if($terms){
				echo 'Categories: ' . $output;
			}
			
				
		?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
