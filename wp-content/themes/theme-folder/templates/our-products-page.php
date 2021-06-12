<?php /* Template Name: Products Page*/ ?>

<?php get_header(); ?>

<!--Hero-->
<?php if (have_rows('products_hero')) : ?>
<?php while (have_rows('products_hero')) : the_row(); ?>
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
<div class="containter">
  <?php if (have_rows('product_one')) : ?>
  <?php while (have_rows('product_one')) : the_row(); ?>
  <div class="row feature-row">
    <div class="col-lg-10 col-md-10 col-sm-12">
      <div class="feature-box">
        <div class="image-box">
          <?php 
            $image_p1 = get_sub_field('image_one'); 
            $image_p2 = get_sub_field('image_two'); 
            $image_p3 = get_sub_field('image_three'); 
            $image_p4 = get_sub_field('image_four'); 
          ?>
          <div class="img-wrapper">
            <img src="<?php echo $image_p1; ?>" />
          </div>
          <div class="img-wrapper">
            <img src="<?php echo $image_p2; ?>" />
          </div>
          <div class="img-wrapper">
            <img src="<?php echo $image_p3; ?>" />
          </div>
          <div class="img-wrapper">
            <img src="<?php echo $image_p4; ?>" />
          </div>
        </div>
        <div class="content-wrapper">
            <h4><?php the_sub_field('product_title')?></h4>
            <p><?php the_sub_field('product_content')?></p>
            <?php the_sub_field('product_dimensions')?>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>

  <?php if (have_rows('product_two')) : ?>
  <?php while (have_rows('product_two')) : the_row(); ?>
  <div class="row feature-row">
    <div class="col-lg-10 col-md-10 col-sm-12">
      <div class="feature-box">
        <div class="image-box">
          <?php 
            $image_p5 = get_sub_field('image_one'); 
            $image_p6 = get_sub_field('image_two'); 
            $image_p7 = get_sub_field('image_three'); 
            $image_p8 = get_sub_field('image_four'); 
          ?>
          <div class="img-wrapper">
            <img src="<?php echo $image_p5; ?>" />
          </div>
          <div class="img-wrapper">
            <img src="<?php echo $image_p6; ?>" />
          </div>
          <div class="img-wrapper">
            <img src="<?php echo $image_p7; ?>" />
          </div>
          <div class="img-wrapper">
            <img src="<?php echo $image_p8; ?>" />
          </div>
        </div>
        <div class="content-wrapper">
            <h4><?php the_sub_field('product_title')?></h4>
            <p><?php the_sub_field('product_content')?></p>
            <?php the_sub_field('product_dimensions')?>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>

  <?php if (have_rows('product_three')) : ?>
  <?php while (have_rows('product_three')) : the_row(); ?>
  <div class="row feature-row">
    <div class="col-lg-10 col-md-10 col-sm-12">
      <div class="feature-box">
        <div class="image-box">
          <?php 
            $image_p9 = get_sub_field('image_one'); 
            $image_p10 = get_sub_field('image_two'); 
            $image_p11 = get_sub_field('image_three'); 
            $image_p12 = get_sub_field('image_four'); 
          ?>
          <div class="img-wrapper">
            <img src="<?php echo $image_p9; ?>" />
          </div>
          <div class="img-wrapper">
            <img src="<?php echo $image_p10; ?>" />
          </div>
          <div class="img-wrapper">
            <img src="<?php echo $image_p11; ?>" />
          </div>
          <div class="img-wrapper">
            <img src="<?php echo $image_p12; ?>" />
          </div>
        </div>
        <div class="content-wrapper">
            <h4><?php the_sub_field('product_title')?></h4>
            <p><?php the_sub_field('product_content')?></p>
            <?php the_sub_field('product_dimensions')?>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>
  </div>
</section>


<!--/Hero-->


<?php get_footer(); ?>
