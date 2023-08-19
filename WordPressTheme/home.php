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
    <figure class="sub-blog__decoration"><img
        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-right.png" alt="魚の群れの様子"></figure>
    <div class="sub-blog__inner inner">
      <div class="sub-blog__container">
        <div class="sub-blog__main-container cards">
          <?php if (have_posts()) : ?>
          <div class="cards__items">
            <?php while (have_posts()) : the_post(); ?>
            <article class="cards__item card">
              <a href="<?php the_permalink(); ?>">
                <figure class="card__image card__image--hover">
                  <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('full'); ?>
                  <?php else : ?>
                  <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/noImage.jpg"
                    alt=" NoImage画像" />
                  <?php endif; ?>
                </figure>
                <div class=" card__body">
                  <div class="card__header">
                    <time datetime="<?php echo get_the_date('Y-m-d'); ?>"
                      class="card__date"><?php echo get_the_date('Y.m.d'); ?></time>
                    <h3 class="card__title">
                      <!-- タイトル40文字制限 -->
                      <?php echo wp_trim_words(get_the_title(), 60, '...'); ?>
                    </h3>
                  </div>
                  <div class="card__meta">
                    <p class="card__text text">
                      <!-- 本文40文字制限 -->
                      <?php echo wp_trim_words(get_the_content(), 80, '...'); ?>
                    </p>
                  </div>
                </div>
              </a>
            </article>
            <?php endwhile; ?>
          </div>
          <?php else : ?>
          <p>記事が投稿されていません</p>
          <?php endif; ?>

          <div class="sub-blog__pageNation pageNation">
            <ul class="pageNation__items">
              <?php wp_pagenavi(); ?>
            </ul>
          </div>
        </div>

        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>