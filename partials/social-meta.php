<!-- twitter meta -->
<?php
	$intro = "Learn the Ruby programming language for free, in a mobile friendly format." ;
	$image_url = get_field('site_image');

	if(get_field('intro')){
		$intro = get_field('intro');
	}
	if(get_field('twitter_image_url')){
		$image_url = get_field('twitter_image_url');
	}
?>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@LearnRubyio">
<?php 
// <meta name="twitter:creator" content="@hello_zach">
?>
<meta name="twitter:title" content="<?php echo get_the_title(); ?>">
<meta name="twitter:description" content="<?php echo $intro; ?>">
<meta name="twitter:image" content="<?php echo $image_url; ?>">
