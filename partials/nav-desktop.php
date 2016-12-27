<div id="header" class="visible">
	<div class="left">
		<a class="logo-wrapper" href="<?php echo get_home_url(); ?>">
			<svg id="main_logo" viewBox="0 0 272 212" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"><desc>LearnRuby.io Logo</desc><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"><path d="M46.3138352,0.441354863 L226.947097,0.440918064 L271.494385,67.7971669 L135.395432,212 L0.505615234,69.7611924 L46.3138352,0.441354863 Z M49.4006891,20.2010972 L24.0347265,57.3219112 L66.0766678,57.3449446 L49.4006891,20.2010972 Z M81.6077465,53.606166 L123.049115,10.353934 L62.3966972,10.3406426 L81.6077465,53.606166 Z M97.0385209,57.3409421 L137.261433,14.0187253 L178.705037,57.3376947 L97.0385209,57.3409421 Z M152.684584,10.3352887 L210.868179,10.3294337 L192.313338,52.3429795 L152.684584,10.3352887 Z M207.155804,57.3140573 L223.876717,18.9605448 L249.201144,57.3085444 L207.155804,57.3140573 Z M21.6049289,73.4587656 L73.4884827,73.4464516 L119.291337,174.806587 L21.6049289,73.4587656 Z M136.662712,178.561748 L183.641672,73.4283986 L89.6348055,73.4475326 L136.662712,178.561748 Z M199.741638,73.426131 L247.990284,73.4275697 L153.99459,176.106341 L199.741638,73.426131 Z" id="Path-1-Copy" fill="#EF4F4F" sketch:type="MSShapeGroup"></path></g></svg>
		</a>
	</div>
	<div class="right">
		<nav class="desktop-nav">
 		<?php
			$defaults = array(
				'container'			=> 'ul',
				'theme_location' 	=> 'desktop-menu',
				'menu_id' 			=> 'mobile-menu',
				'menu_class' 		=> 'primary',
				);
			wp_nav_menu( $defaults );
		?>
		</nav>
		<a href="#" id="menu-toggle" class="menu">
			<span class="hot-dog-bun">
				<span class="hot-dog"></span>
			</span>
		</a>
	</div>
</div>