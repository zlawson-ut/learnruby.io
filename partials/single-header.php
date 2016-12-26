<header id="header-section" class="header-single" itemprop="headline">
	<div class="article-header-content">
		
		<h1 class="title"><?php echo get_the_title(); ?></h1>
		<div class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px"  viewBox="45.945 488.513 1310.813 245.271" enable-background="new 45.945 488.513 1310.813 245.271" xml:space="preserve"><path d="M918.919 652.703c-2.702 0-5.405 0-8.108-2.703L700 520.271L489.189 650c-5.405 2.703-10.812 2.703-13.515 0 L270.271 520.271L62.162 650l-16.216-24.324l216.216-132.433c5.405-2.702 10.811-2.702 13.5 0l208.108 127.026l210.811-129.729 c5.405-2.703 10.812-2.703 13.5 0L918.92 622.972l208.108-129.729c5.404-2.702 10.811-2.702 13.5 0l216.216 135.1 L1343.243 650l-208.108-129.729L927.027 650C924.324 650 921.6 652.7 918.9 652.703z" class="svg-fill"/> <path d="M918.919 733.784c-2.702 0-5.405 0-8.108-2.703L700 601.351L489.189 731.1 c-5.405 2.703-10.812 2.703-13.515 0L270.271 601.351L59.459 731.081l-13.514-24.324l216.216-132.433 c5.405-2.702 10.811-2.702 13.5 0L481.08 704.052l210.811-129.729c5.405-2.702 10.812-2.702 13.5 0l210.811 129.7 l208.108-129.729c5.404-2.702 10.811-2.702 13.5 0l216.216 135.135l-13.513 21.622l-205.406-129.729L927.027 731.1 C924.324 731.1 921.6 733.8 918.9 733.784z" class="svg-fill"/></svg></div>

		<h2 class="tags">
			<ul>
				<?php 
					$categories = get_the_category();
					if ( ! empty( $categories ) ) {
						echo '<li><a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a></li>';
					}
				?> 

				<?php
				$posttags = get_the_tags();
				if ($posttags) {
					foreach($posttags as $tag) {
						$link = get_tag_link($tag->term_id);
						$name =  $tag->name . ' '; 
						echo '<li><a href="' . $link . '">' . $name . '</a></li>';
					}
				}
				?>
			</ul>
		</h2>

	</div>
</header>