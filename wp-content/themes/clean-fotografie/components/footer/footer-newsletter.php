<?php
/**
 * Displays footer newsletter widget
 *
 * @package Christmas_Bell
 */
?>

<?php
if ( is_active_sidebar( 'sidebar-newsletter' ) ) :
?>
<aside id="footer-newsletter" class="widget-area" role="complementary">
	<div class="wrapper">
		<div class="footer-newsletter">
			<?php dynamic_sidebar( 'sidebar-newsletter' ); ?>
		</div>
	</div><!-- .wrapper -->
</aside><!-- .widget-area -->
<?php endif;
