<?php
/**
 * The template used for displaying projects on index view
 *
 * @package Fotografie
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="hentry">
	<?php
    	// Featured image
    	if( function_exists( 'essential_content_pro_get_portfolio_thumbnail_link' ) ) {
	    	echo essential_content_pro_get_portfolio_thumbnail_link( get_the_ID(), $atts['image_size'] );
	    } else {
	    	echo essential_content_get_portfolio_thumbnail_link( get_the_ID(), 'ect-jetpack-portfolio' );
	    }
    ?>
	<header class="portfolio-entry-header entry-header">
		<h2 class="portfolio-entry-title entry-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo esc_attr( the_title_attribute( ) ); ?>"><?php the_title(); ?></a></h2>
		
		<?php 
		$display_type = $display_author = $display_tags = '';
		
		if ( class_exists( 'Essential_Content_Pro_Jetpack_Portfolio' ) || class_exists( 'Essential_Content_Jetpack_Portfolio' ) ) {
			if ( $atts['display_types'] ) {
				if ( class_exists('Essential_Content_Pro_Jetpack_Portfolio') ) {
					$display_type = Essential_Content_Pro_Jetpack_Portfolio::get_project_type(get_the_ID());
				} elseif ( class_exists('Essential_Content_Jetpack_Portfolio') ) {
					$display_type = Essential_Content_Jetpack_Portfolio::get_project_type(get_the_ID());
				}
			}

			if ( $atts['display_tags'] ) {
				if ( class_exists('Essential_Content_Pro_Jetpack_Portfolio') ) {
					$display_tags = Essential_Content_Pro_Jetpack_Portfolio::get_project_tags( get_the_ID() );
				} elseif ( class_exists( 'Essential_Content_Jetpack_Portfolio' ) ) {
					$display_tags = Essential_Content_Jetpack_Portfolio::get_project_tags( get_the_ID() );
				}
			}
			
			if ( $atts['display_author'] ) {
				if ( class_exists('Essential_Content_Pro_Jetpack_Portfolio') ) {
					$display_author = Essential_Content_Pro_Jetpack_Portfolio::get_project_author(get_the_ID());
				} elseif ( class_exists('Essential_Content_Jetpack_Portfolio') ) {
					$display_author = Essential_Content_Jetpack_Portfolio::get_project_author(get_the_ID());
				}
			}
		}
		
		if ( $display_type || $display_author || $display_tags ) : 
		?>
			<div class="portfolio-entry-meta entry-meta">
				<?php
				
				if ( $display_types ) {
					echo $display_types;
				}

				if ( $display_tags ) {
					echo $display_tags;
				}

				if ( $display_author ) {
					echo $display_author;
				}
				?>
			</div>
		<?php endif; ?>
	</header>
</article>
