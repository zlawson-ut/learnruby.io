<?php /*
Template Name: Page
*/
?>

<?php get_header(); ?>

<main>	

	<article itemscope itemType="http://schema.org/BlogPosting">
		<meta itemprop="inLanguage" content="en-US"/>
		
		<header id="header-section" class="header-single" itemprop="headline">
			<div class="article-header-content">

				<h1 class="title"><?php echo get_the_title(); ?></h1>

			</div>
		</header>
		<div class="content-wrapper">
			<?php while( have_posts()): the_post(); ?>
			<section itemprop="articleBody">
				<div id="article_body">
					<?php the_content();?>
				</div>
			</section>
		</div>

	</article>
<?php endwhile; ?>

</main>			

<?php get_footer();?>
