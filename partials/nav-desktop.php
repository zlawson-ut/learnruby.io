<div id="header" class="visible">
	<div class="left">
		<a id="logo" class="img-viewport" href="<?php echo get_home_url(); ?>">
			<svg id="zach_logo" viewBox="0 0 142 140" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xml:space="preserve"><title>Zachary Lawson</title><desc>Logo</desc><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"><path d="M35.0140614,0.0299845839 L1.01707078,0.00628533339 L0.980274576,139.867516 L35.0089681,139.865021 L34.9797598,106.031847 L95.0594386,34.0562874 L35.0428539,33.969598 L35.0140614,0.0299845839 Z M79.0013428,106.037637 L141.005371,106.047952 L141.021179,32.0381865 L79.0013428,106.037637 Z" id="Path-2" fill="#B29E71" sketch:type="MSShapeGroup"></path></g></svg>
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