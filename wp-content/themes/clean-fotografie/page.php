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

					<!--Erinevad teksti väljad-->
					<h1 style="background-image: url('<?php echo get_field('backgcround_image') ['url']?>')"><?php the_field('title'); ?></h1>
					<h4><?php the_field('subtitle'); ?></h4>

             		<!--lingiga nupp--><!--Kui class button ära jätta saab lihtslalt lingina kasutada-->
					<a class="button"
					href="<?php echo $button['url']; ?>"
					target="<?php echo $button['target']; ?>">
					<?php echo $button['title']; ?>
					</a>

					<!--Tausta pildi panemine divile*-->
					<div class="monkey" style="background-image: url('<?php echo get_field('backgcround_image') ['url']?>')">Oky oskan divi sisse panna pildi aga kuidas saab endale soovitud kohta seda panna tehes ise vastavas suruses ala valmis. ( näiteks see pilt panna kuhugi ennem loodud kasti sisse</div>


					<!--Siin tahaks luua uut divi kuhu ise sisu luua, see mingi asi mis teeb yhe rea aga kuidas siia contenti panna?-->
					<?php
					$block_content = '<!-- wp:latest-posts {"postsToShow":3,"displayPostContent":true,"excerptLength":30,"displayPostDate":true,"postLayout":"grid","displayFeaturedImage":true,"featuredImageSizeSlug":"large","align":"wide","className":"tw-mt-8 tw-img-ratio-3-2 tw-stretched-link is-style-default"} /-->';
					echo do_blocks($block_content);
					?>


			</main><!-- #main -->
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</div><!-- .wrapper -->
<?php
get_footer();
