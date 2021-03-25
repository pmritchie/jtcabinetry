<?php /* Template Name: Home Template */ ?>

<?php get_header(); ?>

<div class="modal fade"
  id="homePageVideoModal"
  tabindex="-1"
  role="dialog"
  aria-labelledby="homePageVideoModalLabel"
  aria-hidden="true">
  <div class="modal-dialog"
    role="document">
    <button type="button"
      class="close"
      data-dismiss="modal"
      aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <div class="modal-content">
      <div class="modal-body">
        <div class="video-wrapper embed-responsive embed-responsive-16by9">

        </div>
      </div>
    </div>
  </div>
</div>
<!--Hero-->
<?php if (have_rows('hero')) : ?>
<?php while (have_rows('hero')) : the_row(); ?>
<section class="section hero-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="hero-content">
        <h1><?php the_sub_field('heading'); ?></h1>
        <br> 
        <br>
          <h3><?php the_sub_field('content'); ?></h3>
          <br>
          <a href="mailto:sales@jtcabinetry.com" title="click to email" tabindex="3">sales@jtcabinetry.com</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<!--/Hero-->

<section class="section feature-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="hero-content">
        <h1>Website Coming Soon!</h1>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
