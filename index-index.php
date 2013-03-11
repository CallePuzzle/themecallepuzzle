		<div id="primary">
			<div id="content" role="main">
			
			<?php $idObj = get_category_by_slug('piezas-sueltas'); 

			if ( $idObj ) : ?>

				<?php twentyeleven_content_nav( 'nav-above' ); ?>
				<div class="reveal">

					<!-- Any section element inside of this container is displayed as a slide -->
					<div class="slides">
				<?php
				$id = $idObj->term_id;
				$args = 'cat='.$id;
				define('INDEX','1');
				?>	
				
				<?php /* Start the Loop */ ?>
				<?php query_posts($args); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<section>
					<?php get_template_part( 'content', get_post_format() ); ?>
					</section>
				<?php endwhile; 
				// Reset Query
				wp_reset_query();
				?>

				<?php //twentyeleven_content_nav( 'nav-below' ); ?>
					</div>
				</div>	
			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			<?php if ( have_posts() ) : ?>

				<?php twentyeleven_content_nav( 'nav-above' ); ?>

				<div id="musicaindex">

					<?php
				$idObj = get_category_by_slug('musica'); 
				$id = $idObj->term_id;
				$args = 'cat='.$id.'&tag=recomendaciones&posts_per_page=5';
				?>	
				
					<header class="entry-header">
						<h1 class="entry-title">
			<a rel="bookmark" title="Enlace permanente a recomendaciones" href="<?php echo get_tag_link(get_tag_id_by_name('recomendaciones'));?>">Recomendaciones musicales</a>
						</h1>
					</header>
					<section>
						<ul>
				<?php /* Start the Loop */ ?>
				<?php query_posts($args); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<li>
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
					</li>
				<?php endwhile; 
				// Reset Query
				wp_reset_query();
				?>
						</ul>
					</section>

				</div>
			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->
<script src="<?php echo get_template_directory_uri(); ?>/js/reveal.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/js/head.min.js" type="text/javascript"></script>

<script>

	// Full list of configuration options available here:
	// https://github.com/hakimel/reveal.js#configuration
	Reveal.initialize({
		controls: true,
		progress: false,
		history: false,
		center: true,

		theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
		transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/none

		// Optional libraries used to extend on reveal.js
		dependencies: [
			{ src: '<?php echo get_template_directory_uri(); ?>/lib/js/classList.js', condition: function() { return !document.body.classList; } },
			{ src: '<?php echo get_template_directory_uri(); ?>/plugin/markdown/showdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
			{ src: '<?php echo get_template_directory_uri(); ?>/plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
			{ src: '<?php echo get_template_directory_uri(); ?>/plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
			{ src: '<?php echo get_template_directory_uri(); ?>/plugin/zoom-js/zoom.js', async: true, condition: function() { return !!document.body.classList; } },
			{ src: '<?php echo get_template_directory_uri(); ?>/plugin/notes/notes.js', async: true, condition: function() { return !!document.body.classList; } }
			// { src: 'plugin/remotes/remotes.js', async: true, condition: function() { return !!document.body.classList; } }
		]
	});

</script>