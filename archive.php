
<?php get_header(); ?>

<main>
	<section>
		

		<?php get_template_part('partials/archive-header');  ?>

		<section id="journal">
			<div class="inline-grid">
				<div class="js-masonry" id="container">
					<span class="gutter-sizer"></span>
					<span class="col-12 col-s-6 col-m-4 grid-sizer"></span>

					<?php if ( have_posts() ) : ?>

					<?php while( have_posts()): the_post(); ?>

					<?php get_template_part('partials/archive-content');  ?>

				<?php endwhile; ?>
			</div>
		</div>
	</section>

	<?php
			// Previous/next page navigation.
	the_posts_pagination( array(
		'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
		'next_text'          => __( 'Next page', 'twentyfifteen' ),
		'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
		) );

		// If no content, include the "No posts found" template.
	else :
		get_template_part( 'content', 'none' );
	endif;
	?>
</section>
</main>

<?php get_footer(); ?>
