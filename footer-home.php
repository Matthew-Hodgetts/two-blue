  </div><!-- #content -->
</div><!-- #page -->

<!-- Homepage menu -->
<div id="menuHome">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col h-100">
      <ul class="menu">
        <li>
          <a href="Home" class="menu-item one">Home</a>
        </li>
        <li>
          <a href="Services" class="menu-item two">Services</a>
        </li>
        <!-- <li>
          <a href="Clients" class="menu-item three">Clients</a>
        </li>
        <li>
          <a href="OurTeam" class="menu-item four">Our Team</a>
        </li> -->
        <li>
          <a href="Blog" class="menu-item five">Blog</a>
        </li>
        <li>
          <a href="Contact" class="menu-item six">Contact</a>
        </li>
        <li>
        <?php dynamic_sidebar('footer-3'); ?>
        </li>
      </ul>
      
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
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
</body>
</html>
