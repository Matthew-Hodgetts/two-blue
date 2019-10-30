<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Two_Blue
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="footer py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4 footer__col footer__col--1 py-2">
          <?php dynamic_sidebar('footer-1'); ?>
        </div>
        <div class="col-md-4 footer__col footer__col--2 py-2">
          <?php dynamic_sidebar('footer-2'); ?>
        </div>
        <div class="col-md-4 footer__col footer__col--3 py-2 text-md-right">
          <?php dynamic_sidebar('footer-3'); ?>
        </div>
      </div>
    </div>
  </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
  <script>
    jQuery(document).ready(function ($) {

      $('.tb-owl-nav.owl-nav-next button').click(function() {
        owlWwd.trigger('next.owl.carousel');
      })
      $('.tb-owl-nav.owl-nav-prev button').click(function() {
        owlWwd.trigger('prev.owl.carousel');
      })
      var owlWwd = $('.page-template-page-wwd .owl-carousel');
      owlWwd.owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2
          },
          1000: {
            items: 3
          }
        }
      });
    });
  </script>
</body>
</html>
