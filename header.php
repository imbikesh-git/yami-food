<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset') ?>"/>
<meta name="viewport" content="width=device-width, inital-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<title><?php bloginfo( 'name' ); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<header>
	<div class="top_header">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
					<div class="content">

						<?php 
						$phoneNum = get_theme_mod( 'heavy_phone_num' );
						$Email = get_theme_mod( 'heavy_email' );
						$Time = get_theme_mod( 'heavy_time' );
						?>

						<ul>
							<?php if($phoneNum != ''){ ?>
								<li><a href="tell:1234 - 5678 - 9012"><span><i class="fa fa-mobile" aria-hidden="true"></i></span><?php echo $phoneNum; ?></a></li>
							<?php } ?>

							<?php if($Email != ''){ ?>
							<li><a href="mailto:support@Construct.com"><span><i class="fa fa-envelope" aria-hidden="true"></i></span><?php echo $Email; ?></a></li>
						    <?php } ?>

						    <?php if($Time != ''){ ?>
						    	<li><a href="#"><span><i class="fa fa-clock-o" aria-hidden="true"></i></span><?php echo $Time; ?></a></li>
						    <?php } ?>
						</ul>
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<div class="social">
						<?php 
						$fb_url = get_theme_mod('heavy_fb_url');
						$twitter_url = get_theme_mod('heavy_twitter_url');
						$insta_url = get_theme_mod('heavy_instagram_url');
						$linkedin_url = get_theme_mod( 'heavy_linkedin_url' );
						?>
						<ul>
							<?php if($fb_url != ''){ ?>
								<li><a href="<?php echo esc_url($fb_url); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<?php }?>

							<?php if($twitter_url != ''){ ?>
								<li><a href="<?php echo esc_url($twitter_url); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<?php } ?>

							
							<?php if($insta_url != ''){ ?>
								<li><a href="<?php echo esc_url($insta_url); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<?php } ?>

							<?php if($linkedin_url != ''){ ?>
							<li><a href="<?php echo esc_url($linkedin_url); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-default" data-spy="affix" data-offset-top="197">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">
	      	<?php
	      	if ( function_exists( 'the_custom_logo' ) ) {
	      		the_custom_logo();
	      	}
	      	?> 
	      </a>
	  </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    	<?php
	    	if(has_nav_menu('header')){

	    		wp_nav_menu(array(
	    			'theme_location' => 'header',
	    			'menu_class'     => 'nav navbar-nav navbar-right',

	    		));	
	    	}					
	    	?>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container -->
	</nav>
</header>