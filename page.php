<?php /*
Template Name: Single
*/
?>

<?php get_header(); ?>

<main>	

	<article itemscope itemType="http://schema.org/BlogPosting">
		<meta itemprop="inLanguage" content="en-US"/>
		<?php get_template_part('partials/single-header');  ?>
		
		<?php while( have_posts()): the_post(); ?>

		<div class="content-wrapper">
			
			<section itemprop="articleBody">
				<?php get_template_part('partials/single-meta');  ?>
				<div id="article_body">
					<?php the_content();?>
				</div>
			</section>
			
			<?php get_template_part('partials/single-meta-sections');  ?>

		</div>


	</article>
<?php endwhile; ?>

</main>			

<?php get_footer();?>
