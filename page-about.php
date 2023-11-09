<?php
/**
 * Template Name: About
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellaworks
 */

get_header(); 

$sites = get_field('sites');
// echo '<pre>';
// print_r($sites);
// echo '</pre>';
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		
		

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header>

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->

				<section class="about">
					<?php foreach( $sites as $s ){ 
							$title = $s['site_name'];
							$desc = $s['site_description'];
							$link = $s['link']['url'];
							$img = $s['image']['url'];
							$alt = $s['image']['alt'];
						?>
						<div class="site">
							<a href="<?php echo $link; ?>" target="_blank">
								<div class="img">
									<img src="<?php echo $img; ?>" alt="<?php echo $alt; ?>">
								</div>
								<div class="desc">
									<h2><?php echo $title; ?></h2>
									<?php echo $desc; ?>
								</div>
							</a>
						</div>
					<?php } ?>
				</section>
				
			</article><!-- #post-## -->

		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
