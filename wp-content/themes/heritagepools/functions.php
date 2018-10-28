<?php
	
	
	
/* Custom image size*/
add_image_size('page-width',2000);
add_image_size( 'gallery-thumb', 400, 400, true);
add_image_size( 'media-box-thumb', 800, 700, true);
add_image_size( 'owl-gallery', 1500, 750, true);
add_image_size( 'full-owl-gallery', 2000, 800, true);	





/////////////////////////////////////////////////////////////////////	
function whero_limit_image_size($file) {

// Calculate the image size in KB
$image_size = $file['size']/1024;

// File size limit in KB
$limit = 1000;

// Check if it's an image
$is_image = strpos($file['type'], 'image');

if ( ( $image_size > $limit ) && ($is_image !== false) )
        $file['error'] = 'Your picture is too large. It has to be smaller than '. $limit .'KB';

return $file;

}
add_filter('wp_handle_upload_prefilter', 'whero_limit_image_size');
	
// TypeKit/////////////////////////////////////////////////////
/*
  wp_enqueue_script( 'colur-typekit', '//use.typekit.net/dnn2eru.js');
  
  function elp_typekit_inline() {
    if ( wp_script_is( 'colur-typekit', 'done' ) ) { ?>
      <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <?php }
  }
add_action( 'wp_head', 'elp_typekit_inline' );
*/

// TypeKit/////////////////////////////////////////////////////


function hex2rgba($color, $opacity = false) {
 
	$default = 'rgb(0,0,0)';
 
	//Return default if no color provided
	if(empty($color))
          return $default; 
 
	//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}


acf_add_options_sub_page(array(
'title' => 'Blog Options',
'parent' => 'edit.php'
));

acf_add_options_sub_page(array(
'title' => 'Project Options',
'parent' => 'edit.php?post_type=project'
));

acf_add_options_sub_page(array(
'title' => 'Team Options',
'parent' => 'edit.php?post_type=team-member'
));

acf_add_options_sub_page(array(
'title' => 'Career Options',
'parent' => 'edit.php?post_type=career'
));


acf_add_options_sub_page(array(
'title' => 'Pool Options Archive Header',
'parent' => 'edit.php?post_type=pool-option'
));

acf_add_options_sub_page(array(
'title' => 'Pool Liners Archive Header',
'parent' => 'edit.php?post_type=pool-liner'
));


acf_add_options_sub_page(array(
'title' => 'Concrete Finish Archive Header',
'parent' => 'edit.php?post_type=concrete-finish'
));

acf_add_options_sub_page(array(
'title' => 'Pool Service Archive Header',
'parent' => 'edit.php?post_type=pool-service'
));
	
	
function heritagepools_child_enqueue_parent_style() {
    wp_enqueue_style( 'heritagepools-parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'heritagepools-fonts', 'https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i', array('heritagepools-parent-style') );
	 wp_enqueue_style( 'pier-font', get_stylesheet_directory_uri() . '/assets/fonts/PierSans/font.css', array( 'heritagepools-parent-style' ), wp_get_theme()->get('Version') );
	
	
    // load Font Awesome css
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array('heritagepools-fonts') );
	
	//Bootstrap Dropdown
    wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/assets/css/animate.min.css', array( 'heritagepools-parent-style' ), wp_get_theme()->get('Version') );
    wp_enqueue_style( 'bootdrop', get_stylesheet_directory_uri() . '/assets/css/bootstrap-dropdownhover.min.css', array( 'heritagepools-parent-style' ), wp_get_theme()->get('Version') );
	
	
	
	
	
	//Owl Carousel
    wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array( 'heritagepools-parent-style' ), wp_get_theme()->get('Version') );
    wp_enqueue_style( 'owl-theme', get_stylesheet_directory_uri() . '/assets/css/owl.theme.default.min.css', array( 'heritagepools-parent-style' ), wp_get_theme()->get('Version') );
    
    
    //TwentyTwenty
	wp_enqueue_style( 'twenty-twenty', get_stylesheet_directory_uri() . '/assets/css/twentytwenty.css', array( 'heritagepools-parent-style' ), wp_get_theme()->get('Version') );
    
    
     
    //venobox
    wp_enqueue_style( 'veno-box', get_stylesheet_directory_uri() . '/assets/css/venobox.css', array( 'heritagepools-parent-style' ), wp_get_theme()->get('Version') );

    //slick slider
    //wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/assets/slick/slick.css', array( 'heritagepools-parent-style' ), wp_get_theme()->get('Version') );
    //wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/assets/slick/slick-theme.css', array( 'heritagepools-parent-style' ), wp_get_theme()->get('Version') );
    
	
	//mapplic
	wp_enqueue_style( 'mapplic', get_stylesheet_directory_uri() . '/assets/css/mapplic.css', array( 'heritagepools-parent-style' ), wp_get_theme()->get('Version') );
	wp_enqueue_style( 'mapplic-map', get_stylesheet_directory_uri() . '/assets/css/map.css', array( 'heritagepools-parent-style' ), wp_get_theme()->get('Version') );
	wp_enqueue_style( 'magnific-popup', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.css', array( 'heritagepools-parent-style' ), wp_get_theme()->get('Version') );
	
	
	
	
	//Media boxes css
   // if(is_home() || is_search() || is_archive()){ 
	   wp_enqueue_style( 'magnific-popup', get_stylesheet_directory_uri() . '/assets/plugin/components/Magnific Popup/magnific-popup.css', array( 'heritagepools-parent-style' ), wp_get_theme()->get('Version') );
	   wp_enqueue_style( 'fancy-box', get_stylesheet_directory_uri() . '/assets/plugin/components/Fancybox/jquery.fancybox.min.css', array( 'heritagepools-parent-style' ), wp_get_theme()->get('Version') );
	   wp_enqueue_style( 'media-boxes', get_stylesheet_directory_uri() . '/assets/plugin/css/mediaBoxes.css', array( 'heritagepools-parent-style' ), wp_get_theme()->get('Version') );
   // }
	
	
	wp_enqueue_style( 'light-gallery', get_stylesheet_directory_uri() . '/assets/css/lightGallery/lightgallery.css', array( 'heritagepools-parent-style' ), wp_get_theme()->get('Version') );
	

    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/css/theme.less', array( 'heritagepools-parent-style' ), wp_get_theme()->get('Version') );

	
	
	
	wp_enqueue_script( 'boot-drop', get_stylesheet_directory_uri() . '/assets/js/bootstrap-dropdownhover.min.js',array('jquery'));
	
	
	//twenty twenty
	wp_enqueue_script( 'move', get_stylesheet_directory_uri() . '/assets/js/jquery.event.move.js',array('jquery'));
	wp_enqueue_script( 'twenty-twenty', get_stylesheet_directory_uri() . '/assets/js/jquery.twentytwenty.js',array('jquery'));
	
	
	
	wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js',array('jquery'));
	//wp_enqueue_script( 'aos-animation', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', array( 'jquery' ));
	wp_enqueue_script( 'aos-animation', get_stylesheet_directory_uri() . '/assets/js/aos.min.js',array('jquery'));
	
	
	
	
	//animations for blocks
	//wp_enqueue_script( 'scroll-reveal', 'https://unpkg.com/scrollreveal/dist/scrollreveal.min.js', array( 'jquery' ));
	wp_enqueue_script( 'scroll-reveal',  get_stylesheet_directory_uri() . '/assets/js/scrollreveal.min.js', array( 'jquery' ));
	
	
	//mapplic
	wp_enqueue_script( 'hammer', get_stylesheet_directory_uri() . '/assets/js/hammer.min.js',array('jquery'));
	wp_enqueue_script( 'mapplic', get_stylesheet_directory_uri() . '/assets/js/mapplic.js',array('jquery'));
	wp_enqueue_script( 'magnific-popup', get_stylesheet_directory_uri() . '/assets/js/magnific-popup.js',array('jquery'));
	
	
	//Venobox
	wp_enqueue_script( 'venobox', get_stylesheet_directory_uri() . '/assets/js/venobox.min.js',array('jquery') );
	
	//slick slider
	//wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/assets/slick/slick.min.js',array('jquery') );

	//Parallax
	wp_enqueue_script( 'parallax', get_stylesheet_directory_uri() . '/assets/js/parallax.min.js',array('jquery') );


	//load match height
	wp_enqueue_script( 'match-height', get_stylesheet_directory_uri() . '/assets/js/jquery.matchHeight.js',array('jquery'));
	
		
	
	
    ///Media Boxes
    
    //if(is_home() || is_search() || is_archive() ){

	    wp_enqueue_script( 'isotope', get_stylesheet_directory_uri() . '/assets/plugin/components/Isotope/jquery.isotope.min.js',array('jquery') );
		wp_enqueue_script( 'imagesLoaded', get_stylesheet_directory_uri() . '/assets/plugin/components/imagesLoaded/jquery.imagesLoaded.min.js',array('jquery') );
		wp_enqueue_script( 'Transit', get_stylesheet_directory_uri() . '/assets/plugin/components/Transit/jquery.transit.min.js',array('jquery') );
		wp_enqueue_script( 'jQuery-Easing', get_stylesheet_directory_uri() . '/assets/plugin/components/jQuery Easing/jquery.easing.js',array('jquery') );
		wp_enqueue_script( 'Waypoints', get_stylesheet_directory_uri() . '/assets/plugin/components/Waypoints/waypoints.min.js',array('jquery') );
		wp_enqueue_script( 'Modernizr', get_stylesheet_directory_uri() . '/assets/plugin/components/Modernizr/modernizr.custom.min.js',array('jquery') );
		wp_enqueue_script( 'Magnific-Popup', get_stylesheet_directory_uri() . '/assets/plugin/components/Magnific Popup/jquery.magnific-popup.min.js',array('jquery') );
		wp_enqueue_script( 'fancy-box', get_stylesheet_directory_uri() . '/assets/plugin/components/Fancybox/jquery.fancybox.min.js',array('jquery') );
		wp_enqueue_script( 'mediaBoxes-dropdown', get_stylesheet_directory_uri() . '/assets/plugin/js/jquery.mediaBoxes.dropdown.js',array('jquery') );
		wp_enqueue_script( 'mediaBoxes', get_stylesheet_directory_uri() . '/assets/plugin/js/jquery.mediaBoxes.js',array('jquery') );

		wp_enqueue_script( 'vide', get_stylesheet_directory_uri() . '/assets/js/jquery.vide.min.js',array('jquery') );
	//}	
	
	
	
	wp_enqueue_script( 'light-gallery', get_stylesheet_directory_uri() . '/assets/js/lightGallery/lightgallery-all.js',array('jquery'));
	

	wp_enqueue_script( 'my-script', get_stylesheet_directory_uri() . '/assets/js/script.js',array('jquery'));





}

add_action( 'wp_enqueue_scripts', 'heritagepools_child_enqueue_parent_style', 999 );



//SVG Support


function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//Menu registration////////////////////////////////////////////////

add_action( 'after_setup_theme', 'custom_menu_registration' );

function custom_menu_registration() {  
	register_nav_menus( array(
	  'main' => 'Main',
	  'utility' => 'Utility',
	  'location' => 'Location',
	  'footer-social' => 'Footer Social',
	  'footer-one' => 'Footer One',
	  'footer-two' => 'Footer Two',

	  
	) );
}


//Excerpt Custom Length///////////////////////////////////////////

function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);

      if (count($excerpt) >= $limit) {
          array_pop($excerpt);
          $excerpt = implode(" ", $excerpt) . '...';
      } else {
          $excerpt = implode(" ", $excerpt);
      }

      $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

      return $excerpt;
}

function content($limit) {
    $content = explode(' ', get_the_content(), $limit);

    if (count($content) >= $limit) {
        array_pop($content);
        $content = implode(" ", $content) . '...';
    } else {
        $content = implode(" ", $content);
    }

    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content); 
    $content = str_replace(']]>', ']]&gt;', $content);

    return $content;
}



//ACF MAP/////////////////////////////////////////////////////////////////////
function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyBrhzgVQVpKs3PB8hpgdYT8UZ-c_1jXDho');
}

add_action('acf/init', 'my_acf_init');


//Discontinued Liners Exclusion////////////////////////////////////////////////////////////////

function exclude_discontinued( $query ) {
  if( !is_admin() && $query->is_main_query() && is_post_type_archive( 'pool-liner' ) ) {
    $meta_query = $query->get('meta_query');
    $meta_query[] = array(
      'key' => 'discontinued',
      'value' => '0',
      'compare' => 'IN',
    );
    $query->set('meta_query', $meta_query);
  }
}
add_action( 'pre_get_posts', 'exclude_discontinued' );









?>