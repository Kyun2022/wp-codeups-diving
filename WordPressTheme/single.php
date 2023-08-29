<?php get_header(); ?>
<main>

  <?php get_template_part('parts/hero'); ?>

  <?php if (function_exists('bcn_display')) { ?>
  <div class="breadcrumb inner">
    <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
      <?php bcn_display(); ?>
    </div>
  </div>
  <?php } ?>

  <div class="sub-blog under-blog">
    <figure class="sub-blog__decoration">
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-right.png" alt="魚の群れの様子">
    </figure>
    <div class="sub-blog__inner inner">
      <div class="sub-blog__container detail">
        <div class="detail__container">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="detail__block">
            <div class="detail__body">
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>"
                class="detail__date"><?php echo get_the_date('Y/m/d'); ?>
              </time>
              <h3 class="detail__title">
                <!-- タイトル40文字制限 -->
                <?php echo wp_trim_words(get_the_title(), 40, '...'); ?>
              </h3>
            </div>
            <div class="detail__items">
              <div class="detail__item">
                <figure class="detail__image">
                  <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('full', array()); ?>
                  <?php else : ?>
                  <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/noimage.jpg")); ?>"
                    alt="noimage画像" />
                  <?php endif; ?>
                </figure>
                <div class="detail__content">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>

          <ul class="detail__pageNation ">
            <?php
            $prev = get_previous_post();
            if (!empty($prev)) {
              $prev_url = esc_url(get_permalink($prev->ID));
            }
            $next = get_next_post();
            if (!empty($next)) {
              $next_url = esc_url(get_permalink($next->ID));
            }
            ?>
            <div class="detail__pageNation-item">
              <?php if (!empty($prev)) : ?>
              <a href="<?php echo $prev_url; ?>">&lt;</a>
              <?php endif; ?>
            </div>
            <div class="detail__pageNation-item">
              <?php if (!empty($next)) : ?>
              <a href="<?php echo $next_url; ?>">&gt;</a>
              <?php endif; ?>
            </div>
          </ul>
        </div>

        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>