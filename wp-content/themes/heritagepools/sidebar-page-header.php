<?php

$image = get_field('post_header_image');
if(!$image){
	$image = get_stylesheet_directory_uri() . '/assets/media/water.jpg';
}

$overlay = get_field('post_overlay_color');
$opacity = get_field('post_overlay_transparency');

$rgba = hex2rgba($overlay, $opacity);
$background = 'style="background-color: ' . $rgba . ';"';

$text_color = get_field('post_header_text_color');
$divider_color = get_field('post_header_divider_color');
$shadow = get_field('add_text_shadow');

$shadow_class = '';

if($shadow){
	$shadow_class = 'text-shadow';
}

	
	
?>
<div class="general-header text-center" style="background-image: url('<?php echo $image; ?>'); background-position: center center; background-size: cover;">
	
	<div class="title-overlay <?php echo $text_color . ' ' . $shadow_class; ?>" <?php echo $background; ?>>
		
		<div class="container">
		
		<h1 class="page-title"><?php the_title(); ?></h1>
		
		
		
		<span class="divider">
										
			<span class="flex-hr <?php echo $divider_color; ?>"><hr></span>
										
										<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 145 15" style="enable-background:new 0 0 145 15;" xml:space="preserve">
		
										<path class="st0 <?php echo $divider_color; ?>" d="M107,2.8c-8.6-3.9-16.2-4.9-27.2,4.4c-4.9-1.1-9.2-2.9-12.5-4.4C58.6-1.1,51-2.1,40,7.3c0,0,8.1-3.5,16.8-0.6
											C45.2,10.4,34.1,6,27.2,2.8C18.6-1.1,11-2.1,0,7.3c0,0,10.8-4.7,20.9,1.2c4.8,3.3,24.9,13,39.4-0.3c0.2,0.1,0.4,0.2,0.6,0.3
											c4.8,3.3,24.8,13,39.3-0.2c0.1,0.1,0.3,0.1,0.4,0.2c5.4,3.7,29.9,15.4,44.4-6.1C130.5,12.7,115.6,6.8,107,2.8z M79.8,7.2
											c0.5-0.2,8.4-3.4,16.9-0.6C90.7,8.6,84.9,8.4,79.8,7.2z"></path>
										</svg>
										
			<span class="flex-hr <?php echo $divider_color; ?>"><hr></span>
										
		</span>
	
		<h3><?php _tk_posted_on(); ?></h3>
	
		</div>

	</div><!-- Ends title overlay -->
</div>
