<!--Hero-->
<?php if (have_rows('hero')) : ?>
<?php while (have_rows('hero')) : the_row(); ?>
<section class="section hero-section">
    <div class="container-fluid">
        <?php 
        $image_one = get_sub_field('image_one');
        $image_two = get_sub_field('image_two');
        $image_three = get_sub_field('image_three');
        $image_four = get_sub_field('image_four');
      ?>
        <div class="row hero-slider">
            <div class="img-outside-wrapper">
                <div class="img-wrapper" style="background-image: url('<?php echo $image_one['url']?>');">
                    <div class="content col-sm-12 col-md-8 col-lg-3">
                        <h2>JT CABINETS</h2>
                        <p>High Quality Cabinets</p>
                    </div>
                </div>

            </div>
            <div>
                <div class="img-wrapper" style="background-image: url('<?php echo $image_two['url']?>');">
                    <div class="content col-sm-12 col-md-8 col-lg-3">
                        <h2>JT CABINETS</h2>
                        <p>High Quality Cabinets</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="img-wrapper" style="background-image: url('<?php echo $image_three['url']?>');">
                    <div class="content col-sm-12 col-md-8 col-lg-3">
                        <h2>JT CABINETS</h2>
                        <p>High Quality Cabinets</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="img-wrapper" style="background-image: url('<?php echo $image_four['url']?>');">
                    <div class="content col-sm-12 col-md-8 col-lg-3">
                        <h2>JT CABINETS</h2>
                        <p>High Quality Cabinets</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<!--/Hero-->