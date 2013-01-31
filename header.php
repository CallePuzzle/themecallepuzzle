<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<?php
echo '<style>
@font-face {
font-family: casual;
src: url('.get_template_directory_uri().'/AppleCasual.otf) format("opentype");
}';
?>
</style>
<style id="tampage"></style>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/reveal.min.css"/>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 9]>
<script src="lib/js/html5shiv.js"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<?php
echo "<script> var home = '".home_url()."';</script>"; 
?>
<script src="<?php echo get_template_directory_uri(); ?>/js/movil.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/canvas.js" type="text/javascript"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<script>

		var ancho=$('#page').width();

		var reducir=ancho/(800+10);
		var moverizq=1-reducir;
		var alto=0.9;
		var altoletras=1.1;
		//alert(reducir);
		if(reducir>1){reducir=1;moverizq=0;}

		document.getElementById("tampage").innerHTML="#logo{transform:scale("+reducir+","+alto+");-ms-transform:scale("+reducir+","+alto+");-o-transform:scale("+reducir+","+alto+");-moz-transform:scale("+reducir+","+alto+");-webkit-transform:scale("+reducir+","+alto+");left:-"+((moverizq*100)-2)+"px;}#inicio{transform:scale("+reducir+","+alto+");-ms-transform:scale("+reducir+","+alto+");-o-transform:scale("+reducir+","+alto+");-moz-transform:scale("+reducir+","+alto+");-webkit-transform:scale("+reducir+","+alto+");left:-"+((moverizq*100)-2)+"px;}#entrar{transform:scale("+reducir+","+alto+");-ms-transform:scale("+reducir+","+alto+");-o-transform:scale("+reducir+","+alto+");-moz-transform:scale("+reducir+","+alto+");-webkit-transform:scale("+reducir+","+alto+");left:-"+((moverizq*100)-2)+"px;}#lienzomenu{transform:scale("+reducir+","+alto+");;-ms-transform:scale("+reducir+","+alto+");-o-transform:scale("+reducir+","+alto+");-moz-transform:scale("+reducir+","+alto+");-webkit-transform:scale("+reducir+","+alto+");left:-"+((moverizq*400)-2)+"px;}";

	</script>
	<header id="branding" role="banner">
		<!--<div id="titulo">
		<span style="color:#39a0e1">Calle</span><span style="color:#c0e3f9">Puzzle</span>
		</div>-->
				<section id="capamenu">
					<section id="divcanvas">
						<canvas id="lienzomenu" width="800" height="195"></canvas>
						<a href="#"><div id="inicio"></div><div id="entrar"></div><img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/headers/logo.png"></a>
					</section>
					<nav id="access" role="navigation">
					<ul>
						<div>
					<li class="page_item page-item">
						<a>Inicio</a>
					</li>
					<li class="page_item page-item abajo">
						<a>Entrar</a>
					</li>
					</div>
					<?php
					$args=array(
					  'orderby' => 'name',
					  'order' => 'ASC'
					  );
					$categories=get_categories($args);
						$a=3;
						$donde=202;
						
						$idObj = get_category_by_slug('noticias'); 
						$idnoticias = $idObj->term_id;
						
					  foreach($categories as $category){ ?>
						<?php //quita noticias del menú
						if(!($idnoticias==$category->term_id)): ?>
						<?php //capa para centrar los enlaces
						if(!is_int($a/2)):?>
						<div>
						<?php endif;?>
					<li class="page_item page-item <?php if(is_int($a/2)){ echo "abajo";}else{echo "float";}?>">
						<?php echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ';
						if(is_int($a/2))
						{
							echo 'onMouseover="sobramenu2('.$donde.');"';
						}
						else
						{
							echo 'onMouseover="sobramenu1('.$donde.');"';
						}
						echo 'onMouseout="limpiarlienzo();">' . $category->name.'</a>';?>
					</li>
					<?php if(is_int($a/2)){ echo "</div>"; $donde=$donde+202;} ?>
					<?php $a++;?>
					<?php endif;?>
					<?php }?>
				</ul>
				</nav><!-- #access -->
				</section>
			
	</header><!-- #branding -->


	<div id="main">
