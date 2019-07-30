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
        <div class="col-md-4 footer__col py-2">
          <?php dynamic_sidebar('footer-4'); ?>
        </div>
        <div class="col-md-4 footer__col py-2">
          <?php dynamic_sidebar('footer-2'); ?>
        </div>
        <div class="col-md-4 footer__col py-2 text-md-right">
          <?php dynamic_sidebar('footer-3'); ?>
        </div>
      </div>
    </div>
  </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
