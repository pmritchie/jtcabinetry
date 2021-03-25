
  <footer class="footer">
    <div class="container">
      <div class="row footer__row">
        <div class="col-md-6">
          <div class="footer__social__media">
            <?php get_template_part('template-parts/footer-social-media'); ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="footer__menu">
            <?php
            wp_nav_menu(
              array(
                'menu'              => 'menu_footer',
                'theme_location'    => 'menu_footer',
                'depth'             => 1,
                'container'         => 'div',
                'container_id'      => '',
                'container_class'   => '',
                'container_id'      => 'main-nav',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker()
              )
            );
            ?>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <?php wp_footer(); ?>
  </body>

  </html>
