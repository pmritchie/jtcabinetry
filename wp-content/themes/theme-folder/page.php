<?php get_header(); ?>
  <div class="w-wrap">
    <?php	if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
      <article <?php post_class() ?>>
        <header>
          <h1><?php the_title(); ?></h1>
        </header>
        <?php get_template_part('template-parts/single','content'); ?>
      </article>
    <?php }} ?>
  </div>
<?php get_footer(); ?>

