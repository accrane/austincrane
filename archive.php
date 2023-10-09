<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellaworks
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<section class="hero-phrase">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</section><!-- .page-header -->

			<div class="home-flex">
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>

					<div class="home-display">
						<a href="<?php the_permalink(); ?>">
							<?php echo get_the_post_thumbnail(); ?>
							
							<div class="cube-overlay">
								<h2><?php the_title(); ?></h2>
							</div>
						</a>
					</div>

				<?php endwhile; ?>
			</div>

			<?php the_posts_navigation();

		else :

			get_template_part( 'parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
