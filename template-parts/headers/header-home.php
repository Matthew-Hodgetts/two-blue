<header id="header" class="header__home header__home--dark py-1 py-md-3 py-xl-4">
  <nav>
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col">
          <a href="<?php bloginfo('home'); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dark.png" alt="logo" class="header__logo header__logo--light">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/light.png" alt="logo" class="header__logo header__logo--dark">
          </a>
        </div>
        <div class="col text-right">
          <button class="hamburger hamburger--spring" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
      </div>
    </div>
  </nav>
</header>