<?php /* Template Name: Services Page*/ ?>

<?php get_header(); ?>

<!--Hero-->
<?php if (have_rows('services_hero')) : ?>
<?php while (have_rows('services_hero')) : the_row(); ?>
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


<section class="section feature-section">
  <div class="container">
  <?php if (have_rows('service_one')) : ?>
  <?php while (have_rows('service_one')) : the_row(); ?>
    <div class="row row-one">
     <div class="col-lg-6 col-md-6 col-sm-12 left-col">
     <div class="content-wrapper">
        <h3><?php the_sub_field('title'); ?></h3>
        <p><?php the_sub_field('content'); ?></p>
       </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12 right-col">
     <?php $image_one = get_sub_field('image'); ?>
          <div class="img-wrapper">
            <img src="<?php echo $image_one; ?>" />
          </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('service_two')) : ?>
    <?php while (have_rows('service_two')) : the_row(); ?>
    <div class="row row-two">
     <div class="col-lg-6 col-md-6 col-sm-12 left-col">
       <div class="content-wrapper">
        <h3><?php the_sub_field('title'); ?></h3>
        <p><?php the_sub_field('content'); ?></p>
       </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 right-col">
        <?php $image_two = get_sub_field('image'); ?>
        <div class="img-wrapper">
          <img src="<?php echo $image_two; ?>" />
        </div>
     </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>