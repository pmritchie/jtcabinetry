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
<section class="section feature-section">
  <div class="containter">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="feature-box">
          <div class="img-wrapper">
            <img src="<?php the_sub_field('')?>" />
          </div>
          <div class="content-wrapper">
            <h4><?php the_sub_field('title_one')?></h4>
            <p><?php the_sub_field('content_one')?></p>
            <a href="<?php echo $feature_link_one['url']; ?>"><?php echo $feature_link['title']; ?></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="feature-box">
          <div class="img-wrapper">
            <img src="<?php the_sub_field('product_image_one')?>" />
          </div>
          <div class="content-wrapper">
            <h4><?php the_sub_field('title_one')?></h4>
            <p><?php the_sub_field('content_one')?></p>
            <a href="<?php echo $feature_link_one['url']; ?>"><?php echo $feature_link['title']; ?></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="feature-box">
          <div class="img-wrapper">
            <img src="<?php the_sub_field('')?>" />
          </div>
          <div class="content-wrapper">
            <h4><?php the_sub_field('title_one')?></h4>
            <p><?php the_sub_field('content_one')?></p>
            <a href="<?php echo $feature_link_one['url']; ?>"><?php echo $feature_link['title']; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<!--/Hero-->


<?php get_footer(); ?>
