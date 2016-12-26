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

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri() . '/favicons/apple-touch-icon-57x57.png'; ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() . '/favicons/apple-touch-icon-114x114.png'; ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() . '/favicons/apple-touch-icon-72x72.png'; ?>">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri() . '/favicons/apple-touch-icon-144x144.png'; ?>">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri() . '/favicons/apple-touch-icon-60x60.png'; ?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() . '/favicons/apple-touch-icon-120x120.png'; ?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() . '/favicons/apple-touch-icon-76x76.png'; ?>">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() . '/favicons/apple-touch-icon-152x152.png'; ?>">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/favicons/favicon-196x196.png" sizes="196x196'; ?>">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/favicons/favicon-160x160.png" sizes="160x160'; ?>">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/favicons/favicon-96x96.png" sizes="96x96'; ?>">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/favicons/favicon-16x16.png" sizes="16x16'; ?>">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/favicons/favicon-32x32.png" sizes="32x32'; ?>">
	<meta name="msapplication-TileColor" content="#b29e71">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() . '/favicons/mstile-144x144.png'; ?>">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/favicons/favicon.ico'; ?>">
	
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
