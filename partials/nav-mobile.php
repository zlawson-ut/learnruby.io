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
		<li><a href="mailto:hello@zacharylawson.com?subject=Hi Zachary" class="social-link email icon"><i class="fa fa-paper-plane"></i></a></li>
		<li><a target="_blank" href="https://twitter.com/hello_zach" class="social-link"><i class="fa fa-twitter"></i></a></li>
		<li><a target="_blank" href="https://instagram.com/zlawson_/" class="social-link"><i class="fa fa-instagram"></i></a></li>
	</ul>
</nav>