<?php
/**
 * Default post content layout
 * 
 * This the default content layout in a loop mainly for archive posts, but
 * can also be used for single or archive/index/search.
 * More specific post types can be output using `content-[post_type].php`.
 * 
 * @package Lmnts
 * @subpackage Lmnts_Earth
 * @since  Lmnts Earth 1.0.0
 */
?>
<?php 
	$count = $wp_query->current_post;
	$total = $wp_query->post_count;
	$first_post = false;
	$classes = '';
		if($count == 0) {
			$classes = array(
				'first-post',
				'col-12',
			);
			$first_post = true;
		} else {
			$classes = array(
				'col-12',
				'col-sm-6',
				'col-md-4',
				'col-lg-3',
				'gutter-sm'
			);
		}
?>
<?php if( 1 == $count ) echo '<div class="inline-grid">'; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>


	<?php if( !$first_post ) : ?>
		<a href="<?php echo esc_url( get_permalink()); ?>" class="img-viewport blog">
			<?php the_post_thumbnail(); ?>
		</a>
	<?php endif; ?> 

	<header class="post-header">

		<!-- <div class="header-text"> -->
			<?php the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<p class="date"><?php the_time( get_option( 'date_format' ) ); ?></p>
			<p class="author">Author: <?php the_author(); ?></p>
		<!-- </div> -->
	<!-- 	<?php get_template_part( 'partials/content', 'share' ); ?>  -->
	</header><!-- .entry-header -->

	<?php if( $first_post ) : ?>
		<div class="entry-content float-grid">
			<?php if( has_post_thumbnail() ) : ?>
				<div class="col-12 col-sm-6 col-md-4 gutter-sm-r">
					<div class="img-viewport blog first">
						<?php the_post_thumbnail(); ?>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-8 gutter-sm-l">
			<?php else: ?>
				<div class="col-12">
			<?php endif; ?>
			<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading %s', 'lmnts_earth' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				) ); ?>
				</div>
		</div><!-- .entry-content -->
	<?php endif; ?>

	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>

	<footer class="entry-footer">
		<?php //lmnts_earth_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'lmnts_earth' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
<?php if( $total == $count ) echo '</div><!-- .float-grid -->'; ?>