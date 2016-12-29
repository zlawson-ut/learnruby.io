<!-- twitter meta -->
<?php
	$intro = "Learn the Ruby programming language for free, in a mobile friendly format." ;
	$image_url = get_field('site_image','option');
	$image_url_twitter = $image_url;
	$image_url_facebook = $image_url;

	if(get_field('intro')){
		$intro = get_field('intro');
	}
	if(get_field('twitter_image_url')){
		$image_url_twitter = get_field('twitter_image_url');
	}
	if(get_field('facebook_image_url')){
		$image_url_facebook = get_field('facebook_image_url');
	}
?>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@LearnRubyio">
<?php 
// <meta name="twitter:creator" content="@hello_zach">
?>
<meta name="twitter:title" content="<?php echo get_the_title(); ?>">
<meta name="twitter:description" content="<?php echo $intro; ?>">
<meta name="twitter:image" content="<?php echo $image_url_twitter; ?>">

<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo get_the_title(); ?>" />
<meta property="og:description" content="<?php echo $intro; ?>" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:site_name" content="LearnRuby.io" />
<meta property="og:image" content="<?php echo $image_url_facebook; ?>" />
