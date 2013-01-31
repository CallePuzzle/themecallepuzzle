<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
			
			
			<?php
			$idObj = get_category_by_slug('noticias'); 
			$id = $idObj->term_id;
			$args = 'cat='.$id;
			?>	
			
			<?php /* Start the Loop */ ?>
			<?php query_posts($args); ?>
			<?php the_post(); ?>
				<aside id="noticias" class="widget">
					<?php echo '<a href="' . get_category_link( $idObj->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $idObj->name ) . '">';?>
						<h1 class="titulo" >Noticias</h1></a>
				<section>
				<?php get_template_part( 'content-sidebar', get_post_format() ); ?>
				</section>
				</aside>
			<?php
			// Reset Query
			wp_reset_query();
			?>
			
			
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>