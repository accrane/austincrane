<?php 
/*
* Template Name: Resources
*
*
*/
get_header(); 
?>
<style type="text/css">
	
</style>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
				
			</article><!-- #post-## -->

		<?php endwhile; // End of the loop.
		?>

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

    
    
</script>
<?php
get_footer();
