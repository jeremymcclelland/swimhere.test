<?php 

$project_gallery = get_field('maintenance_plan_gallery');

$gallery_html = '';

if($project_gallery){
	
	foreach($project_gallery as $image){
		//var_dump($image);
		
		$thumbnail_link = $image['sizes']['thumbnail'];
		$full_link = $image['sizes']['page-width'];
		$caption = $image['caption'];
		
		if(!$caption){
			$caption = get_the_title();
		}
		
		
		$gallery_html .= '
		
		
		{
            \'src\': \'' . $full_link . '\',
            \'thumb\': \'' . $thumbnail_link . '\',
            \'subHtml\': \'<h4>' . $caption . '</h4>\'
        },
		
		
		
		';
		
		
	}
	
}
	
?>

	
<?php if($project_gallery) { ?>	
	<a class="btn btn-orange-general" id="photo-gallery"><i class="fa fa-image"></i> View Photos</a>	
<?php } ?>	




<?php if($project_gallery) { ?>
	
<script>
	
	
	
	document.getElementById('photo-gallery').addEventListener('click', function() {
	   	jQuery('#photo-gallery').lightGallery({
			dynamic: true,
		    mousewheel:	true,
		    preload: 2,
		    dynamicEl: [
			<?php echo $gallery_html; ?>
		    ]
		}); 

	 
	});
</script>
	
<?php } ?>




