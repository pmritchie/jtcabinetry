<?php /* Template Name: Home Template */ ?>

<?php get_header(); ?>

<div class="modal fade" id="homePageVideoModal" tabindex="-1" role="dialog" aria-labelledby="homePageVideoModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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

<?php get_template_part( 'template-parts/section',  'hero'); ?>
<?php get_template_part( 'template-parts/section',  'about'); ?>
<?php get_template_part( 'template-parts/section',  'features'); ?>
<?php get_template_part( 'template-parts/section',  'cta'); ?>

<?php get_footer(); ?>