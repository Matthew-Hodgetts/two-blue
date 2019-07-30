<section class="section home__section--seven bg-dark-blue">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="slide__heading text-white mb-5">OUR BLOG</h1>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="owl-carousel mt-5">
            <?php
          $args = array(
              'post_type' => 'post'
          );

          $post_query = new WP_Query($args);
          if($post_query->have_posts() ) {
            while($post_query->have_posts() ) {
              $post_query->the_post();
              ?>

            <div class="blog__home-item">
              <a href="<?php the_permalink(); ?>">
                <div class="blog__home-img-wrap">
                  <?php if(the_post_thumbnail()) { ?>
                  <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_post_thumbnail_caption(); ?>"
                    class="blog__home-img">
                  <?php } ?>
                </div>
                <h3 class="blog__home-title my-2">
                  <?php the_title(); ?>
                </h3>
                <p class="blog__home-excerpt">
                  <?php 
                    echo get_the_excerpt();
                  ?>
                </p>
              </a>
            </div>
            <?php
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>