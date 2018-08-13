<div class="main-nav-outer navbar-fixed-top">

<nav class="utility-nav hidden-xs">
	<div class="container-fluid">
	
		<div class="row">
			
			
			
			
			<div class="col-sm-9 social text-right">
			
<?php
	wp_nav_menu(
						array(
							'menu' 	=> 'utility',
							'depth'             => 1,
							'menu_class' 		=> 'list-inline',
							'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
							'menu_id'			=> 'utility',
							'walker' 			=> new wp_bootstrap_navwalker()
						)
	); 	
		
?>
			</div>
			
			<div class="hidden-xs col-sm-3">
				
				<?php get_search_form(); ?>
				
			</div>
				
		</div> <!-- End Row -->
	</div>
</nav>




<nav class="navbar navbar-default heritage-main-nav">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/logo.png" class="img-responsive" alt="Heritage Pools, LLC Logo" title="Heritage Pools, LLC Logo"/>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeIn">
      	
      	<form role="search" method="get" class="navbar-form search-form hidden-sm hidden-md hidden-lg" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				
			<div class="input-group">
		          	<input type="search" class="form-control search-field" placeholder="Search..." name="s" title="<?php _ex( 'Search for:', 'label', '_tk' ); ?>">
		
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
		      </span>
		    </div><!-- /input-group -->
		
		</form>
      
      	<?php
				wp_nav_menu(
									array(
										'menu' 	=> 'main',
										'depth'             => 2,
										'menu_class' 		=> 'nav navbar-nav navbar-right',
										'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
										'menu_id'			=> 'main',
										'walker' 			=> new wp_bootstrap_navwalker()
									)
				); 	
		
	?>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid hidden-xs">
	<a title=" 843-762-3417" href="tel:843-762-3417" class="phone-tab"><i class="fa fa-phone"></i> 843-762-3417</a>
</div>
</div>


<!--
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2" style="background-color: red;">test</div>
		<div class="col-md-2" style="background-color: red;">test</div>
		<div class="col-md-2" style="background-color: red;">test</div>
		<div class="col-md-2" style="background-color: red;">test</div>
		<div class="col-md-2" style="background-color: red;">test</div>
		<div class="col-md-2" style="background-color: red;">test</div>
	</div>
	
</div>
-->