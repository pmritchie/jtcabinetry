<?php get_header(); ?>

<div class="w-404">
  <h1><?php esc_html_e('Not found, error 404', 'custom-theme') ?></h1>
  <p>
    <?php esc_html_e("The page you are looking for no longer exists. Perhaps you can return back to the site's homepage and see if you can find what you are looking for. Or, you can try finding it by using the search form below.", 'custom-theme'); ?>
  </p>
  <?php get_search_form() ?>

</div>

<?php get_footer(); ?>
