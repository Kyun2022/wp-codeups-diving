<?php get_header(); ?>
<main>
  <!-- mv -->
  <section class="mv">
    <div class="mv__inner">
      <!-- Swiper -->
      <div class="swiper mv__slider js-mv-slider">
        <div class="swiper-wrapper mv__items">
          <?php for ($i = 1; $i <= 4; $i++) : ?>
          <?php
            $mvPC = get_field('mvPC' . $i); // PCの画像配列
            $mvSP = get_field('mvSP' . $i); // SPの画像配列
            if ($mvPC || $mvSP) :
            ?>
          <div class="swiper-slide mv__item">
            <picture>
              <!-- URLの場合 PC-->
              <?php if ($mvPC && isset($mvPC['url'])) : ?>
              <source srcset="<?php echo esc_url($mvPC['url']); ?>" media="(min-width: 768px)" alt="mvの画像" />
              <?php endif; ?>

              <!-- URLの場合 SP-->
              <?php if ($mvSP && isset($mvSP['url'])) : ?>
              <img src="<?php echo esc_url($mvSP['url']); ?>" alt="mvの画像" />
              <?php endif; ?>
            </picture>
          </div>
          <?php endif; ?>
          <?php endfor; ?>
        </div>
      </div>
      <div class="mv__title">
        <h2 class="mv__title-text">DIVING</h2>
        <p class="mv__title-subtext">into&nbsp;the&nbsp;ocean</p>
      </div>
    </div>
  </section>

  <!-- campaign -->
  <section class="campaign top-campaign">
    <div class="campaign__inner inner">
      <div class="campaign__title title title--center">
        <p class="title__text">campaign</p>
        <h2 class="title__sub-text">キャンペーン</h2>
      </div>
      <!-- Swiper -->
      <div class="swiper campaign__slider slider js-campaign-slider">
        <div class="swiper-wrapper slider__items">
          <?php
          $args = array(
            "post_type" => "campaign",
            "posts_per_page" => -1,
            "orderby" => "rand",
          );

          //配列で指定した内容で、記事情報を取得
          $campaign_query = new WP_Query($args);
          ?>
          <!-- 取得した記事情報の表示 -->
          <?php if ($campaign_query->have_posts()) : ?>
          <!-- ↓ ループ開始 ↓ -->
          <?php while ($campaign_query->have_posts()) : $campaign_query->the_post(); ?>
          <!-- ここに投稿がある場合の記述 -->
          <article class="swiper-slide slider__item">
            <figure class="slider__image">
              <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('full'); ?>
              <?php else : ?>
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/noimage.jpg"
                alt="noimage画像" />
              <?php endif; ?>
            </figure>
            <div class="slider__body">
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
              <h3 class="slider__title">
                <!-- タイトル20文字制限 -->
                <?php echo wp_trim_words(get_the_title(), 20, '...'); ?>
              </h3>
              <div class="slider__meta">
                <h4 class="slider__sub-title"><?php the_field("campaign-money-text"); ?></h4>
                <div class="slider__price-unit">
                  <p class="slider__old-price slider__old-price--layout">
                    &#165;<?php
                                $old_price = number_format(get_field("campaign-old-price"));
                                echo $old_price;
                                ?>
                  </p>
                  <p class="slider__new-price">
                    &#165;<?php
                              $new_price = number_format(get_field("campaign-new-price"));
                              echo $new_price;
                              ?></p>
                </div>
              </div>
            </div>
          </article>
          <?php endwhile;
            wp_reset_postdata();  ?>
        </div>
        <?php else : ?>
        <!-- ここに投稿がない場合の記述 -->
        <p>記事が投稿されていません</p>
        <?php endif; ?>
      </div>
      <!-- 前後の矢印 -->
      <div class="slider__button">
        <div class="slider__nextButton slider__nextButton--md-none"></div>
        <div class="slider__prevButton slider__prevButton--md-none"></div>
      </div>
      <div class="campaign__button">
        <button class="button"
          onclick="location.href='<?php echo esc_url(home_url('campaign')); ?>'">View&nbsp;more<span
            class="button__arrow"></span></button>
      </div>
    </div>
  </section>

  <!-- aboutUs -->
  <section class="aboutUs top-aboutUs">
    <div class="aboutUs__inner inner">
      <div class="aboutUs__title title title--center">
        <p class="title__text">about&nbsp;us</p>
        <h2 class="title__sub-text">私たちについて</h2>
      </div>
      <div class="aboutUs__images">
        <figure class="aboutUs__image-sky">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-pc_1.jpg"
            alt="青空の背景の中、屋根の上に紅色のシーダーがこちらを見ている様子">
        </figure>
        <figure class="aboutUs__image-sea">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-pc_2.jpg"
            alt="透き通った海の中を２匹の黄色い魚が泳いでいる様子">
        </figure>
      </div>
      <div class="aboutUs__container">
        <div class="aboutUs__title-block">
          <h2 class="aboutUs__sub-title">Dive&nbsp;into<br>the&nbsp;Ocean</h2>
        </div>
        <div class="aboutUs__meta">
          <p class="aboutUs__text text">
            私たちは情熱を持ってダイビングの世界を案内するダイビングインストラクター集団です。海の美しさと驚異に魅了され、その素晴らしさを多くの人々と共有することに情熱を燃やしています。安全性を最優先に考えながら、初心者から経験豊富なダイバーまで、様々なレベルの方々に楽しいダイビング体験を提供しています。
          </p>
          <div class="aboutUs__button">
            <button class="button"
              onclick="location.href='<?php echo esc_url(home_url('about-us')); ?>'">View&nbsp;more<span
                class="button__arrow"></span></button>
          </div>
        </div>
      </div>
    </div>
    <figure class="aboutUs__decoration aboutUs__decoration--md-none"><img
        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/coral-reef.png" alt="珊瑚礁の画像"></figure>
  </section>

  <!-- information -->
  <section class="information top-information">
    <div class="information__inner inner">
      <div class="information__title title title--center">
        <p class="title__text">information</p>
        <h2 class="title__sub-text">ダイビング情報</h2>
      </div>
      <div class="information__container">
        <figure class="information__image js-slideColor">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-pc.jpg" alt="海の中で黄色の魚が泳ぐ様子">
        </figure>
        <div class="information__body">
          <div class="information__header">
            <h3 class="information__sub-title">ライセンス講習</h3>
          </div>
          <div class="information__meta">
            <p class="information__text text">
              当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
            </p>
          </div>
          <div class="information__button">
            <button class="button"
              onclick="location.href='<?php echo esc_url(home_url('information')); ?>'">View&nbsp;more<span
                class="button__arrow"></span></button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- blog -->
  <section class="blog top-blog">
    <div class="blog__bgImage blog__bgImage--md-none"><img
        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-bg.jpg" alt="海の中イメージした様子"></div>
    <figure class="blog__decoration blog__decoration--md-none"><img
        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fishes-white.png" alt="魚の群れの様子"></figure>
    <div class="blog__inner inner">
      <div class="blog__title title title--center">
        <p class="title__text title__text--white">blog</p>
        <h2 class="title__sub-text title__sub-text--white">ブログ</h2>
      </div>
      <div class="blog__container">
        <?php
        $args = array(
          "post_type" => "post",
          "posts_per_page" => 3,
          "orderby" => "rand",
        );
        //配列で指定した内容で、記事情報を取得
        $blog_query = new WP_Query($args);
        ?>
        <!-- 取得した記事情報の表示 -->
        <?php if ($blog_query->have_posts()) : ?>
        <div class="blog__cards blog-cards">
          <!-- ↓ ループ開始 ↓ -->
          <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
          <!-- ここに投稿がある場合の記述 -->
          <article class="blog-cards__item card">
            <a href="<?php the_permalink(); ?>">
              <figure class="card__image card__image--hover">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', array()); ?>
                <?php else : ?>
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/noimage.jpg"
                  alt=" noimage画像" />
                <?php endif; ?>
              </figure>
              <div class="card__body">
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
          <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
        <?php else : ?>
        <!-- ここに投稿がない場合の記述 -->
        <p>記事が投稿されていません</p>
        <?php endif; ?>

        <div class="blog__button">
          <button class="button" onclick="location.href='<?php echo esc_url(home_url('blog')); ?>'">View&nbsp;more<span
              class="button__arrow"></span></button>
        </div>
      </div>
    </div>
  </section>

  <!-- voice -->
  <section class="voice top-voice">
    <figure class="voice__top-decoration voice__top-decoration--md-none"><img
        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fishes-right.png" alt="魚の群れの様子"></figure>
    <div class="voice__inner inner">
      <div class="voice__title title title--center">
        <p class="title__text">voice</p>
        <h2 class="title__sub-text">お客様の声</h2>
      </div>

      <div class="voice__container boxes">
        <div class="boxes__items">
          <?php
          $args = array(
            "post_type" => "voice",
            "posts_per_page" => 2,
            "orderby" => "rand",
          );

          //配列で指定した内容で、記事情報を取得
          $voice_query = new WP_Query($args);
          ?>
          <!-- 取得した記事情報の表示 -->
          <?php if ($voice_query->have_posts()) : ?>
          <!-- ↓ ループ開始 ↓ -->
          <?php while ($voice_query->have_posts()) : $voice_query->the_post(); ?>
          <!-- ここに投稿がある場合の記述 -->
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
        <!-- ここに投稿がない場合の記述 -->
        <p>記事が投稿されていません</p>
        <?php endif;
          wp_reset_postdata(); ?>
      </div>
      <div class="voice__button">
        <button class="button" onclick="location.href='<?php echo esc_url(home_url('voice')); ?>'">View&nbsp;more<span
            class="button__arrow"></span></button>
      </div>
    </div>
    <figure class="voice__bottom-decoration voice__bottom-decoration--md-none"><img
        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/seahorse.png" alt="竜の落とし子のデザイン"></figure>
  </section>

  <!-- price -->
  <section class="price top-price">
    <div class="price__inner inner">
      <div class="prive__title title title--center">
        <p class="title__text">price</p>
        <h2 class="title__sub-text">料金一覧</h2>
      </div>
      <div class="price__container">
        <picture class="price__images js-slideColor">
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc.jpg"
            media="(min-width:768px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sp.jpg" alt="橙色の大きな亀が泳いでいる様子">
        </picture>
        <ul class="price__menu">
          <li class="price__items">
            <h3 class="price__header">ライセンス講習</h3>
            <?php
            $license_fields = SCF::get_option_meta('price_options', 'license_lists');
            foreach ($license_fields as $license_field_name => $license_value) {
              $license_content = esc_html($license_value['license_content']);
              $license_subContent = esc_html($license_value['license_subContent']);
              $license_price = esc_html($license_value['license_price']);
            ?>
            <?php if ($license_content && $license_subContent && $license_price) : ?>
            <dl class="price__item">
              <dt class="price__label"><?php echo $license_content; ?><?php echo $license_subContent; ?></dt>
              <dd class="price__text">
                &#165;<?php
                          $license_prices = number_format($license_price);
                          echo $license_prices;
                          ?>
              </dd>
            </dl>
            <?php endif; ?>
            <?php } ?>
          </li>
          <li class="price__items">
            <h3 class="price__header">体験ダイビング</h3>
            <?php
            $experience_fields = SCF::get_option_meta('price_options', 'experience_lists');
            foreach ($experience_fields as $experience_field) {
              $experience_content = esc_html($experience_field['experience_content']);
              $experience_subContent = esc_html($experience_field['experience_subContent']);
              $experience_price = esc_html($experience_field['experience_price']);
            ?>
            <?php if ($experience_content && $experience_subContent && $experience_price) : ?>
            <dl class="price__item">
              <dt class="price__label"><?php echo $experience_content; ?><?php echo $experience_subContent; ?></dt>
              <dd class="price__text">
                &#165;<?php
                          $experience_prices = number_format($experience_price);
                          echo $experience_prices;
                          ?>
              </dd>
            </dl>
            <?php endif; ?>
            <?php } ?>
          </li>
          <li class="price__items">
            <h3 class="price__header">ファンダイビング</h3>
            <?php
            $fan_fields = SCF::get_option_meta('price_options', 'fan_lists');
            foreach ($fan_fields as $fan_field) {
              $fan_content = esc_html($fan_field['fan_content']);
              $fan_subContent = esc_html($fan_field['fan_subContent']);
              $fan_price = esc_html($fan_field['fan_price']);
            ?>
            <?php if ($fan_content && $fan_subContent && $fan_price) : ?>
            <dl class="price__item">
              <dt class="price__label"><?php echo $fan_content; ?><?php echo $fan_subContent; ?></dt>
              <dd class="price__text">
                &#165;<?php
                          $fan_prices = number_format($fan_price);
                          echo $fan_prices;
                          ?>
              </dd>
            </dl>
            <?php endif; ?>
            <?php } ?>
          </li>
          <li class="price__items">
            <h3 class="price__header">スペシャルダイビング</h3>
            <?php
            $special_fields = SCF::get_option_meta('price_options', 'special_lists');
            foreach ($special_fields as $special_field) {
              $special_content = esc_html($special_field['special_content']);
              $special_subContent = esc_html($special_field['special_subContent']);
              $special_price = esc_html($special_field['special_price']);
            ?>
            <?php if ($special_content && $special_subContent && $special_price) : ?>
            <dl class="price__item">
              <dt class="price__label"><?php echo $special_content; ?><?php echo $special_subContent; ?></dt>
              <dd class="price__text">
                &#165;<?php
                          $special_prices = number_format($special_price);
                          echo $special_prices;
                          ?>
              </dd>
            </dl>
            <?php endif; ?>
            <?php } ?>
          </li>
        </ul>
      </div>
      <div class="price__button">
        <button class="button" onclick="location.href='<?php echo esc_url(home_url('price')); ?>'">View&nbsp;more<span
            class="button__arrow"></span></button>
      </div>
    </div>
    <figure class="price__decoration price__decoration--md-none"><img
        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fishes-left.png" alt="魚の群れの様子"></figure>
  </section>

  <?php get_footer();  ?>