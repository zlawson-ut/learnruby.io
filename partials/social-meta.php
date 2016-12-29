<!-- twitter meta -->
<?php
	$intro = "Learn the Ruby programming language for free, in a mobile friendly format." ;
	if(get_field('intro')){
		$intro = get_field('intro');
	}
?>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@LearnRubyio">
<?php 
// <meta name="twitter:creator" content="@hello_zach">
?>
<meta name="twitter:title" content="<?php echo get_the_title(); ?>">
<meta name="twitter:description" content="<?php echo $intro; ?>">
<?php if(get_field('twitter_image_url')): ?>
	<meta name="twitter:image" content="<?php the_field('twitter_image_url'); ?>">
<?php endif; ?>