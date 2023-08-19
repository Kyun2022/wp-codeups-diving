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

  <div class="sub-campaign under-campaign">
    <figure class="sub-campaign__decoration">
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-right.png" alt="魚の群れの様子">
    </figure>
    <div class="sub-campaign__inner inner">
      <div class="sub-campaign__tab tab">
        <div class="sub-campaign__tab tab">
          <?php
          $current_term_id = get_queried_object()->term_id;
          $terms = get_terms(array(
            // 表示するタクソノミースラッグを記述
            'taxonomy' => 'campaign_category',
            'orderby' => 'name',
            'order'   => 'ASC',
            // 表示するタームの数を指定
            'number'  => 3
          ));

          // カスタム投稿一覧ページへのURL
          $campaign_category_class = (is_post_type_archive()) ? 'current-cat' : '';
          $campaign_category_link = sprintf(
            //カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
            '<p class="tab__text %s"><a href="%s" alt="%s">ALL</a></p>',
            $campaign_category_class,
            // カスタム投稿一覧ページのスラッグを指定
            esc_url(home_url('campaign')),
            esc_attr(__('View all posts', 'textdomain'))
          );
          echo sprintf(esc_html__('%s', 'textdomain'), $campaign_category_link);

          // タームのリンク
          if ($terms) {
            foreach ($terms as $term) {
              // カレントクラスに付与するクラスを指定できる
              $term_class = ($current_term_id === $term->term_id) ? 'current-cat' : '';
              $term_link = sprintf(
                // 各タームに付与するクラスを指定できる
                '<p class="tab__text %s"><a href="%s" alt="%s">%s</a></p>',
                $term_class,
                esc_url(get_term_link($term->term_id)),
                esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $term->name)),
                esc_html($term->name)
              );
              echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
            }
          }
          ?>
        </div>

      </div>


      <div class="sub-campaign__menu">
        <div class="sub-campaign__items slider">
          <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1; //pagedに渡す変数
          query_posts($query_string . '&posts_per_page=4&paged=' . $paged); //pagedとposts_per_pageの指定

          ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <article class="slider__item" id="campaign1">
            <figure class="slider__image">
              <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('full'); ?>
              <?php else : ?>
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/noImage.jpg"
                alt="NoImage画像" />
              <?php endif; ?>
            </figure>
            <div class="slider__body slider__body--layout">
              <!-- 指定したカテゴリー(ターム)のみ表示 -->
              <?php
                  $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                  foreach ($taxonomy_terms as $taxonomy_term) {
                    if (!in_array($taxonomy_term->slug, array('license', 'experience', 'fan')))
                      continue;
                    echo '<p class="slider__label ' . $taxonomy_term->slug . '">' . $taxonomy_term->name . '</p>';
                  }
                  ?>

              <h3 class="slider__title slider__title--layout">
                <!-- タイトル40文字制限 -->
                <?php echo wp_trim_words(get_the_title(), 40, '...'); ?>
              </h3>
              <div class="slider__meta slider__meta--layout">
                <h4 class="slider__sub-title"><?php the_field("campaign-money-text"); ?></h4>
                <div class="slider__price-unit slider__price-unit--layout">
                  <p class="slider__old-price slider__old-price--layout">&#165;<?php the_field("campaign-old-price"); ?>
                  </p>
                  <p class="slider__new-price">&#165;<?php the_field("campaign-new-price"); ?></p>
                </div>
              </div>
              <p class="about__title"><?php the_field("custom-textarea"); ?></p>
              <div class="slider__detail slider__detail--md-none">
                <p class="slider__text text"><?php the_field("campaign-main-text"); ?></p>
                <div class="slider__box">
                  <p class="slider__date"><?php the_field("campaign-period"); ?></p>
                  <p class="slider__sub-text"><?php the_field("campaign-info"); ?></p>
                  <div class="slider__button-block">
                    <button class="button"
                      onclick="location.href='<?php echo esc_url(home_url('contact')); ?>'">contact&nbsp;us<span™
                        class="button__arrow"></span™></button>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <?php endwhile; ?>
        </div>
        <?php else : ?>
        <!-- ここに投稿がない場合の記述 -->
        <p>記事が投稿されていません</p>
        <?php endif;
          wp_reset_postdata(); ?>
      </div>

      <div class="sub-campaign__pageNation pageNation">
        <ul class="pageNation__items wp-pagenavi">
          <?php wp_pagenavi(); ?>
        </ul>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>