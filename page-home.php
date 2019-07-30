<?php 
  /*
  * Template Name: Homepage
  */

  get_header('home');
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div id="fullpageHome">
			<?php
				get_template_part('template-parts/home/slide1');
				get_template_part('template-parts/home/slide2');
				get_template_part('template-parts/home/slide3');
				get_template_part('template-parts/home/slide4');
				get_template_part('template-parts/home/slide5');
				get_template_part('template-parts/home/slide6');
				get_template_part('template-parts/home/slide7');
				get_template_part('template-parts/home/slide8');
      		?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer('home');