<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
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
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo home_url( '/' ); ?>/wp-content/themes/drygirl/clear.css" />
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo home_url( '/' ); ?>/wp-content/themes/drygirl/hacks.css" />
<![endif]-->
<script src="<?php echo home_url( '/' ); ?>/wp-content/themes/drygirl/js/jquery-1.5.min.js"></script>
<script src="<?php echo home_url( '/' ); ?>/wp-content/themes/drygirl/js/jquery.infieldlabel.min.js"></script>
<script src="<?php echo home_url( '/' ); ?>/wp-content/themes/drygirl/js/pixastic/pixastic.core.js"></script>
<script src="<?php echo home_url( '/' ); ?>/wp-content/themes/drygirl/js/pixastic/actions/blur.js"></script>
<script src="<?php echo home_url( '/' ); ?>/wp-content/themes/drygirl/js/pixastic/actions/desaturate.js"></script>
<script src="<?php echo home_url( '/' ); ?>/wp-content/themes/drygirl/js/pixastic/actions/brightness.js"></script>
<script src="<?php echo home_url( '/' ); ?>/wp-content/themes/drygirl/js/pixastic/actions/invert.js"></script>
<script src="<?php echo home_url( '/' ); ?>/wp-content/themes/drygirl/js/common.js"></script>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'><!--Google Font-->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
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
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24780569-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner">
            	<div class="west">
                	<?php
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() &&
							has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) &&
							$image[1] >= HEADER_IMAGE_WIDTH ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
					else : ?>
<!-- this is where the image tag used to reside. if you want it back, get it from twentyten-->
					<?php endif; ?>
					<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
					<<?php echo $heading_tag; ?> id="site-title">
                            <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</<?php echo $heading_tag; ?>>
                </div>
				<div id="site-description" class="east hide">
					<div class="gutter">
						<div class="desc"><?php bloginfo( 'description' ); ?></div>
					</div>
                </div>
			</div><!-- #branding -->
			<div id="access" role="navigation" class="nav-top">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<!--<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>-->
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div><!-- #access -->
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">
