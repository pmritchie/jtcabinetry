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

    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<!--/About Section-->