<?php get_header(); ?>
<main>
  <?php get_template_part('parts/hero'); ?>

  <?php get_template_part('parts/breadcrumb'); ?>


  <div class="sub-voice under-voice">
    <figure class="sub-voice__decoration"><img
        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-right.png" alt="魚の群れの様子"></figure>
    <div class="sub-voice__inner inner">
      <div class="sub-voice__tab tab">
        <?php
        $voice_current_term_id = get_queried_object()->term_id;
        $voice_terms = get_terms(array(
          // 表示するタクソノミースラッグを記述
          'taxonomy' => 'voice_category',
          'orderby' => 'name',
          'order'   => 'ASC',
          // 表示するタームの数を指定
          'number'  => 3
        ));

        // カスタム投稿一覧ページへのURL
        $voice_category_class = (is_post_type_archive()) ? 'current-cat' : '';
        $voice_category_link = sprintf(
          //カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
          '<p class="tab__text %s"><a href="%s" alt="%s">ALL</a></p>',
          $voice_category_class,
          // カスタム投稿一覧ページのスラッグを指定
          esc_url(home_url('voice')),
          esc_attr(__('View all posts', 'textdomain'))
        );
        echo sprintf(esc_html__('%s', 'textdomain'), $voice_category_link);

        // タームのリンク
        if ($voice_terms) {
          foreach ($voice_terms as $voice_term) {
            // カレントクラスに付与するクラスを指定できる
            $voice_term_class = ($voice_current_term_id === $voice_term->term_id) ? 'current-cat' : '';
            $voice_term_link = sprintf(
              // 各タームに付与するクラスを指定できる
              '<p class="tab__text %s"><a href="%s" alt="%s">%s</a></p>',
              $voice_term_class,
              esc_url(get_term_link($voice_term->term_id)),
              esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $voice_term->name)),
              esc_html($voice_term->name)
            );
            echo sprintf(esc_html__('%s', 'textdomain'), $voice_term_link);
          }
        }
        ?>
      </div>
      <div class="sub-voice__container boxes">
        <div class="boxes__items boxes__items--sub">
          <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1; //pagedに渡す変数
          ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <article class="boxes__item box">
            <div class="box__container">
              <div class="box__header">
                <div class="box__wrapper">
                  <p class="box__gender">
                    <?php the_field("voice-age"); ?>代&#040;<?php the_field("voice-gender") ?>&#041;
                  </p>
                  <!-- 指定したカテゴリー(ターム)のみ表示 -->
                  <?php
                      $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                      foreach ($taxonomy_terms as $taxonomy_term) {
                        if (!in_array($taxonomy_term->slug, array('voice-license', 'voice-experience', 'voice-fan')))
                          continue;
                        echo '<span class="box__label ' . $taxonomy_term->slug . '">' . $taxonomy_term->name . '</span>';
                      }
                      ?>
                </div>
                <h3 class="box__title">
                  <!-- タイトル20文字制限 -->
                  <?php echo wp_trim_words(get_the_title(), 20, '...'); ?>
                </h3>
              </div>
              <figure class="box__image js-slideColor">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); ?>
                <?php else : ?>
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/noimage.jpg"
                  alt="noimage画像" />
                <?php endif; ?>
              </figure>
            </div>
            <div class="box__meta">
              <p class="box__text text">
                <!-- タイトル170文字制限 -->
                <?php echo wp_trim_words(get_field("voice-text"), 170, '...'); ?>
              </p>
            </div>
          </article>
          <?php endwhile; ?>
        </div>

        <?php else : ?>
        <p>記事が投稿されていません</p>
        <?php endif; ?>
      </div>
      <div class="sub-voice__pageNation pageNation">
        <ul class="pageNation__items wp-pagenavi">
          <?php wp_pagenavi(); ?>
        </ul>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>