<!-- header -->
<header class="header"
  id="main-header"
  role="banner">
  <!-- nav -->
  <?php require_once(get_template_directory() . '/template-parts/header-topbar.php'); ?>
  <nav class="navbar navbar-expand-xl navbar-light"
    role="navigation">
    <div class="container">
      <div class="navbar-brand">
        <a href="<?php echo esc_url(home_url()); ?>">
      
          <?php echo get_custom_logo(); ?>
        </a>
      </div>
  
      <button class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#main-nav"
        aria-controls="main-nav"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="hamburger"></span>
        <span class="hamburger"></span>
        <span class="hamburger"></span>
      </button>
      <?php
			wp_nav_menu(
				array(
					'menu'              => 'menu_primary',
					'theme_location'    => 'menu_primary',
					'depth'             => 2,
					'container'         => 'div',
					'container_id'      => 'navbarNavDropdown',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'main-nav',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker()
				)
			);
			?>
    </div>
  </nav>
  <!-- /nav -->

</header>
<!-- /header -->
