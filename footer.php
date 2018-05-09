<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package petj-17
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<!-- copyright icon font awesome -->
			<i class="fa fa-creative-commons fa-2x" aria-hidden="true"></i> by Per Thyjaer Jensen <?php echo date('Y'); ?>. <a href="https://creativecommons.org/licenses/by-sa/4.0/"> License: Attribution-NonCommercial-ShareAlike </a>  <br>		
		
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'petj-17' ) ); ?>">
			<!-- wordpress icon font awesome -->
			<i class="fa fa-wordpress fa-2x" aria-hidden="true"></i>			
			<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'This %s production is based on Underscores.', 'petj-17' ), 'WordPress' );
			?></a>
			<br>
			 <i class="fa fa-github fa-2x" aria-hidden="true"></i> Github repository: <a href="https://github.com/asathoor/underscores-and-sass">Underscores-and-sass</a>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- scripts -->
<script>

// navigation icons
jQuery(document).ready(function($) {
		
	// font awesome before
	$('.nav-previous a')
		.prepend('<i class="fa fa-chevron-circle-left" aria-hidden="true" style="margin-left:2rem;font-size:2rem;"></i> ');

	// font awesome next
	$('.nav-next a')
		.append(' <i class="fa fa-chevron-circle-right" aria-hidden="true" style="font-size:2rem;"></i>');

})

</script>


</body>
</html>
