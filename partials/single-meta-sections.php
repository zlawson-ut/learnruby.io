

<section id="related_posts">
	<hr />
	<?php related_posts(); ?> 
</section> 

<?php $args = array('post_type' => 'advertisement'); $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<section id="recommended">
		<hr/>
		<h3><?php echo get_field('advertisement_label') ?></h3>
		<a href="<?php echo get_field('advertisement_link') ?>" target="_blank" id="reccomended_html">
			<?php echo get_field('advertisement_html') ?>
		</a>
	</section> 
<?php endwhile;wp_reset_query();?>

<section id="comments">
	<hr/>
	<h3>Comments:</h3>
	<?php 
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
	?>
</section> 

