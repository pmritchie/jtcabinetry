<?php get_header(); ?>

<div class="w-wrap">
  <h1><?php echo esc_html__( 'Searched: ', 'authentik' ) . get_search_query() ?></h1>
</div>

<section class="w-wrap w-latest-posts">
  <?php om_baseLoop() ?>
</section>

<?php get_footer(); ?>