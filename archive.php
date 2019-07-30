<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Two_Blue
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 py-3">
          <header class="page-header">
            <h1 class="text-center my-5">
            <?php
              echo str_replace('Category:', '', get_the_archive_title());
            ?> </h1> <?php
              the_archive_description( '<div class="archive-description text-center">', '</div>' );
            ?>
          </header><!-- .page-header -->
        </div>
      </div>
    </div>
		<?php if ( have_posts() ) : ?>

			
    <div class="container">
      <div class="row my-4">
        <div class="col-md-8 offset-md-2 mt-3">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );
    ?>
        </div>
      </div>
    </div>
    <?php
		  endif;
    ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
