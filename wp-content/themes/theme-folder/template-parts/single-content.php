<!-- single-content -->
<div class="w-single-content">
  <?php the_content(); ?>
</div>
<!-- end -->

<!-- link pages -->
<?php wp_link_pages(array(
  'before' => '<div class="w-link-pages">',
  'after' => '</div>',
  'link_before' => '<span class="">',
  'link_after' => '</span>',
  'separator' => ' - '
)); ?>
<!-- end -->

<!-- tags -->
<?php if (get_theme_mod('w_tagsArticles', 1) && is_single()) : ?>
  <div class="w-tags"><?php the_tags('', '', null); ?></div>
<?php endif; ?>
<!-- end -->

<!-- share buttons -->
<!-- end -->

<!-- author information (shcema optimized) -->
<?php if (get_the_author_meta('description') && get_theme_mod('w_authorBox', 1) && is_single()) : ?>
  <div class="w-author-box">
    <!-- img -->
    <span class="w-img" itemscope itemprop="image" alt="<?php printf(esc_html__('Photo of %s', 'custom-theme'), get_the_author_meta('display_name')); ?>">
      <?php if (function_exists('get_avatar')) {
          echo get_avatar(get_the_author_meta('email'), 100);
        } ?>
    </span>
    <!-- end -->

    <div class="w-text">

      <!-- title -->
      <h5 class="w-author-name" itemprop="url" rel="author">
        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" itemprop="name">
          <span itemprop="author" itemscope itemtype="https://schema.org/Person">
            <?php the_author_meta('display_name'); ?>
          </span>
        </a>
      </h5>
      <!-- end -->
      <div class="w-desc">
        <?php the_author_meta('description'); ?>
        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" title="<?php esc_html_e('More posts...') ?>">
          <?php esc_html_e('More posts...') ?>
        </a>
      </div>
    </div>
  </div>
<?php endif; ?>
<!-- end -->

<!-- comments -->
<?php comments_template('', true); ?>
<!-- end -->

<!-- related -->
<?php if (get_theme_mod('w_relatedArticles', 1) && is_single()) : ?>
  <div class="w-related-posts">
    <h3><?php esc_html_e('Related Posts', 'custom-theme') ?></h3>
    <?php $t = 1;

      global $post;
      $categories = get_the_category($post->ID);
      $catidlist = '';

      foreach ($categories as $category) {
        $catidlist .= $category->cat_ID . ",";
      }

      $custom_query_args = array(
        'posts_per_page' => 2,
        'post__not_in' => array($post->ID),
        'orderby' => 'rand',
        'cat' => $catidlist,
      );
      $custom_query = new WP_Query($custom_query_args);

      while ($custom_query->have_posts()) : $custom_query->the_post();
        om_loopItem();
        $t++;
      endwhile;
      ?>
  </div>
<?php endif; ?>
<!-- end -->
