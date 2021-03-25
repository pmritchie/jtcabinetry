<?php /* Template Name: ENTER NAME HERE*/ ?>

<?php get_header(); ?>

<!--Hero-->
<?php if (have_rows('hero')) : ?>
<?php while (have_rows('hero')) : the_row(); ?>
<section class="section hero-section">
<div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="hero-content">
          <h1><?php the_sub_field('hero_title'); ?></h1>
          <h3><?php the_sub_field('hero_content'); ?></h3>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<!--/Hero-->


<?php get_footer(); ?>
