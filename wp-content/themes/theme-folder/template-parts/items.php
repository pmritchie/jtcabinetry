<?php

function om_loopItem($w=array()){
  ?>
    <article <?php post_class('w-latest-item infinite-post') ?>>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <div class="w-inner">
          <div class="w-img">
            <?php if(has_post_thumbnail()): ?>
              <div class="bg lazy" data-src="<?php the_post_thumbnail_url("om-medium") ?>"></div>
            <?php endif; ?>
          </div>
          <div class="w-text">
            <div class="w-category-name">
              <?php foreach((get_the_category()) as $c){ echo esc_attr($c->name); }	?>
            </div>
            <h2 class="w-title"><?php the_title(); ?></h2>
            <div class="w-disc"><?php the_excerpt() ?></div>
          </div>
        </div>
      </a>
    </article>
  <?php
}