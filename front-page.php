<?php
/**
 * The template for displaying pages
 */
?>

<?php get_header(); ?>
<?php get_template_part('partials/social-meta');  ?>
<main>	

	<div id="header-section" itemprop="headline">
		<h1 class="title"><?php the_title(); ?></h1>
	</div>
	
	<section id="journal">
		<div class="inline-grid">
			<h2 class="section-header-text">Newsfeed<span class="loading" aria-hidden="true" aria-label="Loading…"></span></h2>
			<div class="js-masonry" id="container">
				<span class="gutter-sizer"></span>
				<span class="col-12 col-s-6 col-m-4 grid-sizer"></span>

				<?php $zl_query = "showposts=6"; $zl_query = new WP_Query($zl_query); ?>
				<?php if ($zl_query->have_posts()) : while ($zl_query->have_posts()) : $zl_query->the_post(); ?>

				<?php get_template_part('partials/archive-content');  ?>

			<?php endwhile; // end of one post ?>
		<?php endif; //end of loop ?>
	</div>
	<div class="button-section col-12">
		<a href="<?php echo site_url(); ?>/tutorials" class="button">View All</a>
	</div>
</div>
</section>

</main>			

<?php get_footer();?>
