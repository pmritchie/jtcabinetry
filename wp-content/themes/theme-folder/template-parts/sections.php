<?php /* Help for making function & loops
  function w_baseloop($w=array()){
    $title=!isset($w['title'])? '' : $w['title'];
    ?>
      <?php $the_query = new WP_Query( $args ); ?>
      <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <h2><?php the_title(); ?></h2>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    <?php
  }
end of Help*/

// Base Loop for Latest Posts & Archives
  function om_baseLoop($w=array()){
    $offset=!isset($w['offset'])? 0 : $w['offset'];
    ?>
      <!-- BaseLoop Postlist -->
        <div class="w-latest-posts-with-sidebar">
          <div class="w-inner">

            <!-- Postloop -->
              <div class="infinite-scroll">
                <?php $p=1; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <?php if($p>$offset){ ?>
                      <?php om_loopItem() ?>
                  <?php } ?>
                <?php $p++; endwhile; endif; ?>
              </div>
            <!-- end -->

            <!-- Pagination for BaseLoop -->
              <?php $next_posts = get_next_posts_link(true);
                if( get_theme_mod( 'w_wantInfinite', 1 ) &&  !empty( $next_posts ) ){ ?>
                  <div class="infinite-pagination">
                    <div class="infinite-more"><?php esc_html_e('More Posts','authentik') ?></div>
                    <div class="infinite-nav"><?php next_posts_link(); ?></div>
                  </div>
                <?php }else{ ?>
                  <div class="w-pagination">
                    <?php $prev_posts = get_previous_posts_link(true); if(!empty( $prev_posts )){ ?>
                      <div class="w-left">
                        <?php previous_posts_link(); ?>
                      </div>
                    <?php } $next_posts = get_next_posts_link(true); if(!empty( $next_posts )){ ?>
                      <div class="w-right">
                        <?php next_posts_link(); ?>
                      </div>
                    <?php } ?>
                  </div><!-- .row -->
              <?php } ?>
            <!-- end -->

          </div>
          <?php get_sidebar() ?>
        </div>
      <!-- end -->
    <?php
  }
// end