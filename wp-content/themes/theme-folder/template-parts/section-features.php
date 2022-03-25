<?php if (have_rows('about_section')) : ?>
<?php while (have_rows('about_section')) : the_row(); ?>
<section class="section section-features">

    <div class="container-fluid">
        <div class="row image-row">
            <div class="skew-wrapper">
                <div class="skew-background"></div>
            </div>
            <?php if (have_rows('feature_box_one')) : ?>
            <?php while (have_rows('feature_box_one')) : the_row(); ?>
            <?php $image_five = get_sub_field('feature_image_one'); ?>
            <div class="col-lg-6 col-md-6 col-sm-12 feature-col">
                <div class="feature-box">
                    <h3><?php the_sub_field('title_one')?></h3>


                    <p>Each individual piece of hardware is carefully designed to ensure that your finished product is
                        one that is loved for years to come.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="img-wrapper">
                    <img src="<?php echo $image_five['url']; ?>" />
                </div>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="row image-row row-reverse">
        <div class="skew-wrapper">
                <div class="skew-background-reverse"></div>
            </div>
            <?php if (have_rows('feature_box_two')) : ?>
            <?php while (have_rows('feature_box_two')) : the_row(); ?>
            <div class="col-lg-6 col-md-6 col-sm-12 feature-col">
                <div class="feature-box">
                    <h3><?php the_sub_field('title_two')?></h3>
                    <p>We take pride in knowing that our kitchen cabinets are manufactured with nothing but the the
                        highest quality of workmanship.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="img-wrapper">
                    <!-- <?php $image_six = get_sub_field('feature_image_two'); ?> -->
                    <img src="/wp-content/uploads/2021/04/Picture6.png" />
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="row image-row ">
        <div class="skew-wrapper">
                <div class="skew-background"></div>
            </div>
            <?php if (have_rows('feature_box_three')) : ?>
            <?php while (have_rows('feature_box_three')) : the_row(); ?>
            <?php $image_seven = get_sub_field('feature_image_three'); ?>
            <div class="col-lg-6 col-md-6 col-sm-12 feature-col">
                <div class="feature-box">
                    <h3><?php the_sub_field('title_three')?></h3>
                    <p>Durability and reliability are important. When you work with us you are getting a product that is
                        designed with both in mind.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="img-wrapper">
                    <img src="<?php echo $image_seven['url']; ?>" />
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>