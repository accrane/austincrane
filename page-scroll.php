<?php 
/*
* Template Name: Scroll
*
*
*/
get_header(); 
?>
<style type="text/css">
	.sky, .layer_one, .layer_two, .layer_three, .layer_four, .layer_five {position: absolute;}
	.sky {z-index: 1;}
	.layer_two {z-index: 2;}
	.layer_three {z-index: 3;}
	.layer_four {z-index: 4;}
	.layer_five {z-index: 5;}
	.mainz {
		line-height: 0;
	}
</style>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="scrollStart"></div>
	
		<div class="mainz">
		  <svg viewBox="0 0 1200 800" xmlns="http://www.w3.org/2000/svg">
		    <image class="sky" xlink:href="<?php bloginfo('template_url'); ?>/images/fp/layer-1.png" width="1456" height="1592"/>
		    <image class="layer_two" xlink:href="<?php bloginfo('template_url'); ?>/images/fp/layer-2.png" width="1456" height="1592"/>
		    <image class="layer_three" xlink:href="<?php bloginfo('template_url'); ?>/images/fp/layer-3.png" width="1456" height="1592"/>
		    <image class="layer_four" xlink:href="<?php bloginfo('template_url'); ?>/images/fp/layer-4.png" width="1456" height="1592"/> 
		    <image class="layer_five" xlink:href="<?php bloginfo('template_url'); ?>/images/fp/layer-5.png" width="1456" height="1592"/> 
		    <image class="layer_six" xlink:href="<?php bloginfo('template_url'); ?>/images/fp/layer-6.png"  width="1456" height="1592" />
		</svg>
		  <div class="scrollEnd"></div>
		</div>
		<section class="black-tag">
			<h2>Hello!</h2>
		</section>

		</main><!-- #main -->
</div><!-- #primary -->


<script type="text/javascript">

	gsap.registerPlugin(ScrollTrigger);
    
    gsap.to('.sky', {
    	scrollTrigger:{
    		trigger: '.scrollStart',
    		start: '10px top',
    		end: '500px top',
    		scrub: true,
    		// markers: true,
    	},
    	y: -30,
    	ease: 'none',
    	duration: 3
    });

    gsap.to('.layer_two', {
    	scrollTrigger:{
    		trigger: '.scrollStart',
    		start: '10px top',
    		end: '500px top',
    		scrub: true,
    		// markers: true,
    	},
    	y: -100,
    	ease: 'none',
    	duration: 3
    });

    gsap.to('.layer_three', {
    	scrollTrigger:{
    		trigger: '.scrollStart',
    		start: '10px top',
    		end: '500px top',
    		scrub: true,
    		// markers: true,
    	},
    	y: -200,
    	ease: 'none',
    	duration: 3
    });
    gsap.to('.layer_four', {
    	scrollTrigger:{
    		trigger: '.scrollStart',
    		start: '10px top',
    		end: '500px top',
    		scrub: true,
    		// markers: true,
    	},
    	y: -300,
    	ease: 'none',
    	duration: 3
    });
    gsap.to('.layer_five', {
    	scrollTrigger:{
    		trigger: '.scrollStart',
    		start: '10px top',
    		end: '500px top',
    		scrub: true,
    		// markers: true,
    	},
    	y: -400,
    	ease: 'none',
    	duration: 3
    });
    gsap.to('.layer_six', {
    	scrollTrigger:{
    		trigger: '.scrollStart',
    		start: '10px top',
    		end: '500px top',
    		scrub: true,
    		// markers: true,
    	},
    	y: -750,
    	ease: 'none',
    	duration: 3
    });

    /*  SCENE 1 */
    
</script>
<?php
get_footer();