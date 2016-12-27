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
