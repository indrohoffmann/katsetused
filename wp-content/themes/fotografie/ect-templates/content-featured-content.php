<?php
/**
 * The template for displaying featured posts on the front page
 *
 * @package Fotografie
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
    // Featured image
    if ( false != $atts['image'] ) {
        if( function_exists( 'essential_content_pro_get_featured_content_thumbnail_link' ) ) {
            echo essential_content_pro_get_featured_content_thumbnail_link( get_the_ID(), $atts['image_size'] );
        } else {
            echo essential_content_get_featured_content_thumbnail_link( get_the_ID(), 'ect-featured-content' );
        }
    }
    ?>
    <header class="featured-content-entry-header entry-header">
		<h2 class="featured-content-entry-title entry-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo esc_attr( the_title_attribute( ) ); ?>"><?php the_title(); ?></a></h2>
		
		<?php 
		$display_type = $display_author = $display_tags = '';
		
		if ( class_exists( 'Essential_Content_Pro_Featured_Content' ) || class_exists( 'Essential_Content_Featured_Content' ) ) {
			if ( $atts['display_types'] ) {
				if ( class_exists('Essential_Content_Pro_Featured_Content') ) {
					$display_type = Essential_Content_Pro_Featured_Content::get_content_type(get_the_ID());
				} elseif ( class_exists('Essential_Content_Featured_Content') ) {
					$display_type = Essential_Content_Featured_Content::get_content_type(get_the_ID());
				}
			}

			if ( $atts['display_tags'] ) {
				if ( class_exists('Essential_Content_Pro_Featured_Content') ) {
					$display_tags = Essential_Content_Pro_Featured_Content::get_content_tags( get_the_ID() );
				} elseif ( class_exists( 'Essential_Content_Featured_Content' ) ) {
					$display_tags = Essential_Content_Featured_Content::get_content_tags( get_the_ID() );
				}
			}
			
			if ( $atts['display_author'] ) {
				if ( class_exists('Essential_Content_Pro_Featured_Content') ) {
					$display_author = Essential_Content_Pro_Featured_Content::get_content_author(get_the_ID());
				} elseif ( class_exists('Essential_Content_Featured_Content') ) {
					$display_author = Essential_Content_Featured_Content::get_content_author(get_the_ID());
				}
			}
		}
		
		if ( $display_type || $display_author || $display_tags ) : 
		?>
			<div class="featured-content-entry-meta entry-meta">
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
