<?php get_header(); ?>
<style type="text/css">
	
</style>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class="hero-phrase">
			<h1>Creative<br>Digital<br>Developer</h1>
		</section>

		<div class="home-flex">
			<?php 
			$args = array(
				'posts_per_page'  => '9',
				'post_type'       => 'post'
			);
			$the_query = new WP_Query( $args );
			if( $the_query->have_posts() ): while( $the_query->have_posts() ): $the_query->the_post(); 
				// $thumb = get_the_post_thumbnail();
				// echo '<pre>';
				// print_r($thumb);
				// echo '</pre>';
				?>
				<div class="home-display">
					<a href="<?php the_permalink(); ?>">
						<?php echo get_the_post_thumbnail(); ?>
						
						<div class="cube-overlay">
							<h2><?php the_title(); ?></h2>
						</div>
					</a>
				</div>
			<?php endwhile; endif; ?>
		</div>
		

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
