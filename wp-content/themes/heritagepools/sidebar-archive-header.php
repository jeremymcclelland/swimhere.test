<?php

$post_type = get_post_type();

if(is_search()){
	$post_type = 'search';
}elseif(is_404()){
	$post_type = 'whoops';
}

$image = get_field($post_type . '_header_image', 'options');
if(!$image){
	$image = get_stylesheet_directory_uri() . '/assets/media/water.jpg';
}

$overlay = get_field($post_type . '_overlay_color', 'options');
$opacity = get_field($post_type . '_overlay_transparency', 'options');

$rgba = hex2rgba($overlay, $opacity);
$background = 'style="background-color: ' . $rgba . ';"';

$text_color = get_field($post_type . '_header_text_color', 'options');
$divider_color = get_field($post_type . '_header_divider_color', 'options');
$shadow = get_field($post_type . '_add_text_shadow', 'options');

$shadow_class = '';

if($shadow){
	$shadow_class = 'text-shadow';
}

$title_override = get_field($post_type . '_header_title_override', 'options');
$sub_title = get_field($post_type . '_header_subtitle', 'options');

if(!$title_override){
	
	
	switch ($post_type) {
	    case 'post':
	        $title_override = "Heritage Pools Blog";
	        break;
	    case 'project':
	        $title_override = "Completed Projects";
	        break;
	    case 'team-member':
	        $title_override = "Team Members";
	        break;
	    case 'career':
	        $title_override = "Careers";
	        break;
	    case 'pool-option':
	        $title_override = "Pool Options";
	        break;
	    case 'pool-liner':
	        $title_override = "Pool Liners";
	        break;
	    case 'concrete-finish':
	        $title_override = "Concrete Finishes";
	        break;
	    case 'pool-service':
	        $title_override = "Other Pool Services";
	        break;
	    case 'search':
	        $title_override = "Search";
	        break;
		case 'whoops':
	        $title_override = "404";
	        $text_color = 'white';
	        $sub_title = 'No Diving! Shallow End';
	        $image = get_stylesheet_directory_uri() . '/assets/media/water.jpg';
	        $divider_color = 'white';
	        $background = 'style=""';

	        break;	
	}
	
}



$header_content = get_field($post_type . '_header_content', 'options');


$subnav = get_field($post_type . '_subnav', 'options');

if($subnav){
	

	$subnav_html .= '<div class="subnav-outer-wrapper hidden-xs text-center"><div class="container center-block">';
	
	
	$subnav_html .= wp_nav_menu(
				array(
					'menu' 	=> $subnav,
					'depth'             => 1,
					'menu_class' 		=> 'nav nav-pills subnav',
					'echo'				=> false,
					'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
					'menu_id'			=> 'test',
					'walker' 			=> new wp_bootstrap_navwalker()
				)
			); 
	
	
	
	
	$subnav_html .= '<hr></div></div>';
	
}



	
?>
<div class="general-header text-center" style="background-image: url('<?php echo $image; ?>'); background-position: center center; background-size: cover;">
	
	<div class="title-overlay <?php echo $text_color . ' ' . $shadow_class; ?>" <?php echo $background; ?>>
		
		<div class="container container-header">
		
		<h1 class="page-title"><?php echo $title_override; ?></h1>
		
		
		
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
	
		<h3><?php echo $sub_title; ?></h3>
	
		</div>

	</div><!-- Ends title overlay -->
</div>


<?php
	
	
if($subnav){
	echo $subnav_html;
}
	
if($header_content)	{
	
	$html = '
	
	<div class="container lead-container">
	
		<p class="lead text-center">' . $header_content . '</p>
	
	</div>
	
	';
	
	
	echo $html;
	
}
	
	
?>
