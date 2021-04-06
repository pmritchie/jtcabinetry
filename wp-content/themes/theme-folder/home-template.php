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
        <p>Contact Us: <a href=mailto:<?php the_sub_field('email'); ?> title="click to email" tabindex="3"> <?php the_sub_field('email'); ?></a></p>
        <p>Call: <a href=<?php the_sub_field('phone_number'); ?> title="click to call" tabindex="4"><?php the_sub_field('phone_number'); ?> </a></p>
        </div>
      </div>
    </div>
    <div class="row">
    <?php 
      $image_one = get_sub_field('image_one');
      $image_two = get_sub_field('image_two');
      $image_three = get_sub_field('image_three');
      $image_four = get_sub_field('image_four');
    ?>
      <div class="col-lg-3">
        <div class="img-wrapper">
          <img src="<?php echo $image_one['url']?>"/>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="img-wrapper">
          <img src="<?php echo $image_two['url']?>"/>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="img-wrapper">
          <img src="<?php echo $image_three['url']?>"/>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="img-wrapper">
          <img src="<?php echo $image_four['url']?>"/>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<!--/Hero-->

<!--About Section-->
<?php if (have_rows('about_section')) : ?>
<?php while (have_rows('about_section')) : the_row(); ?>
<section class="section about-section">
  <div class="container">
    <div class="row feature-row">
      <div class="col-12">
        <div class="about">
          <h2><?php the_sub_field('about_title')?></h2>
          <p><?php the_sub_field('about_content')?></p>
        </div>
      </div>
    </div>
    <div class="row image-row">
    <?php if (have_rows('feature_box_one')) : ?>
    <?php while (have_rows('feature_box_one')) : the_row(); ?>
    <?php $image_five = get_sub_field('feature_image_one'); ?>
      <div class="col-lg-4">
        <div class="feature-box">
          <h3><?php the_sub_field('title_one')?></h3>
          
          <div class="img-wrapper">
            <img src="<?php echo $image_five['url']; ?>"/>
          </div>
          <p>Put some content here. Could be a discription, features of the product or customer service stuff. Maybe even testimonials</p>
        </div>
      </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php if (have_rows('feature_box_two')) : ?>
    <?php while (have_rows('feature_box_two')) : the_row(); ?>
      <div class="col-lg-4">
        <div class="feature-box">
        <h3><?php the_sub_field('title_two')?></h3>

          <div class="img-wrapper">
            <!-- <?php $image_six = get_sub_field('feature_image_two'); ?> -->
            <img src="/wp-content/uploads/2021/04/Picture6.png"/>
          </div>
          <p>Put some content here. Could be a discription, features of the product or customer service stuff. Maybe even testimonials</p>
        </div>
      </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php if (have_rows('feature_box_three')) : ?>
    <?php while (have_rows('feature_box_three')) : the_row(); ?>
   <?php $image_seven = get_sub_field('feature_image_three'); ?>
      <div class="col-lg-4">
        <div class="feature-box">
          <h3><?php the_sub_field('title_three')?></h3>
          
          <div class="img-wrapper">
            <img src="<?php echo $image_seven['url']; ?>"/>
          </div>
          <p>Put some content here. Could be a discription, features of the product or customer service stuff. Maybe even testimonials</p>
        </div>
      </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<!--/About Section-->

<?php get_footer(); ?>
