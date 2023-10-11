<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>

<script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
<script src="https://unpkg.com/gsap@3/dist/ScrollToPlugin.min.js"></script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site cf">

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">

			
			<div class="ac-logo">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('template_url'); ?>/images/ac-logo.png">
				</a>
			</div>



	<div class="burger">
	  <span></span>
	</div>

	<nav class="mobilemenu">
	  <!-- <ul class="main"> -->
	  	<?php wp_nav_menu( array( 
	  		'theme_location' => 'primary', 
	  		'menu_id' => 'primary-menu',
	  		'menu_class' => 'main',
	  		'container' => '' 
	  	) ); ?>
	    
    	<!--<li><a href="<?php bloginfo('url'); ?>/our-work">Our Work</a>
	    	 <ul class="dropdown">
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/tuckfest-music/thursday-line-up/">Thursday Line-up</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/tuckfest-music/friday-line-up/">Friday Line-up</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/tuckfest-music/saturday-line-up/">Saturday Line-up</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/tuckfest-music/sunday-line-up/">Sunday Line-up</a>
	    		</li>
	    		<li>
	    			<a href="<?php bloginfo('url'); ?>/tuckfest-music/past-line-ups/">Past Line-up</a>
	    		</li>
	    	</ul> 
    	</li>-->
    	
    	<!-- <li>
    		<a href="<?php bloginfo('url'); ?>/blog">Blog</a>
	    </li>
    	<li>
    		<a href="<?php bloginfo('url'); ?>/contact">Contact</a>
    	</li>
    	
	  </ul> -->
	</nav>		
				 
			

		<!--<nav id="site-navigation" class="main-navigation" role="navigation">
			
			<div class="desktop">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</div>
		</nav> #site-navigation -->
	</div><!-- wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content wrapper">
