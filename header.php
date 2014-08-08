<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _lyte
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '‹', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script type="text/javascript" src="//use.typekit.net/lkn6tyl.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script src="/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="/hyphenate-3.3.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
			var hyphenatorSettings = {
				selectorfunction: function () {
					return $('div#content p').get();
				}
			};
			Hyphenator.config(hyphenatorSettings);
			Hyphenator.run();
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_lyte' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<img src="/images/joeyday.png" alt="Joey Day" class="avatar" />
			<p class="blurb">Hi, I’m Joey. I’m a 30-something <abbr title="Information Technology">IT</abbr> professional (read: big nerd) in Salt Lake City. When I grow up I’d like to be a seminary professor (read: even bigger nerd).</p>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', '_lyte' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
