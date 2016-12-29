<nav class="mobile-nav">
	<?php
			$defaults = array(
				'container'			=> 'ul',
				'theme_location' 	=> 'mobile-menu',
				'menu_class' 		=> 'mobile-nav-text',
				);
			wp_nav_menu( $defaults );
		?>
	
	<ul class="mobile-nav-social">
		<?php if(get_field('twitter_url', 'option')): ?>
			<li><a target="_blank" href="<?php the_field('twitter_url', 'option'); ?>" class="social-link"><i class="fa fa-twitter"></i></a></li>
		<?php endif; ?>
		<?php if(get_field('email', 'option')): ?>
			<li><a href="mailto:<?php the_field('email', 'option'); ?>?subject=HiZachary" class="social-link email icon"><i class="fa fa-paper-plane"></i></a></li>
		<?php endif; ?>
	</ul>
</nav>