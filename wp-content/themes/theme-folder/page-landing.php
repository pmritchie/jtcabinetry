<?php
/*
 * Template Name: Landing page
 * Template Post Type: page
 */
?>
<?php get_header(); ?>
  <div class="w-wrap">
    <?php	if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
      <article <?php post_class() ?>>
        <?php get_template_part('template-parts/single','content'); ?>
      </article>
    <?php }} ?>
  </div>
<?php get_footer(); ?>
