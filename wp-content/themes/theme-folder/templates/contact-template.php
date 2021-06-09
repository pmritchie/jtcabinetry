<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>
<!--Hero-->
<?php if (have_rows('contact_section')) : ?>
<?php while (have_rows('contact_section')) : the_row(); ?>
<section class="section hero-section">
  <div class="container">
    <div class="row hero-row">
      <div class="col-lg-5 col-md-6 col-sm-12 content-col">
        <div class="hero-content">
          <h1><?php the_sub_field('contact_title'); ?></h1>
          <p><?php the_sub_field('contact_content');?></p>
          <div class="img-wrapper">
            <?php $envelope = get_sub_field('image'); ?>
            <img src="<?php echo $envelope; ?>" />
          </div>
     
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-12 form-column">
          <?php echo do_shortcode("[contact-form-7 id=175 title=Contact form 1 tabindex=50]"); ?>
      </div>
    </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<!--/Hero-->

<?php get_footer(); ?>