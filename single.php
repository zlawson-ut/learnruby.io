<?php /*
Template Name: Single
*/
?>

<?php get_header(); ?>

<main>	

<?php 

	$next_post = get_field('next_post'); 

?>

	<article itemscope itemType="http://schema.org/BlogPosting">
		<meta itemprop="inLanguage" content="en-US"/>
		<header id="header-section" class="header-single" itemprop="headline">
			<div class="article-header-content">
				
				<h1 class="title"><?php the_field('sub_title'); ?><?php echo get_the_title(); ?></h1>
				<div class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px"  viewBox="45.945 488.513 1310.813 245.271" enable-background="new 45.945 488.513 1310.813 245.271" xml:space="preserve"><path d="M918.919 652.703c-2.702 0-5.405 0-8.108-2.703L700 520.271L489.189 650c-5.405 2.703-10.812 2.703-13.515 0 L270.271 520.271L62.162 650l-16.216-24.324l216.216-132.433c5.405-2.702 10.811-2.702 13.5 0l208.108 127.026l210.811-129.729 c5.405-2.703 10.812-2.703 13.5 0L918.92 622.972l208.108-129.729c5.404-2.702 10.811-2.702 13.5 0l216.216 135.1 L1343.243 650l-208.108-129.729L927.027 650C924.324 650 921.6 652.7 918.9 652.703z" class="svg-fill"/> <path d="M918.919 733.784c-2.702 0-5.405 0-8.108-2.703L700 601.351L489.189 731.1 c-5.405 2.703-10.812 2.703-13.515 0L270.271 601.351L59.459 731.081l-13.514-24.324l216.216-132.433 c5.405-2.702 10.811-2.702 13.5 0L481.08 704.052l210.811-129.729c5.405-2.702 10.812-2.702 13.5 0l210.811 129.7 l208.108-129.729c5.404-2.702 10.811-2.702 13.5 0l216.216 135.135l-13.513 21.622l-205.406-129.729L927.027 731.1 C924.324 731.1 921.6 733.8 918.9 733.784z" class="svg-fill"/></svg></div>

				<h2 class="tags">
					<ul>
						<?php 
							$categories = get_the_category();
							if ( ! empty( $categories ) ) {
								echo '<li><a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a></li>';
							}
						?> 

						<?php
						$posttags = get_the_tags();
						if ($posttags) {
							foreach($posttags as $tag) {
								$link = get_tag_link($tag->term_id);
								$name =  $tag->name . ' '; 
								echo '<li><a href="' . $link . '">' . $name . '</a></li>';
							}
						}
						?>
					</ul>
				</h2>

			</div>
		</header>
		
		<?php while( have_posts()): the_post(); ?>

		<div class="content-wrapper">
			
			<section itemprop="articleBody">
				<?php $zl_date = get_the_date( 'd M Y' );?>
				<div class="inline-grid meta-header">
					<div class="col-6 date-wrapper">
						<time class="date" pubdate datetime="<?php echo $zl_date; ?>"><?php echo $zl_date; ?></time>
					</div>	
					<div class="col-6 share-img-wrapper">
						<div class="share-img">

							<?php if (has_post_thumbnail( $post->ID ) ): ?>
								<h3>Share:</h3>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								<img src="<?php echo $image[0]; ?>" alt="<?php echo wp_strip_all_tags(get_the_title())?>" rel="share">
							<?php endif; ?>

						</div>
					</div>

				</div>


				<div id="article_body">
					<?php if(get_field('iframe_url')): ?>
					<div class="iframe-loader">
						<div class="loader">
							<p>Loading</p>
							<span class="loading dots" aria-hidden="true" aria-label="Loading…"></span>
							<a href="https://twitter.com/LearnRubyio" target="_blank">@LearnRubyio</a>
						</div>
							<iframe id="quiz" style="border: 0;" src="<?php the_field('iframe_url'); ?>" width="100%" height="100%"></iframe>
					</div>
					<?php endif; ?>
					
					<?php if($next_post): ?>
						<h4>Next Lesson:</h4>
						<a href="<?php the_permalink($next_post); ?>" class="next">
							<span class="next__title"><?php echo get_the_title($next_post); ?></span>
							<span class="next__link">Continue <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
						</a>
						<hr>
					<?php endif; ?>

					<?php the_content();?>

				</div>

			</section>
			
			<section id="comments">
				<hr/>
				<h3>Comments:</h3>
				<?php 
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>
			</section> 

		</div>

	</article>

		<?php endwhile; ?>

</main>			

<?php get_footer();?>
