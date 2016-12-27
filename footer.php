<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<footer id="footer">
	<section class="form-wrapper">
		<?php dynamic_sidebar( 'newsletter_form' ); ?>
	</section>

	<ul class="footer-social">
		<li><a target="_blank" href="https://twitter.com/learnruby.io" class="social-link"><i class="fa fa-twitter"></i></a></li>
		<li><a target="_blank" href="mailto:hello@zacharylawson.com?subject=HiZachary" class="social-link"><i class="fa fa-paper-plane"></i></a></li>
	</ul>
</footer>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-70824865-1', 'auto');
ga('send', 'pageview');
</script>

<?php wp_footer();?>

</body>
</html>
