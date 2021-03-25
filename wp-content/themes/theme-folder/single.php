<?php get_header(); ?>

<?php
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 5,
);
$the_query = new WP_Query($args); ?>

<main role="main"
  aria-label="Content">
  <section class="section article-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-sm-12 article-column">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <!-- article -->
          <article id="post-<?php the_ID(); ?>"
            <?php post_class(); ?>>

            <!-- post thumbnail -->
            <?php if (has_post_thumbnail()) : // Check if Thumbnail exists.
                ?>
            <a href="<?php the_permalink(); ?>"
              title="<?php the_title_attribute(); ?>">
              <?php the_post_thumbnail(); // Fullsize image for the single post.
                    ?>
            </a>
            <?php endif; ?>
            <!-- /post thumbnail -->

            <!-- post title -->
            <h2 class="title">
              <?php the_title(); ?>
            </h2>
            <!-- /post title -->


            <?php the_content(); // Dynamic Content.
                ?>

          </article>
          <!-- /article -->
        </div>

        <!--Article Section-->

        <div class="col-lg-3 col-sm-12">
          <?php get_template_part('/template-parts/partials/side-bar', 'side-bar.php'); ?>
          <div class="news-sidebar">
            <h4>Recent News</h4>
            <?php if ($the_query->have_posts()) {
                echo '<ul>';
                while ($the_query->have_posts()) {
                  $the_query->the_post();


                  echo '<li><a href=' . get_permalink() . '> ' . get_the_title() . '</a></li>';
                }
                echo '</ul>'; ?>


            <?php wp_reset_postdata();
              } else {
                echo "no posts found";
              }

            ?>

          </div>
        </div>

      </div>
    </div>
  </section>
  <!--/Article Section-->

  <?php endwhile; ?>

  <?php else : ?>

  <!-- article -->
  <article>

    <h1><?php esc_html_e('Sorry, nothing to display.', 'simplesale'); ?></h1>

  </article>
  <!-- /article -->

  <?php endif; ?>

  <?php get_template_part('template-parts/partials/cta', 'cta.php'); ?>
  <?php get_template_part('template-parts/partials/tree-trek-adventure', 'tree-trek-adventure.php'); ?>

</main>
<?php get_footer(); ?>
