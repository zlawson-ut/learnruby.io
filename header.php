<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */
?>
<!DOCTYPE html>
<!-- Microdata markup added by Google Structured Data Markup Helper. -->
<html <?php language_attributes(); ?> >
<head>
	<title><?php $bloginfo = get_bloginfo( 'name' ); echo $bloginfo;?> </title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<meta property="og:name" content="<?php bloginfo( 'name' ); ?>" />
	<meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />
	<meta property="og:image" content="<?php echo 'siteImage' ?>" />
	<meta property="og:description" content="<?php echo 'metaDescription' ?>" />

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/favicons/apple-touch-icon.png' ?>">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/favicons/favicon-32x32.png' ?>" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/favicons/favicon-16x16.png' ?>" sizes="16x16">
	<link rel="manifest" href="<?php echo get_template_directory_uri() . '/favicons/manifest.json' ?>">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri() . '/favicons/safari-pinned-tab.svg' ?>" color="#ef4f4f">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/favicons/favicon.ico' ?>">
	<meta name="apple-mobile-web-app-title" content="LearnRuby.io">
	<meta name="application-name" content="LearnRuby.io">
	<meta name="msapplication-config" content="/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ef4f4f">
	
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#b29e71">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#b29e71">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<?php wp_enqueue_script("jquery"); ?>

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="body">

	<header>
		
		<?php get_template_part('partials/nav-desktop');  ?>
		<?php get_template_part('partials/nav-mobile');  ?>

	</header>
