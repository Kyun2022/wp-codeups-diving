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
  <div class="sub-voice under-voice">
    <figure class="sub-voice__decoration"><img
        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-right.png" alt="魚の群れの様子"></figure>
    <div class="sub-voice__inner inner">
      <div class="sub-voice__tab tab">
        <!-- 指定したカテゴリー(ターム)のみ表示(投稿が無いものは表示されない) -->
        <p class="tab__text current-cat">
          <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>">ALL</a>
        </p>
        <?php
        $voice_taxonomy_terms = get_terms('voice_category', array('hide_empty' => false));
        foreach ($voice_taxonomy_terms as $voice_taxonomy_term) :
          if (!in_array($voice_taxonomy_term->slug, array('voice-license', 'voice-experience', 'voice-fan'))) continue;
        ?>
        <p class="tab__text">
          <a href="<?php echo esc_url(get_term_link($voice_taxonomy_term, 'voice_category')); ?>"><?php echo esc_html($voice_taxonomy_term->name); ?>
          </a>
        </p>
        <?php endforeach; ?>
      </div>
      <div class="sub-voice__container boxes">
        <div class="boxes__items boxes__items--sub">
          <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1; //pagedに渡す変数
          query_posts($query_string . '&posts_per_page=6&paged=' . $paged); //pagedとposts_per_pageの指定
          ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <article class="boxes__item box">
            <div class="box__container">
              <div class="box__header">
                <div class="box__wrapper">
                  <p class="box__gender">
                    <?php the_field("voice-age"); ?>代&#040;<?php the_field("voice-gender") ?>&#041;
                  </p>
                  <?php
                      $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                      if (!empty($taxonomy_terms)) {
                        $limit = 5;
                        $count = 0;
                        foreach ($taxonomy_terms as $taxonomy_term) {
                          if ($count < $limit) {
                            echo '<span class="box__label">' . esc_html($taxonomy_term->name) . '</span>';
                            $count++;
                          } else {
                            break;
                          }
                        }
                      }
                      ?>
                </div>
                <h3 class="box__title">
                  <!-- タイトル40文字制限 -->
                  <?php echo wp_trim_words(get_the_title(), 40, '...'); ?>
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
              <p class="box__text text"><?php the_field("voice-text"); ?></p>
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