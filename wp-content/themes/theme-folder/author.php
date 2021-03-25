<?php get_header(); ?>

<div class="w-wrap">
  <h1><?php the_author() ?></h1>
</div>

<section class="w-wrap w-latest-posts">
  <?php om_baseLoop() ?>
</section>

<?php get_footer(); ?>