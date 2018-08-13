<?
class flex_content_builder{
	
	private $main_page_id = '';
	private $content = false;
	private $flex_content_data = false;
	private $flex_content_html = false;
	
	function __construct($id){
		if($id){
			$this->main_page_id = $id;
		} else {
			die('FATAL ERROR!');	
		}
		$this->flex_content_data = get_field('flexible_content_sections',$this->main_page_id);
		$this->build_flex_content();
	}
	
	public function get_section_content_html(){
		return $this->flex_content_html;
	}
	
	private function build_flex_content(){
		$html = '';	
		if($this->flex_content_data){
			foreach($this->flex_content_data as $section){

				$section_layout = $section['acf_fc_layout'];
				
				
				
				switch($section_layout){
					case 'flexible_content_section_call_to_action':
						$html .= $this->build_section_call_to_action($section);
						break;
					case 'flexible_content_section_fifty_fifty':
						$html .= $this->build_section_fifty_fifty($section);
						break;
					case 'flexible_content_section_carousel':
						$html .= $this->build_section_carousel($section);
						break;
					case 'flexible_content_section_anatomy':
						$html .= $this->build_section_anatomy($section);
						break;
					case 'flexible_content_section_link_bar':
						$html .= $this->build_section_link_bar($section);
						break;	
					case 'flexible_content_section_full_width_rabbits':
						$html .= $this->build_section_full_width_rabbits($section);
						break;
					case 'flexible_content_section_testimonials':
						$html .= $this->build_section_testimonials($section);
						break;
					case 'flexible_content_section_awards_and_accolades':
						$html .= $this->build_section_awards($section);
						break;		
					case 'flexible_content_section_projects_gallery':
						$html .= $this->build_section_project_gallery($section);
						break;
					case 'flexible_content_section_general_content':
						$html .= $this->build_section_general_content($section);
						break;
					case 'flexible_content_section_subnav':
						$html .= $this->build_section_subnav($section);
						break;
					case 'flexible_content_section_full_width_gallery':
						$html .= $this->build_section_full_width_gallery($section);
						break;
					case 'flexible_content_section_six_col_gallery':
						$html .= $this->build_section_six_col_gallery($section);
						break;
					case 'flexible_content_section_before_after_gallery':
						$html .= $this->build_section_before_after_gallery($section);
						break;		
					case 'flexible_content_section_the_heritage_difference':
						$html .= $this->build_section_the_heritage_difference($section);
						break;
					case 'flexible_content_section_pool_options_carousel':
						$html .= $this->build_section_pool_options_carousel($section);
						break;
					case 'flexible_content_section_faqs':
						$html .= $this->build_section_faqs($section);
						break;
					case 'flexible_content_section_heritage_form_block':
						$html .= $this->build_section_heritage_form_block($section);
						break;
					case 'flexible_content_section_heritage_google_map':
						$html .= $this->build_section_heritage_google_map($section);
						break;
					case 'flexible_content_section_icon_rabbits':
						$html .= $this->build_section_icon_rabbits($section);
						break;
					case 'flexible_content_section_image_rabbit':
						$html .= $this->build_section_image_rabbit($section);
						break;
					case 'flexible_content_section_pool_liners_carousel_block':
						$html .= $this->build_section_pool_liners($section);
						break;
					case 'flexible_content_section_concrete_finish_carousel_block':
						$html .= $this->build_section_concrete_finishes($section);
						break;
					case 'flexible_content_section_route_schedule_block':
						$html .= $this->build_section_route_schedule_block($section);
						break;
					case 'flexible_content_section_links_carousel':
						$html .= $this->build_section_links_carousel($section);
						break;	
					case 'flexible_content_section_rate_our_team':
						$html .= $this->build_section_rate_our_team($section);
						break;	
						
					default:
						break;
				}
			}
			
			$this->flex_content_html = $html;
		}
	}
	
	
	
	
	//BUILD call to action section///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_call_to_action($data){
		$html = '';
		
		if($data){
			
			
			$title = $data['flexible_content_section_call_to_action_title'];
			$subtitle = $data['flexible_content_section_call_to_action_sub_title'];
			$content = $data['flexible_content_section_call_to_action_content'];
			
			
			$cta_link_type = $data['flexible_content_section_call_to_action_link_type'];
			$cta_internal_link = $data['flexible_content_section_call_to_action_internal_link'];
			$cta_external_link = $data['flexible_content_section_call_to_action_external_link'];
			$cta_file_link = $data['flexible_content_section_call_to_action_file_link'];
			$cta_video_link = $data['flexible_content_section_call_to_action_video_link'];
			$cta_button_text = $data['flexible_content_section_call_to_action_button_text'];
			
			
			$cta_button_link = '';
			$cta_target = '';
			
			
			if($cta_link_type == 'internal'){
				$cta_button_link = $cta_internal_link;
			
			} elseif($cta_link_type == 'external'){
				$cta_button_link = $cta_external_link;
				$cta_target = 'target="_blank"';
			
			} elseif($cta_link_type == 'file'){
				$cta_button_link = $cta_file_link;
				$cta_target = 'target="_blank"';
			
			} elseif($cta_link_type == 'video'){
				$cta_button_link = $cta_video_link;
				$cta_target = '';
			}

			
			
			

			$background = get_stylesheet_directory_uri() . '/assets/media/background.jpg';

			$divider = get_stylesheet_directory_uri() . '/assets/media/divider-wbg.jpg';
			
			$html .= '
			
				<div class="heritage-cta-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								
								<h2>' . $title . '</h2>
								<span class="divider"><img class="img-responsive center-block blue-divider-icon" src="' . $divider . '" alt="divider blue" title="divider blue"><hr></span>
								<h3>' . $subtitle . '</h3>';
								
								if($content){
									$html .= '<p>' . $content . '</p>';
								}
								
								
							if($cta_link_type !== 'none'){
								
								if($cta_link_type == 'video'){
									$html .= '<a class="btn btn-default btn-orange-general venobox" data-autoplay="true" data-vbtype="video" href="' . $cta_button_link . '">' . $cta_button_text . '</a>';
								}else{
									$html .= '<a class="btn btn-default btn-orange-general" href="' . $cta_button_link . '" ' . $cta_target . '>' . $cta_button_text . '</a>';
								}
								
								
								
								
								
							}	
							
								
								
								
						$html .= '	</div>
						</div>
					</div>
				</div>
			
			
			';
			
			
			
			
			
						
			return $html;
		}
		
	}
	
	//END END END Call to Action///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

	
	//BUILD Fifty Fifty///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_fifty_fifty($data){
		$html = '';
		
		if($data){
			
			
			
			$layout = $data['flexible_content_section_fifty_fifty_layout'];
			
			$image_alignment = $data['flexible_content_section_fifty_fifty_image_alignment'];
			
			$theme = $data['flexible_content_section_fifty_fifty_theme_option'];
			
		
			
			$image = $data['flexible_content_section_fifty_fifty_image'];
			$image_mobile = $image['sizes']['media-box-thumb'];
			$image_url = $image['url'];
			//$image_alt = $image['alt'];
			
			
			
			$title = $data['flexible_content_section_fifty_fifty_Title'];
			$subtitle = $data['flexible_content_section_fifty_fifty_Sub_Title'];
			$content = $data['flexible_content_section_fifty_fifty_content'];
			$link_type = $data['flexible_content_section_fifty_fifty_link_type'];
			$internal_link = $data['flexible_content_section_fifty_fifty_internal_link'];
			$external_link = $data['flexible_content_section_fifty_fifty_external_link'];
			$file_link = $data['flexible_content_section_fifty_fifty_file_link'];
			$button_text = $data['flexible_content_section_fifty_fifty_button_text'];
			
			
			
			
			$image_alt = $title . ' - Heritage Pools, LLC';
			
			
			
			$button_link = '';
			$target = '';
			
			
			if($link_type == 'internal'){
				$button_link = $internal_link;
			
			} elseif($link_type == 'external'){
				$button_link = $external_link;
				$target = 'target="_blank"';
			
			} elseif($link_type == 'file'){
				$button_link = $file_link;
				$target = 'target="_blank"';
			}

			$background_texture = get_stylesheet_directory_uri() . '/assets/media/asfalt-dark.png';
		
			if(!$image){
				$image_url = get_stylesheet_directory_uri() . '/assets/media/about-header.jpg';
			}
			$spots = get_stylesheet_directory_uri() . '/assets/media/ColurDroplets-CMYK.png';
			
			$html .= '
			
				<div class="fifty-fifty-wrapper fooX">
						<div class="' . $layout . '">
							<div class="fifty-flex-item flex-content-wrapper ' . $theme . '" style="background-image: url(\'' . $background_texture . '\'); background-position: center center; background-size: repeat;">
								<div class="flex-content-inner text-center">
									<img src="' . $image_mobile . '" class="img-responsive ghost-image hidden-sm hidden-md hidden-lg" alt="' . $image_alt . '" title="' . $image_alt . '" />';
									
									if($title){
										$html .= '<h2>' . $title . '</h2>';
									}
									
									if($subtitle){
										$html .= '<h3>' . $subtitle . '</h3>';
									}
									if($title || $subtitle){
										$html .= '
										
										
										
										<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 105 16" style="enable-background:new 0 0 105 16;" xml:space="preserve">
										<path class="'. $theme .'" d="M0,8.8C21.6-4.1,33.7-0.4,50.9,4.7s33.2,7.5,54.1-2.2c-25.6,18-43,15.3-69.1,7.5C16.7,2.7,0,8.8,0,8.8z"/>
										</svg>

										
										
										
										
										
										
										
										
										
										';
									}
									
									$html .= '<p>' . $content . '</p>';
									
									
									
									if($link_type !== 'none'){
										$html .= '<a href="' . $button_link . '" ' . $target . ' class="btn btn-default btn-orange-general">' . $button_text . '</a>';
									}
									
									
									
									
								$html .= '</div>
							</div>
							
							<div class="fifty-flex-item" style="background-image: url(\'' . $image_url . '\'); background-position: center ' . $image_alignment . '; background-size: cover;">
								
							
							</div>
						
						</div>
				</div>';
			
			
						
			
		}	
			//data-parallax="scroll" data-image-src="' . $image_url . '"
			//style="background-image: url(\'' . $image_url . '\'); background-position: center ' . $image_alignment . '; background-size: cover;"
						
			return $html;
		
	}
	
	//END END END Fifty Fifty///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	


	//BUILD Carousel///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_carousel($data){
		$html = '';
		
		if($data){
			
			
			
			$carousel_slider = $data['carousel_slider'];
			
			/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			$flex_carousel_slides = get_field('flex_carousel_slides', $carousel_slider);
			
			if($flex_carousel_slides){
				
				
				$html .= '<div class="owl-slider owl-carousel owl-theme">';
				
				foreach($flex_carousel_slides as $slide){
					
					
					$image = $slide['flex_slide_image'];
					
					
					
					$image_alt = $image['alt'];
					if(!$image_alt){
						$image_alt = get_the_title();
						
						if($image_alt == 'Home'){
							$image_alt = 'Heritage Pools, LLC';
						}
						
						
					}
					
					$title = $slide['flex_slide_title'];
					$subtitle = $slide['flex_slide_subtitle'];
					$content = $slide['flex_slide_content'];
					$link_type = $slide['flex_slide_link'];
					$internal_link = $slide['flex_slide_interanal_link'];
					$external_link = $slide['flex_slide_external_link'];
					$file_link = $slide['flex_slide_file_link'];
					$linktext = $slide['flex_slide_link_text'];
					
					$tc = $slide['title_color'];
					$stc = $slide['subtitle_color'];
					
					$dc = $slide['flex_slide_divider_color'];
					
					$svg_color = 'style="fill: ' . $dc . ';"';
					$hr_color = 'style="border-bottom: 2px solid ' . $dc . ';"';
					
					$titleColor = 'style="color: ' . $tc . ';"';
					$subtitleColor = 'style="color: ' . $stc . ';"';
			
					
					//layout
					
					$layout = $slide['flex_slide_content_layout'];
					$text_align = $slide['flex_slide_text_alignment'];
					
					$add_bg = $slide['add_background_color'];
					$bg_color = $slide['flex_slide_background_color'];
					$opacity = $slide['flex_slide_background_opacity'];
					
					$text_shadow = '';
					$box_shadow = '';
					$add_text_shadow = $slide['add_text_shadow'];
					if($add_text_shadow){
						$text_shadow = 'text-shadow';
						$box_shadow = 'box-shadow';
					}
					
					$background = '';
					if($add_bg){
						$rgba = hex2rgba($bg_color, $opacity);
						
						$background = 'style="background-color: ' . $rgba . ';"';
					}
					
					
					
					$link = '';
					$target = '';
					
					
					if($link_type == 'internal'){
						$link = $internal_link;
					
					} elseif($link_type == 'external'){
						$link = $external_link;
						$target = 'target="_blank"';
					
					} elseif($link_type == 'file'){
						$link = $file_link;
						$target = 'target="_blank"';
					}
					
					
					$html .= '<div class="item" style="background-image: url(\'' . $image['url'] . '\'); background-position: center center; background-size: cover;">';
					
					$html .= ' <img src="' . $image['url'] . '" class="img-responsive hidden-sm hidden-md hidden-lg" alt="' . $image_alt . '" title="' . $image_alt . '">';
					
					$html .= ' 
					
					
					
					<div class="container">
						<div class="row">
							<div class="' . $layout . ' slide-col">
								<div class="flex-wrapper">
									<div class="flex-item ' . $text_align . '" ' . $background . '>
										<h2 class="' . $text_shadow . '" ' . $titleColor . '>' . $title . '</h2>
										
										
										<span class="divider">
										
										<span class="flex-hr"><hr ' . $hr_color . '></span>
										
										<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 145 15" style="enable-background:new 0 0 145 15;" xml:space="preserve">
		
										<path class="st0" ' . $svg_color . ' d="M107,2.8c-8.6-3.9-16.2-4.9-27.2,4.4c-4.9-1.1-9.2-2.9-12.5-4.4C58.6-1.1,51-2.1,40,7.3c0,0,8.1-3.5,16.8-0.6
											C45.2,10.4,34.1,6,27.2,2.8C18.6-1.1,11-2.1,0,7.3c0,0,10.8-4.7,20.9,1.2c4.8,3.3,24.9,13,39.4-0.3c0.2,0.1,0.4,0.2,0.6,0.3
											c4.8,3.3,24.8,13,39.3-0.2c0.1,0.1,0.3,0.1,0.4,0.2c5.4,3.7,29.9,15.4,44.4-6.1C130.5,12.7,115.6,6.8,107,2.8z M79.8,7.2
											c0.5-0.2,8.4-3.4,16.9-0.6C90.7,8.6,84.9,8.4,79.8,7.2z"/>
										</svg>
										
										<span class="flex-hr"><hr ' . $hr_color . '></span>
										
										</span>
										
										<h3 class="' . $text_shadow . '" ' . $subtitleColor . '>' . $subtitle . '</h3>
										<a href="' . $link . '" ' . $target . ' class="btn btn-default btn-orange-general">' . $linktext . '</a>
									</div>
			
								</div>
							</div>
						</div>
					</div>
			
					
					
					
					
					';
					
					
					$html .= '</div>'; //ends item
				}
				
				
				$html .= '</div>'; //ends owl-slider
				
			}

						
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		}	
						
			return $html;
		
	}
	
	//END END END Carousel///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	







	//BUILD Anatomy///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_anatomy($data){
		$html = '';
		
		if($data){
			
			$html .= '<div class="mapplic-outer-wrapper"><div id="mapplic"></div></div>';
			
		}	
						
		return $html;
		
	}
	
	//END END END Anatomy///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	



	//BUILD Link Bar///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_link_bar($data){
		$html = '';
		
		if($data){
			$background_texture = get_stylesheet_directory_uri() . '/assets/media/asfalt-dark.png';
			
			$title = $data['flexible_content_section_link_bar_title'];
			$link_type = $data['flexible_content_section_link_bar_link_type'];
			$internal = $data['link_bar_internal_link'];
			$external = $data['link_bar_external_link'];
			$file = $data['link_bar_file_link'];
			$link_text = $data['link_bar_button_text'];
			
			
			$button_link = '';
			$target = '';
			
			
			if($link_type == 'internal'){
				$button_link = $internal;
			
			} elseif($link_type == 'external'){
				$button_link = $external;
				$target = 'target="_blank"';
			
			} elseif($link_type == 'file'){
				$button_link = $file;
				$target = 'target="_blank"';
			}

			
			
			
			
			
			
			
			$html .= '
			
			<div class="link-bar-wrapper text-center" style="background-image: url(\'' . $background_texture . '\'); background-position: center center; background-size: repeat;">
			
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>' . $title . '</h3>
							<a href="' . $button_link . '" ' . $target . ' class="btn btn-default btn-orange-general">' . $link_text . '</a>
						
						</div>
					</div>
				</div>
			
			
			</div>';
			
		}	
						
		return $html;
		
	}
	
	//END END END Link Bar///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	




	//BUILD Full Width Rabbits///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_full_width_rabbits($data){
		$html = '';
		
		if($data){
			
			$image_url = get_stylesheet_directory_uri() . '/assets/media/new_construction.jpg';
			
			$columns = $data['full_width_rabbit_columns'];
			$rabbits = $data['full_width_rabbits'];
			
			
			$html .= '<div class="full-width-rabbits-wrapper">';
			
			foreach($rabbits as $rabbit){
				
				
				$overlay = $rabbit['full_width_rabbit_overlay_color'];
				$image = $rabbit['full_width_rabbit_image'];
				$text = $rabbit['full_width_rabbit_text'];
				$link_type = $rabbit['full_width_rabbit_link_type'];
				$internal = $rabbit['full_width_rabbit_internal_link'];
				$external = $rabbit['full_width_rabbit_external_link'];
				$file = $rabbit['full_width_rabbit_file_link'];
				$custom = $rabbit['full_width_rabbit_custom_link'];
				
				
				
				
				$button_link = '';
				$target = '';
				
				
				if($link_type == 'internal'){
					$button_link = $internal;
				
				} elseif($link_type == 'external'){
					$button_link = $external;
					$target = 'target="_blank"';
				
				} elseif($link_type == 'file'){
					$button_link = $file;
					$target = 'target="_blank"';
					
				} elseif($link_type == 'custom'){
					$button_link = $custom;
					$target = '';
				}
				
				
				
				
				
				$html .= '
				<div class="' . $columns . '" style="background-image: url(\'' . $image . '\'); background-position: center center; background-size: cover;">
					<a href="' . $button_link . '" ' . $target . ' class="' . $overlay . '">
						<div class="inner-flex-content">
							<h4>' . $text . '</h4>
						</div>
					</a>
				</div>
				';
				
				
			
			
			}
			
			$html .= '</div>';
			
			
		}	
						
		return $html;
		
	}
	
	//END END END Full Width Rabbits///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	


	//BUILD Testimonials///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_testimonials($data){
		$html = '';
		
		if($data){
			
			$testimonials = $data['select_testimonials'];
			
			
			
			$html .= '
			
			<div id="testimonial-slider" class="testimonials-outer-wrapper">
				<div class="container">
					<h3>Customer Testimonials</h3>
					<p class="lead">The most important thing we build are relationships</p><hr>
				</div>
				';
				
				
				
				if($testimonials){
					$html .= '<div class="owl-carousel testimonial-carousel">';
					
					
					foreach($testimonials as $testimonial){
						
						$content = get_field('short_version', $testimonial);
						$title = get_the_title($testimonial);
						setup_postdata($testimonial);
						
						//Testimonials Limit ACF

						$text = get_field('short_version', $testimonial); //Replace 'your_field_name'
						if ( '' != $text ) {
							$text = strip_shortcodes( $text );
							$text = apply_filters('the_content', $text);
							$text = str_replace(']]&gt;', ']]&gt;', $text);
							$excerpt_length = 25; // 20 words
							$excerpt_more = apply_filters('excerpt_more', '' . '...');
							$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
						}
						
						$content = apply_filters('the_excerpt', $text);
						
						$full = get_the_content();
						
						
						$html .= '
						<div class="testimonial-content container">
							<p>' . $content . '</p>
							<h4>' . $title . '</h4>';
							
						if($full){
							
							$html .= '
								<a class="venobox btn btn-orange-general" data-gall="myGallery" data-vbtype="inline" href="#inline-content-' . $testimonial . '">Full Testimonial</a>
								
								<div id="inline-content-' . $testimonial . '" style="display:none;">
								    <div class="full-testimonial text-center">
								    <p>' . $full . '</p>
								    <p class="lead">' . $title . '</p>
								    
								    </div>
								</div>
							';
						}
							
							
						$html .= '	
						</div>';
						
						
					}
					
					wp_reset_postdata();
					
					$html .= '</div>';
				}
				
				

				
				
			
			$html .= '</div>';
			
		}	
						
		return $html;
		
	}
	
	//END END END Testimonials///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

	//BUILD Awards///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_awards($data){
		$html = '';
		
		if($data){
		
		$html .= '<div id="awards-slider" class="awards-outer-wrapper container">';
		
		
		$html .= '<h3>Awards and Accolades</h4>';
		
		  $awards_query = new WP_Query( array(
		  'post_type' => 'award',
		  'posts_per_page' => -1,  
		   )); 

	
		  	if ( $awards_query->have_posts() ) { 
			  	
			  	
			  	$html .= '<div class="owl-carousel awards-carousel">';
			   
				  
				while ( $awards_query->have_posts() ) : $awards_query->the_post();
				
					$award_logo = get_field('award_logo');
		
					$html .= '<div class="slide-item"><div class="flex-logos"><img src="' . $award_logo['url'] . '" class="img-responsive center-block" alt="' . get_the_title() . '" title="' . get_the_title() . '"></div></div>';
		
		
				endwhile; 
				
				$html .= '</div>';
				
			}	
	
			
		$html .= '</div>'; //ends awards outer wrapper	
			
			
		}	
						
		return $html;
		
	}
	
	//END END END Awards///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	
	
	
	//BUILD Project Gallery///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_project_gallery($data){
		$html = '';
		
		//<div class="container text-center"><a href="' . $link . '" class="btn btn-default btn-orange-general project-link">View Pool Details</a></div>
		
		if($data){
			
			$projects = $data['flexible_content_section_projects_gallery_projects'];
			
			if($projects){
				$html .= '<div class="owl-carousel project-slider">';
				
				foreach($projects as $project){
					
					$image = get_field('project_featured_image', $project);
					$link = get_permalink($project);
					//$title = get_the_title($project);
					
					$html .= '<div class="project-image" style="background-image: url(\'' . $image["url"] . '\'); background-position: center center; background-size: cover; padding-top: 40%;">
					
					
					<div class="container text-center"><a href="' . get_site_url() . '/our-pools/completed-projects" class="btn btn-default btn-orange-general project-link">View Completed Projects</a></div>
					
					
					</div>';
					
					
				}
				
				
				
				$html .= '</div>';
			}

			
		}	
						
		return $html;
		
	}
	
	//END END END  Project Gallery///////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

	


	//BUILD General content///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_general_content($data){
		$html = '';
		if($data){

			
			$alignment = $data['flexible_content_section_general_content_alignment'];
			$content = $data['flexible_content_section_general_content_content'];
			$background_color = $data['flexible_content_section_general_content_background_color'];
			
			if($background_color !== '#fffffff' && $background_color){
				$text_color = 'color: #fff;';
			}
			
			if($background_color){
				$background = get_stylesheet_directory_uri() . '/assets/media/background_paint.png';
				$add_color = 'style="background-color:' . $background_color . '; ' . $text_color . ' background: ' . $background_color . ' url(\'' . $background . '\') center repeat;"';
				
				
			}
	
			
			if($content){
				
				$html .= '
				
				<div class="flex-general-content-wrapper" ' . $add_color . '>
					<div class="container">
						<div class="row">
							<div class="' . $alignment . '">
								
							' . $content . '
				
							</div>
						
						</div>
					</div>
				</div>
				
				
				
				';
				
			}
								
			return $html;
		}
	}
	
	//END END END General Content///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////






	//BUILD Subnav///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_subnav($data){
		$html = '';
		
		if($data){
			
			$subnav = $data['sub_navigation'];
			
			
			$html .= '<div class="subnav-outer-wrapper text-center hidden-xs"><div class="container center-block">';
			
			
			$html .= wp_nav_menu(
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
			
			
			
			
			$html .= '<hr></div></div>';
			
		}	
						
		return $html;
		
	}
	
	//END END END subnav///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	



	//BUILD Full Width Gallery///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_full_width_gallery($data){
		$html = '';
		
		if($data){
			
			$images = $data['full_width_images'];
			
			$title = $data['full_width_gallery_title'];
			
			$alt = $images['alt'];
			if(!$alt) {
				$alt = $title;
			}
			
			
			$html .= '<div class="full-width-carousel-title text-center"><h3>' . $title . '</h3></div>';
			
			$html .= '<div class="owl-carousel full-width-carousel">';
			
			foreach($images as $image){
				
				$html .= '<div class="item" style="background-image: url(\'' . $image['url'] . '\'); background-position: center center; background-size: cover; padding-top: 40%;">
				
				<img class="img-responsive hidden" src="' . $image['url'] . '" alt="' . $alt . '" title="' . $alt . '">
				
				</div>';
				//$html .= '<img class="img-responsive" src="' . $image['url'] . '">';
				
				
			}
			
			
			
			
			
			$html .= '</div>';
			
		}	
						
		return $html;
		
	}
	
	//END END END Full Width Gallery///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	


	//BUILD Six Col Gallery///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_six_col_gallery($data){
		$html = '';
		
		if($data){
			
			$images = $data['six_col_images'];
			$display_thumb_alt = $data['display_alt_text_on_thumbnails'];
			
			$id = get_the_id();
			
			
			
			
			$html .= '<div class="owl-carousel six-col-carousel">';
			
			foreach($images as $image){
				
				
				$alt = $image['alt'];
				$description = $image['description'];
				
				if($display_thumb_alt){
					$thumb_alt = '<div class="text-wrapper">' . $alt . '</div>';
				}else{
					$thumb_alt = '';
				}
				
				if($alt && $description) {
					$alt .= ': ' . $description;
				}
				
				
				
				if(!$alt) {
					$alt = wp_title( '|', false, 'right' );
				}
				
				$thumbnail = $image['sizes']['thumbnail'];
				
				
				$html .= '
				<a href="' . $image['url'] . '">
				<div class="item" style="background-image: url(\'' . $image['sizes']['media-box-thumb'] . '\'); background-position: center center; background-size: cover; padding-top: 80%;">
				
				<img class="img-responsive hidden" src="' . $thumbnail . '" alt="' . $alt . '" title="' . $alt . '"> ' . $thumb_alt . '
					
				</div>
				
				</a>
				
				
				';
				
				
			}
			
			$html .= '</div>';
			
		}	
						
		return $html;
		
	}
	
	//END END END Six Col Gallery///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

	
	
	//BUILD Before After Gallery///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




	private function build_section_before_after_gallery($data){
		$html = '';
		
		
		
		if($data){
			
			$title = $data['before_after_gallery_title'];
			$gallery = $data['before_after_gallery'];
			
			
			$gallery_title = get_the_title($gallery);
			
			if($gallery){
				
				if($title){
					$html .= '<div class="container before-after-title"><div class="before-after-title-wrapper "><h3>' . $title . '</h3></div></div>';
				}
				
				
				$html .= '<div class="before-after-wrapper container">';

				$html .= '<div id="carousel-' . $gallery . '" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">';
				
				$html .= '<div class="carousel-inner" role="listbox">';
				
				$before_after_images = get_field('before_after_images', $gallery);
				
				$i = 1;
				$active = '';
				
				
				
				foreach($before_after_images as $before_after_image){
					
					if($i == 1) {
						$active = 'active';
					}
					
					
					
					
					$before = $before_after_image['before_image'];
					//$before_url = $before['sizes']['full-owl-gallery'];
					$before_url = $before['url'];
					
					$after = $before_after_image['after_image'];
					//$after_url = $after['sizes']['full-owl-gallery'];
					$after_url = $after['url'];
					
					
					$html .= '<div class="item ' . $active . '">';

					$html .= '<div class="twentytwenty-container">';
						$html .= '<img src="' . $before_url . '" alt="Pool - '. $gallery_title . ' - Before" title="Pool - '. $gallery_title . ' - Before" class="img-responsive"/>';
						$html .= '<img src="' . $after_url . '"  alt="Pool - '. $gallery_title . ' - After" title="Pool - '. $gallery_title . ' - After" class="img-responsive"/>';
					$html .= '</div>';
					
					
				    $html .= '</div>';
				    
				    $i++;
				    $active = '';
					
				}
				
				$html .= '</div>'; //ends carousel-inner
				$html .= '  <a class="left carousel-control" href="#carousel-' . $gallery . '" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-' . $gallery . '" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>';
				$html .= '</div>'; //ends carousel
				$html .= '</div>'; //ends carousel
			}

			
		}	
						
		return $html;
		
	}
	
	
	
	//END END END  Before After Gallery///////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

	

	//BUILD The Heritage Difference///////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_the_heritage_difference($data){
		$html = '';
		
		if($data){
			
			
			
			$html .= '<div class="heritage-difference-wrapper">';
			
			$html .= '
			
			<div class="item grass" style="background-image: url(\'' . get_stylesheet_directory_uri() . '/assets/media/aboveground.jpg\'); background-position: top center; background-size: cover; padding-top: 30%;"></div>
			
			<div class="black-wrapper">
			<div class="text-center content">
				<div class="container container-header">
						
						<h2 class="page-title">CAVEAT EMPTOR</h2>
						
						
						
						<span class="divider">
														
							<span class="flex-hr white"><hr></span>
														
														<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 145 15" style="enable-background:new 0 0 145 15;" xml:space="preserve">
						
														<path class="st0 white" d="M107,2.8c-8.6-3.9-16.2-4.9-27.2,4.4c-4.9-1.1-9.2-2.9-12.5-4.4C58.6-1.1,51-2.1,40,7.3c0,0,8.1-3.5,16.8-0.6
															C45.2,10.4,34.1,6,27.2,2.8C18.6-1.1,11-2.1,0,7.3c0,0,10.8-4.7,20.9,1.2c4.8,3.3,24.9,13,39.4-0.3c0.2,0.1,0.4,0.2,0.6,0.3
															c4.8,3.3,24.8,13,39.3-0.2c0.1,0.1,0.3,0.1,0.4,0.2c5.4,3.7,29.9,15.4,44.4-6.1C130.5,12.7,115.6,6.8,107,2.8z M79.8,7.2
															c0.5-0.2,8.4-3.4,16.9-0.6C90.7,8.6,84.9,8.4,79.8,7.2z"></path>
														</svg>
														
							<span class="flex-hr white"><hr></span>
														
						</span>
					
						<h3>(Latin - Let the buyer beware)</h3>
						
						<p class="lead">As you see below here are some pictures of pools in CHARLESTON, SC that lack the very important structural features to withstand Charleston\'s environments. These pools are missing footings, braces, and even structural walls to support the pool.</p>
					
				</div>			
			</div>';
			
			
			
			$images = $data['bad_images'];
			$id = get_the_id();
			
			
			
			if($images){
			
				$html .= '<div class="owl-carousel six-col-carousel">';
				
				foreach($images as $image){
					
					
					$alt = $image['alt'];
					$image_url = $image['url'];
					$thumb_url = $image['sizes']['media-box-thumb'];
					
					if(!$alt) {
						$alt = wp_title( '|', false, 'right' );
					}
					
					
					$html .= '
					
					<a href="' . $image_url . '">
						<div class="item" style="background-image: url(\'' . $thumb_url . '\'); background-position: center center; background-size: cover; padding-top: 80%;">
						
							<img class="img-responsive hidden " src="' . $image_url . '" alt="' . $alt . '" title="' . $alt . '"/>
						</div>
					
					</a>
					
					';
					

					
				}
				$html .= '</div>';

			}

			
			
			
			$html .= '</div><div class="item dirt" style="background-image: url(\'' . get_stylesheet_directory_uri() . '/assets/media/belowground.jpg\'); background-position: top center; background-size: cover; padding-top: 10%;"></div>';
			
			
						
			
			$html .= '</div>';
			
		}	
						
		return $html;
		
	}
	
	//END END END The Heritage Difference//////////////////////////////////////////		
	
	
	
	
	
	
	
	
	
	
	



	
	
	
	
	

	//Build icon rabbits///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_icon_rabbits($data){
		
		$html = '';
		
		if($data){
			
			
			$columns = $data['flexible_content_section_icon_rabbits_columns'];
			$rabbits = $data['flexible_content_section_icon_rabbits_repeater'];
			
			
			$html .= '
			
			
			<div class="rabbits-wrapper">
				<div class="container">
					<div class="row">';
					
					foreach($rabbits as $rabbit){
						
						$icon = $rabbit['rabbit_icon'];
						$title = $rabbit['rabbit_title'];
						$text = $rabbit['rabbit_text'];
												
						$link_type = $rabbit['rabbit_link_type'];
						
						
						$internal_link = $rabbit['rabbit_internal_link'];
						
						$external_link = $rabbit['rabbit_external_link'];
						
						$file_link = $rabbit['rabbit_file_link'];
						
						
						$link = '';
						$target = '';
						
						
						if($link_type == 'internal'){
							$link = $internal_link;
						
						} elseif($link_type == 'external'){
							$link = $external_link;
							$target = 'target="_blank"';
						
						} elseif($link_type == 'file'){
							$link = $file_link;
							$target = 'target="_blank"';
						}

						
						
						
						
						$link_text = $rabbit['rabbit_link_text'];
						
						
						$html .= '
						
						
								<div class="' . $columns . '">
									
									<img src="' . $icon['url'] . '" class="img-responsive center-block" alt="' . $title . '">
									
									<h2>' . $title . '</h2>
									
									<p>' . $text . '</p>
									
									<a href="' . $link . '" ' . $target . '>' . $link_text . ' <i class="fa fa-angle-right"></i></a>
								</div>
						
						
						';
						
						
						
						
						
						
					}

						
			$html .= '			
					
					</div>
				</div>
				
				
			</div>
			
			
			';
			
			
			
		}
				
		return $html;	
		
		
	}
	//End icon rabbits///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	

	
	
	
	
	//BUILD Image Rabbit///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_image_rabbit($data){
		$html = '';
		
		if($data){
			
			
			
			$section_title = $data['flexible_content_section_image_rabbit_section_title'];
			$section_subtitle = $data['flexible_content_section_image_rabbit_section_sub_title'];
			
			$columns = $data['flexible_content_section_image_rabbit_columns'];
			
			
			$rabbits = $data['flexible_content_section_image_rabbit_repeater'];
			
			
			$html .= '<div class="image-rabbit-wrapper text-center">';
				
			if($section_title || $section_subtitle) {
				
				$html .= '<div class="container">
						<div class="row">
							<div class="col-md-12">';
							
							if($section_title){
								$html .= '<h2>' . $section_title . '</h2>';
							}
							
							if($section_subtitle){
								$html .= '<h3>' . $section_subtitle . '</h3>';
							}
								
								
							$html .= '	<hr>
							</div>
						</div>
					</div>';
				
			}
					
				
			$html .= '<div class="container">
						<div class="row">';
			
			foreach($rabbits as $rabbit){
				
				
				$rabbit_image = $rabbit['flexible_content_section_image_rabbit_image'];
				$rabbit_image_size = $rabbit_image['sizes']['media-box-thumb'];
				
				$rabbit_title = $rabbit['flexible_content_section_image_rabbit_title'];
				$rabbit_text = $rabbit['flexible_content_section_image_rabbit_text'];
				$rabbit_link_type = $rabbit['flexible_content_section_image_rabbit_link_type'];
				$rabbit_internal_link = $rabbit['flexible_content_section_image_rabbit_internal_link'];
				$rabbit_external_link = $rabbit['flexible_content_section_image_rabbit_internal_link'];
				$rabbit_file_link = $rabbit['flexible_content_section_image_rabbit_file_link'];
				$rabbit_button_text = $rabbit['flexible_content_section_image_rabbit_button_text'];
				
				
				$rabbit_button_link = '';
				$rabbit_target = '';
				
				
				if($rabbit_link_type == 'internal'){
					$rabbit_button_link = $rabbit_internal_link;
				
				} elseif($rabbit_link_type == 'external'){
					$rabbit_button_link = $rabbit_external_link;
					$rabbit_target = 'target="_blank"';
				
				} elseif($rabbit_link_type == 'file'){
					$rabbit_button_link = $rabbit_file_link;
					$rabbit_target = 'target="_blank"';
				}
				

						
				$html .= '
				
				
							<div class="' . $columns . '">
								<div class="panel panel-default">
								
								  <div class="panel-body">
								  
								  <div style="background-image: url(\'' . $rabbit_image_size . '\'); background-position: center center; background-size: cover; padding-top: 60%;">
								  
								  	<img src="' . $rabbit_image_size . '" alt="' . $rabbit_title . '" title="' . $rabbit_title . '" class="hidden"/>
								  
								  </div>
								  
								  <div class="match-height">
								  	
								    <h3>' . $rabbit_title . '</h3>';
								    
								    if($rabbit_text){
									    $html .= '<p>' . $rabbit_text . '</p>';
								    }
								    
								   $html .= ' </div>'; //ends match height
								    
								    if($rabbit_link_type !== 'none'){
									    $html .= '<a href="' . $rabbit_button_link . '" ' . $rabbit_target . ' class="btn btn-default btn-block btn-orange-general">' . $rabbit_button_text . '</a>';
								    }
								    
									
								  
								 $html .= ' </div>
								  
								</div>
							</div>';
			
			
			}			
			
			$html .= '	</div>
					</div>
				
				
				</div>';
		}	
			
			
						
			return $html;
		
	}
/////END IMAGE RABBIT////////////////////
	
	
//BUILD Pool Options Carousel///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_pool_options_carousel($data){
		$html = '';
		
		if($data){
			
			$pool_options = $data['flexible_content_section_pool_options'];
			
			
			$html .= '<div class="owl-carousel pool-options-carousel">';
			
			$i = 1;
			
			$bg_class = '';
			foreach($pool_options as $pool_option){
				if($i == 1){
					$bg_class = 'bg-blue';
				}elseif($i == 2){
					$bg_class = 'bg-orange';
				}elseif($i == 3){
					$bg_class = 'bg-lightblue';
				}
				
				setup_postdata($pool_option);
				$pool_option_image = get_field('pool_option_image',$pool_option);
				$image_url = $pool_option_image['url'];
				
				$html .= '
				<div style="background-image: url(\'' . $image_url . '\'); background-position: center center; background-size: cover; padding-top: 80%;" class="pool-option-item-wrapper-outer">
				
				<a class="' . $bg_class . '" href="' . get_the_permalink($pool_option) . '"><div class="pool-option-item-wrapper">
				
				<div class="pool-option-title"><h4>'. get_the_title($pool_option) .'</h4></div>
				<div class="pool-option-text hidden"><p>'. get_the_content() .'</p></div>
				</div></a>
				
				
				
				</div>';
				
				$i++;
				if($i == 4){
					$i = 1;
				}
					
				
			}
			wp_reset_postdata();
			
			$html .= '</div>';
			$html .= '<div class="container pool-options-cta text-center"><a href="' . get_site_url() . '/our-pools/pool-options" class="btn btn-default btn-orange-general">All Pool Options</a></div>';
			
		}	
						
		return $html;
		
	}
	
//END END END Pool Options Carousel///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	


	//BUILD FAQs///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_faqs($data){
		$html = '';
		
		if($data){
			
			
			$faqs = $data['flexible_content_section_faqs_items'];
			
			
			$html .= '
			
			
			<div class="faq-outer-wrapper">
			
			<div class="container">
			
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';
			$i = 1;
			foreach($faqs as $faq){
				
				$question = get_the_title($faq);
				$answer = get_the_content($faq);
				
				$content_post = get_post($faq);
				$content = $content_post->post_content;
				$content = apply_filters('the_content', $content);
				$content = str_replace(']]>', ']]&gt;', $content);
				
				
				if($i == 1){
					$expanded = 'true';
					$collapsed = '';
					$in = 'in';
				}else {
					$expanded = 'false';
					$in = '';
					$collapsed = 'collapsed';
				}
				
				
				$html .= '
				
				
				<div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="heading-' . $faq . '">
			    
			      <h4 class="panel-title">
			        <a class="' . $collapsed . '" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-' . $faq . '" aria-expanded="' . $expanded . '" aria-controls="collapse-' . $faq . '">
			          '. $question .'
			        </a>
			      </h4>
			      
			    </div>
			    
			    <div id="collapse-' . $faq . '" class="panel-collapse collapse '. $in . '" role="tabpanel" aria-labelledby="heading-' . $faq . '">
			      <div class="panel-body">
				  	' . $content . '
			      </div>
			    </div>
			    
			  </div>
				
				
				
				
				';
				
				$i++;
				
				
			}
			
			  
			  
			  
			  
			$html .= '</div>
			
			
			</div>
			
			</div>'; //ends faq outer
			
		}	
						
		return $html;
		
	}
	
	//END END END Build FAQ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	


	//BUILD Heritage Form Block///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_heritage_form_block($data){
		$html = '';
		
		if($data){
			
			$form = $data['flexible_content_section_heritage_forms'];
			
			$html .=  '<div class="heritage-form-block-wrapper"><div class="container">';
			
			switch ($form) {
			    case "general":
			        $html .=  '

								<div class="cognito">
								<script src="https://services.cognitoforms.com/s/w_Vlde1xr0KhvJs1sLO5mQ"></script>
								<script>Cognito.load("forms", { id: "1", entry: {"FormLocation":"' . get_permalink() . '"} });</script>
								</div>
			        ';
			        break;
			    case "consult":
			    	$html .= '

								
								<div class="cognito">
								<script src="https://services.cognitoforms.com/s/w_Vlde1xr0KhvJs1sLO5mQ"></script>
								<script>Cognito.load("forms", { id: "2", entry: {"FormLocation":"' . get_permalink() . '"} });</script>
								</div>
					';
					break;
				case "request":
			    	$html .= '
			    				<div class="cognito">
									<script src="https://services.cognitoforms.com/s/w_Vlde1xr0KhvJs1sLO5mQ"></script>
									<script>Cognito.load("forms", { id: "3" });</script>
									</div>
					';
					break;
				case "planning_guide_q_a":
				
				
			    	$html .= '
			    				<div class="cognito">
									<script src="https://services.cognitoforms.com/s/w_Vlde1xr0KhvJs1sLO5mQ"></script>
									<script>Cognito.load("forms", { id: "8" });</script>
									</div>
					';
					break;
			    default:
			        $html .=  '
						        <div class="cognito">
								<script src="https://services.cognitoforms.com/s/w_Vlde1xr0KhvJs1sLO5mQ"></script>
								<script>Cognito.load("forms", { id: "1", entry: {"FormLocation":"' . get_permalink() . '"} });</script>
								</div>
			        ';
			}
			
			
			$html .=  '</div></div>';

			
			
		}	
						
		return $html;
		
	}
	
	//END END END Heritage Form Block///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

	//BUILD Heritage Google Map///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_heritage_google_map($data){
		$html = '';
		
		if($data){
			
			$map = $data['flexible_content_section_map'];
			
			$html .=  '
			
			<div class="acf-map">
				<div class="marker" data-lat="' . $map['lat'] . '" data-lng="' . $map['lng'] . '"></div>
			</div>
			
			
			';
			
			
			
		}	
						
		return $html;
		
	}
	
	//END END END Heritage Google Map///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	



//BUILD Pool Liners Carousel///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_pool_liners($data){
		$html = '';
		
		if($data){
			
			$pool_liners = $data['flexible_content_section_pool_liners'];
			
			
			$html .= '<div class="pool-liner-carousel-wrapper text-center">';
			
			$html .= '<div class="owl-carousel pool-liner-carousel">';
			
			
			
			foreach($pool_liners as $pool_liner){
				
				
				$pool_liner_image = get_the_post_thumbnail_url($pool_liner);
				
				$term = get_the_terms( $pool_liner, 'liner-type' );

				$term_name = $term[0]->name;
				$html .= '
				<a href="' . $pool_liner_image . '">
				
				<div class="text-center">
				
				<img src="' . $pool_liner_image . '" class="img-responsive img-circle" alt="' . get_the_title($pool_liner) . '" title="' . get_the_title($pool_liner) . '"/>
				<h4>' . get_the_title($pool_liner) . ' </h4>
				<p>' . $term_name . '</p>
				
				</div>
				</a>';
				
					
				
			}

			
			
			
			
			$html .= '</div>';
			$html .= '<a href="' . get_site_url() . '/pool-liners" class="btn btn-orange-general">View all Pool Liners</a>';
			
			$html .= '</div>';
			
			
		}	
						
		return $html;
		
	}
	
//END END END Pool Liners Carousel///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	






//BUILD concrete finish Carousel///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_concrete_finishes($data){
		$html = '';
		
		if($data){
			
			$pool_liners = $data['flexible_content_section_concrete_finishes'];
			
			
			$html .= '<div class="pool-liner-carousel-wrapper text-center">';
			
			$html .= '<div class="owl-carousel pool-liner-carousel">';
			
			
			
			foreach($pool_liners as $pool_liner){
				
				
				$pool_liner_image = get_the_post_thumbnail_url($pool_liner);
				
				$term = get_the_terms( $pool_liner, 'finish-type' );

				$term_name = $term[0]->name;
				$html .= '
				
				<a href="' . $pool_liner_image . '">
				<div class="text-center">
				
				<img src="' . $pool_liner_image . '" class="img-responsive img-circle" alt="' . get_the_title($pool_liner) . '" title="' . get_the_title($pool_liner) . '"/>
				<h4>' . get_the_title($pool_liner) . ' </h4>
				<p>' . $term_name . '</p>
				
				</div>
				</a>';
				
					
				
			}

			
			
			
			
			$html .= '</div>';
			$html .= '<a href="' . get_site_url() . '/concrete-finishes" class="btn btn-orange-general">View all Finishes</a>';
			
			$html .= '</div>';
			
			
		}	
						
		return $html;
		
	}
	
//END END END concrete finish Carousel///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	




	//BUILD Route Schedule///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_route_schedule_block($data){
		$html = '';
		
		if($data){
			

			
			
			
			$html .= '
			
			<div class="route-title-wrapper text-center">
			
			<h2>Weekly Route Schedule</h2>
			</div>
			
			
			<div class="owl-carousel route-schedule-carousel">
			
				<div class="item">
					<div class="route-tile text-center">
						<div class="day">
							<h3>M</h3>
							<h4>Monday</h4>
						</div>
						<div class="locations">
						<p>Summerville</p>
						<p>Ladson</p>
						<p>West Ashley</p>
						<p>Mount Pleasant</p>
						<p class="transparent">location</p>
						<p class="transparent">location</p>
						<p class="transparent">location</p>
						</div>
					</div>
				</div>
				
				<div class="item">
					<div class="route-tile text-center">
						<div class="day">
							<h3>T</h3>
							<h4>Tuesday</h4>
						</div>
						<div class="locations">
						<p>Summerville</p>
						<p>Goose Creek</p>
						<p>Mount Pleasant</p>
						<p>North Charleston</p>
						<p>West Ashley</p>
						<p>Hanahan</p>
						<p class="transparent">location</p>
						</div>
					</div>
				</div>
				
				<div class="item">
					<div class="route-tile text-center">
						<div class="day">
							<h3>W</h3>
							<h4>Wednesday</h4>
						</div>
						<div class="locations">
						<p>Isle of Palms</p>
						<p>Sullivan\'s Island</p>
						<p>Kiawah Island</p>
						<p>Seabrook Island</p>
						<p>Ladson</p>
						<p>Hanahan</p>
						<p>Summerville</p>
						</div>
					</div>
				</div>
				
				<div class="item">
					<div class="route-tile text-center">
						<div class="day">
							<h3>T</h3>
							<h4>Thursday</h4>
						</div>
						<div class="locations">
						<p>Mount Pleasant</p>
						<p>North Charleston</p>
						<p>Hollywood</p>
						<p>Meggett</p>
						<p>Johns Island</p>
						<p>West Ashley</p>
						<p class="transparent">location</p>
						</div>
					</div>
				</div>
				
				<div class="item">
					<div class="route-tile text-center">
						<div class="day">
							<h3>F</h3>
							<h4>Friday</h4>
						</div>
						<div class="locations">
						<p>James Island</p>
						<p>Folly Beach</p>
						<p>Downtown</p>
						<p>Daniel Island</p>
						<p class="transparent">location</p>
						<p class="transparent">location</p>
						<p class="transparent">location</p>
						</div>
					</div>
				</div>
				
				<div class="item">
					<div class="route-tile text-center">
						<div class="day">
							<h3>S</h3>
							<h4>Saturday</h4>
						</div>
						<div class="locations">
						<p>Isle of Palms</p>
						<p>Sullivan\'s Island</p>
						<p>Seabrook Island</p>
						<p>Kiawah Island</p>
						<p>Johns Island</p>
						<p class="transparent">location</p>
						<p class="transparent">location</p>
						</div>
					</div>
				</div>
				
				<div class="item">
					<div class="route-tile text-center">
						<div class="day">
							<h3>S</h3>
							<h4>Sunday</h4>
						</div>
						<div class="locations">
						<p>Closed</p>
						<p class="transparent">location</p>
						<p class="transparent">location</p>
						<p class="transparent">location</p>
						<p class="transparent">location</p>
						<p class="transparent">location</p>
						<p class="transparent">location</p>

						</div>
					</div>
				</div>
				
				
				
				
				</div>';
			
		}	
						
		return $html;
		
	}
	
	//END END END Route Schedule///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	


//BUILD Links Carousel///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_links_carousel($data){
		$html = '';
		
		if($data){
			
			$pool_options = $data['flexible_content_section_page_links'];
			
			
			$html .= '<div class="owl-carousel pool-options-carousel">';
			
			$i = 1;
			
			$bg_class = '';
			foreach($pool_options as $pool_option){
				if($i == 1){
					$bg_class = 'bg-blue';
				}elseif($i == 2){
					$bg_class = 'bg-orange';
				}elseif($i == 3){
					$bg_class = 'bg-lightblue';
				}
				
				
				$image_url = get_the_post_thumbnail_url( $pool_option, 'media-box-thumb' );
				if(!$image_url) {
					$image_url = get_stylesheet_directory_uri() . '/assets/media/water.jpg';
				}
				
				
				$html .= '
				<div style="background-image: url(\'' . $image_url . '\'); background-position: center center; background-size: cover; padding-top: 80%;" class="pool-option-item-wrapper-outer">
				
				<a class="' . $bg_class . '" href="' . get_the_permalink($pool_option) . '"><div class="pool-option-item-wrapper">
				
				<div class="pool-option-title"><h4>'. get_the_title($pool_option) .'</h4></div>
				
				</div></a>
				
				
				
				</div>';
				
				$i++;
				if($i == 4){
					$i = 1;
				}
					
				
			}
		
			
			$html .= '</div>';
			
		}	
						
		return $html;
		
	}
	
//END END END Links Carousel///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

//BUILD Rate Our Team///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function build_section_rate_our_team($data){
		$html = '';
		
		if($data){
			
				
				
				$html .= '
				<div class="rate-our-team-wrapper">
				
					<div class="container text-center">
					
						<ul class="list-inline rate-our-team-list">
						
							<li class="google">
								<a target="_blank" href="https://goo.gl/nURfSP" rel="external">
									<img class="img-responsive" src="' . get_stylesheet_directory_uri() . '/assets/media/rate.google.png' . '"/>
								</a>
							</li>
							
							<li class="houzz">
								<a target="_blank" href="https://www.houzz.com/pro/heritagepoolsllc/" rel="external">
									<img class="img-responsive" src="' . get_stylesheet_directory_uri() . '/assets/media/rate.houzz.png' . '"/>
								</a>
							</li>
							
							<li class="facebook">
								<a target="_blank" href="https://www.facebook.com/heritagepools" rel="external">
									<img class="img-responsive" src="' . get_stylesheet_directory_uri() . '/assets/media/rate.facebook.png' . '"/>
								</a>
							</li>
							
							<li class="youtube">
								<a target="_blank" href="https://www.youtube.com/channel/UC33Z4rVhmgpfSXNvAjqijIQ" rel="external">
									<img class="img-responsive" src="' . get_stylesheet_directory_uri() . '/assets/media/rate.youtube.png' . '"/>
								</a>
							</li>
							
							<li class="angieslist">
								<a target="_blank" href="https://member.angieslist.com/member/reviews/edit?serviceProviderId=2175455" rel="external">
									<img class="img-responsive" src="' . get_stylesheet_directory_uri() . '/assets/media/rate.angieslist.png' . '"/>
								</a>
							</li>
							
							<li class="google">
								<a target="_blank" href="http://columbia.app.bbb.org/customer-reviews/direct-review/24000140/?noskin&utm_source=bbbreview.us" rel="external">
									<img class="img-responsive" src="' . get_stylesheet_directory_uri() . '/assets/media/bbb.png' . '"/>
								</a>
							</li>
						
						
						</ul>
					
					</div>
				
				
				</div>';
				
			
		}	
						
		return $html;
		
	}
	
//END END END rate our team///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	


}








?>

