<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
          <?php
            while ( have_posts() ) :
              the_post();
              ?>
          <div class="blog-post__cat-wrap text-center my-5">
            <?php
                two_blue_entry_footer();
              ?>
          </div>
          <?php
              the_title( '<h1 class="blog-post__title mb-3 mt-1 text-center">', '</h1>' );
              ?>
          <img class="blog-post__featured-img my-3 my-md-5" src="<?php the_post_thumbnail_url('full'); ?>"
            alt="<?php the_post_thumbnail_caption(); ?>">
          <?php
              the_content();

              // get_template_part( 'template-parts/content', get_post_type() );

              // the_post_navigation();

              // If comments are open or we have at least one comment, load up the comment template.
              // if ( comments_open() || get_comments_number() ) :
              if ( false ) :
                comments_template();
              endif;

            endwhile; // End of the loop.
          ?>
        </div>
      </div>
    </div>
    <div class="container-fluid blog-nav py-4 mt-5">
      <div class="row align-items-center">

        <div class="col-sm-4 blog-nav__prev-post text-left">
          <?php 
            $prev_post = get_previous_post();
            if ( is_a( $prev_post , 'WP_Post' ) ) : ?>
          <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="blog__nav-link">
            <div class="blog-nav__wrap">

              <div>
                <i class="fas fa-chevron-left mr-3"></i>
              </div>
              <div>
                <h6 class="mb-0">PREVIOUS</h6>
                <?php echo get_the_title( $next_post->ID ); ?>
              </div>

            </div>
          </a>
          <?php endif; ?>
        </div>

        <div class="col-sm-4 text-center">
          <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>"
            target="_blank" rel="noopener noreferrer" class="blog__share-link">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="https://twitter.com/share?url=<?php the_permalink();?>" target="_blank"
            rel="noopener noreferrer" class="blog__share-link">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>"
            target="_blank" rel="noopener noreferrer" class="blog__share-link">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink();?>"
            target="_blank" rel="noopener noreferrer" class="blog__share-link">
            <i class="fab fa-pinterest"></i>
          </a>
        </div>

        <div class="col-sm-4 blog-nav__next-post text-right">
          <?php 
          // the_post_navigation(); 
          $next_post = get_next_post();
          if ( is_a( $next_post , 'WP_Post' ) ) : ?>
          <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="blog__nav-link">

            <div class="blog-nav__wrap">

              <div>
                <h6 class="mb-0">NEXT</h6>
                <?php echo get_the_title( $next_post->ID ); ?>
              </div>

              <div>
                <i class="fas fa-chevron-right ml-3"></i>
              </div>

            </div>
          </a>
          <?php endif; ?>
        </div>
      </div>
    </div>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();