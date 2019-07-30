<?php 
  /*
  * Template Name: Our people
  */

  get_header('other');
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div id="fullpageOther">

            <section class="section our__people--one bg-light-blue">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="slide__main-text text-white text-center">
                            We are a busy and fast growing team of people passionate about the built environment, digital and communications
                            </h2>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section our__people our__people--two bg-grey">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="slide__main-text text-black">
                                MEET THE TEAM
                            </h2>
                            <p class="slide__heading text-dark-blue my-1">
                                We’re a communications agency specialising in property
                            </p>
                        </div>
                    </div>

                    <div class="d-none d-md-flex row mt-3 mt-lg-4 align-items-center">
                        <div class="col-sm-12 col-md-3 text-center text-md-left">
                            <img src="https://via.placeholder.com/250" class="our__people-img my-2">
                        </div>
                        <div class="col col-md-8 offset-md-1">
                            <p>
                            PB Peter started one of the UK’s first dedicated property PR agencies, over a career spanning three decades. He likes to keep things simple, with a frank, no nonsense approach. His black book of contacts is legendary.
                            </p>
                            <p class="my-1"><em><a
                                        href="mailto:mail@gmail.com">mail@gmail.com</a></em>
                            </p>
                            <p class="my-1"><em><a
                                        href="tel:0113456789">0113 456 789</a></em>
                            </p>
                        </div>
                    </div>

                    <div class="d-none d-md-flex row mt-3 mt-lg-4 align-items-center">
                        <div class="col-md-3 text-center text-md-left">
                            <img src="https://via.placeholder.com/250" class="our__people-img my-2">
                        </div>
                        <div class="col-md-8 offset-md-1">
                            <p class="slide__sex-text">
                            PB Peter started one of the UK’s first dedicated property PR agencies, over a career spanning three decades. He likes to keep things simple, with a frank, no nonsense approach. His black book of contacts is legendary.
                            </p>
                            <p class="my-1"><em><a
                                        href="mailto:mail@gmail.com">mail@gmail.com</a></em>
                            </p>
                            <p class="my-1"><em><a
                                        href="tel:0113456789">0113 456 789</a></em>
                            </p>
                        </div>
                    </div>
                    <!-- OWL CAROUSEL ROW-->
                    <div class="row d-md-none">
                        <div class="col">
                            <div class="owl-carousel owl-our-people">

                                <div>
                                    <div class="d-md-none row mt-3 mt-lg-5 align-items-center">
                                        <div class="col-md-3 text-center text-md-left">
                                            <img src="https://via.placeholder.com/250" class="our__people-img my-4">
                                        </div>
                                        <div class="col-md-8 offset-md-1">
                                            <p>
                                            PB Peter started one of the UK’s first dedicated property PR agencies, over a career spanning three decades. He likes to keep things simple, with a frank, no nonsense approach. His black book of contacts is legendary.
                                            </p>
                                            <p class="my-1"><em><a
                                                        href="mailto:mail@gmail.com">mail@gmail.com</a></em>
                                            </p>
                                            <p class="my-1"><em><a
                                                        href="tel:0113456789">0113 456 789</a></em>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="d-md-none row mt-3 mt-lg-5 align-items-center">
                                        <div class="col-md-3 text-center text-md-left">
                                            <img src="https://via.placeholder.com/250" class="our__people-img my-4">
                                        </div>
                                        <div class="col-md-8 offset-md-1">
                                            <p>
                                            PB Peter started one of the UK’s first dedicated property PR agencies, over a career spanning three decades. He likes to keep things simple, with a frank, no nonsense approach. His black book of contacts is legendary.
                                            </p>
                                            <p class="my-1"><em><a
                                                        href="mailto:mail@gmail.com">mail@gmail.com</a></em>
                                            </p>
                                            <p class="my-1"><em><a
                                                        href="tel:0113456789">0113 456 789</a></em>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- END OWL CAROUSEL ROW-->
                </div>
            </section>

            <section class="section home__section--eight">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="d-none d-md-flex col-md-4 py-1 footer__col py-md-3">
                            <?php dynamic_sidebar('footer-1'); ?>
                        </div>
                        <div class="col-md-4 py-1 py-md-3 footer__col">
                            <?php dynamic_sidebar('footer-2'); ?>
                        </div>
                        <div class="col-md-4 py-1 py-md-3 footer__col text-md-right">
                            <?php dynamic_sidebar('footer-3'); ?>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();

?>
<script>
  jQuery(document).ready(function () {
    jQuery(".owl-carousel").owlCarousel({
      loop: true,
      margin: 30,
      nav: true,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        768: {
          items: 2,
          nav: false
        },
        1000: {
          items: 3,
          nav: true,
          loop: false
        }
      }
    });
  });
</script>