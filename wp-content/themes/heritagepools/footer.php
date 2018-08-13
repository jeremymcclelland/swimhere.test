<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>


<footer id="colophon" class="site-footer" role="contentinfo">
	
	<a href="tel:843-762-3417" id="phone" class="phone-button hide-phone hidden-sm hidden-md hidden-lg">
	<span class="fa-stack">
	  <i class="fa fa-phone fa-lg"></i>
	</span>
	</a>
	
<!--
	<a href="tel:843-762-3417" class="phone-button-new hidden-sm hidden-md hidden-lg">
	  <i class="fa fa-phone fa-lg"></i> Call
	</a>
-->
	
	<a href="#" id="back-to-top" title="Back to top"><i class="fa fa-arrow-up"></i></a>
<?php // substitute the class "container-fluid" below if you want a wider content area ?>

<div class="heritage-footer-info text-center" style="background-image: url('<?php echo get_stylesheet_directory_uri() . '/assets/media/asfalt-dark.png'?>'); background-position: center center; background-size: repeat;">
	<div class="container">
		<div class="row">
			<div class="foot-flex-wrapper">	
		
				<div class="foot-flex">
					
					<?php
						$footer_address = get_field('footer_address', 'options');
						
						echo $footer_address;
						
					?>
	
				</div>
				
				<div class="foot-flex">
					<?php
						$footer_hours = get_field('footer_hours', 'options');
						
						echo $footer_hours;
						
					?>
	
				</div>
				
				<div class="foot-flex">
					<h4>Socialize With Us</h4>
					<hr>
					
					<?php
						wp_nav_menu(
							array(
								'menu' 	=> 'footer-social',
								'depth'             => 1,
								'menu_class' 		=> 'list-inline social-foot',
								'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
								'menu_id'			=> 'footer-social',
								'walker' 			=> new wp_bootstrap_navwalker()
							)
						); 	
							
					?>

	
				</div>
				
				<div class="foot-flex">
					<h4>Email Newsletter</h4>
					<hr>
					
					
					
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:transparent; clear:left; font:14px 'Pier Sans', sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://swimhere.us10.list-manage.com/subscribe/post?u=7558aba7e849e063e3cd2d94e&amp;id=a406bebd38" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7558aba7e849e063e3cd2d94e_a406bebd38" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->					
					
					
					
					
					
					
					
					
					
					
					
	
				</div>
			
			</div>
		</div>
	</div><!-- close .container -->
</div><!-- Closes Footer info -->
	
	<div class="container heritage-footer-links text-center hidden">

		
		<?php
			wp_nav_menu(
				array(
					'menu' 	=> 'footer-one',
					'depth'             => 1,
					'menu_class' 		=> 'list-inline',
					'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
					'menu_id'			=> 'footer-one',
					'walker' 			=> new wp_bootstrap_navwalker()
				)
			); 	
				
		?>
		
		<?php
			wp_nav_menu(
				array(
					'menu' 	=> 'footer-two',
					'depth'             => 1,
					'menu_class' 		=> 'list-inline',
					'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
					'menu_id'			=> 'footer-two',
					'walker' 			=> new wp_bootstrap_navwalker()
				)
			); 	
				
		?>
		
	</div>
	
	
	<div class="container-fluid heritage-footer-copyright text-center">
		<p>© <?php echo date("Y"); ?> COPYRIGHT HERITAGE POOLS, LLC - 2005-<?php echo date("Y"); ?> ALL RIGHTS RESERVED.</p>		
	</div>
	
</footer><!-- close #colophon -->

<?php if(is_page(3683)){ ?>

<!-- Google Code for Thank You Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1009544401;
var google_conversion_label = "QGt2CODm7X8Q0dmx4QM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1009544401/?label=QGt2CODm7X8Q0dmx4QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<?php } ?>



<?php wp_footer(); ?>

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1009544401;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1009544401/?guid=ON&amp;script=0"/>
</div>
</noscript>




</body>
</html>
