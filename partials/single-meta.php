<?php $zl_date = get_the_date( 'd M Y' );?>
<div class="inline-grid meta-header">
	<div class="col-6 date-wrapper">
		<time class="date" pubdate datetime="<?php echo $zl_date; ?>"><?php echo $zl_date; ?></time>
	</div>	
	<div class="col-6 share-img-wrapper">
		<div class="share-img">

			<?php if (has_post_thumbnail( $post->ID ) ): ?>
				<h3>Share Post:</h3>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<img src="<?php echo $image[0]; ?>" alt="<?php echo wp_strip_all_tags(get_the_title())?>" rel="share">
			<?php endif; ?>

		</div>
	</div>

</div>
