<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fotografie
 */

get_header(); ?>

	<div class="wrapper singular-section"> 
		<div id="primary" class="content-area" >
			<main id="main" class="site-main" role="main">
			<?php $button = get_field('button'); ?>
				
				
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'components/page/content', 'page' );

					get_template_part( 'components/post/content', 'comments' );

				endwhile; // End of the loop.
				?>

				
					
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</div><!-- .wrapper -->
<?php
get_footer();
