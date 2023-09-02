<?php get_header(); ?>
<main>

  <?php get_template_part('parts/hero'); ?>

  <?php get_template_part('parts/breadcrumb'); ?>


  <div class="sub-campaign under-campaign">
    <figure class="sub-campaign__decoration"><img
        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-right.png" alt="魚の群れの様子"></figure>
    <div class="sub-campaign__inner inner">
      <div class="sub-campaign__tab tab">
        <!-- 指定したカテゴリー(ターム)のみ表示(投稿が無いものは表示されない) -->
        <p class="tab__text current-cat">
          <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">ALL</a>
        </p>
        <?php
        $taxonomy_terms = get_terms('campaign_category', array('hide_empty' => false));
        foreach ($taxonomy_terms as $taxonomy_term) :
          if (!in_array($taxonomy_term->slug, array('license', 'experience', 'fan'))) continue;
        ?>
        <p class="tab__text">
          <a href="<?php echo esc_url(get_term_link($taxonomy_term, 'campaign_category')); ?>"><?php echo esc_html($taxonomy_term->name); ?>
          </a>
        </p>
        <?php endforeach; ?>
      </div>


      <div class="sub-campaign__menu">
        <div class="sub-campaign__items slider">
          <?php if (have_posts()) :
            $post_count = 0; // カウンターを初期化
            while (have_posts()) : the_post();
              $post_count++; // ポストごとにカウントを加算
          ?>
          <article class="slider__item" id="campaign<?php echo $post_count; ?>">
            <figure class="slider__image">
              <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('full'); ?>
              <?php else : ?>
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/noimage.jpg"
                alt="noimage画像" />
              <?php endif; ?>
            </figure>
            <div class="slider__body slider__body--layout">
              <?php
                  $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                  if (!empty($taxonomy_terms)) {
                    $limit = 5;
                    $count = 0;
                    foreach ($taxonomy_terms as $taxonomy_term) {
                      if ($count < $limit) {
                        echo '<p class="slider__label">' . esc_html($taxonomy_term->name) . '</p>';
                        $count++;
                      } else {
                        break;
                      }
                    }
                  }
                  ?>
              <h3 class="slider__title slider__title--layout">
                <!-- タイトル20文字制限 -->
                <?php echo wp_trim_words(get_the_title(), 20, '...'); ?>
              </h3>
              <div class="slider__meta slider__meta--layout">
                <h4 class="slider__sub-title"><?php the_field("campaign-money-text"); ?></h4>
                <div class="slider__price-unit slider__price-unit--layout">
                  <p class="slider__old-price slider__old-price--layout">
                    &#165;<?php
                              $old_price = get_field("campaign-old-price");
                              if ($old_price !== null) {
                                $formatted_old_price = number_format($old_price);
                                echo $formatted_old_price;
                              }
                              ?>
                  </p>
                  <p class="slider__new-price">
                    &#165;<?php
                              $new_price = get_field("campaign-new-price");
                              if ($new_price !== null) {
                                $formatted_new_price = number_format($new_price);
                                echo $formatted_new_price;
                              }
                              ?>

                  </p>
                </div>
              </div>
              <div class="slider__detail slider__detail--md-none">
                <p class="slider__text text"><?php the_field("campaign-main-text"); ?></p>
                <div class="slider__box">
                  <p class="slider__date"><?php the_field("campaign-period"); ?></p>
                  <p class="slider__sub-text"><?php the_field("campaign-info"); ?></p>
                  <div class="slider__button-block">
                    <button class="button"
                      onclick="location.href='<?php echo esc_url(home_url('contact')); ?>'">contact&nbsp;us<span
                        class="button__arrow"></span></button>
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
        <?php endif; ?>
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