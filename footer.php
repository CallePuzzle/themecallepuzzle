<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>
			<div id="site-generator">
				<section id="wordpress">
					<?php do_action( 'twentyeleven_credits' ); ?>
					Sitio creado con la ayuda de <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyten' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyten' ); ?>" rel="generator"><?php printf( __( '%s.', 'twentyten' ), 'WordPress' ); ?></a>
				</section>
				<div id="site-info">
					<a rel='license' href='http://creativecommons.org/licenses/by-nc-nd/3.0/'><img alt='Licencia de Creative Commons' style='border-width:0' src='http://i.creativecommons.org/l/by-nc-nd/3.0/80x15.png' /></a><br/><p style='font-size:7pt'>Esta obra está bajo una <a rel='license' href='http://creativecommons.org/licenses/by-nc-nd/3.0/'>licencia Creative Commons <br>Attribution-NonCommercial-NoDerivs 3.0 Unported</a>
				</div>
				<div id="footdev">
					<a href="http://dev.callepuzzle.com">Desarrolla CallePuzzle</a>
				</div>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>