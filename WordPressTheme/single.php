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
      <div class="sub-blog__container detail">
        <div class="detail__container">
          <div class="detail__body">
            <time datetime="<?php echo get_the_date('Y-m-d'); ?>"
              class="detail__date"><?php echo get_the_date('Y/m/d'); ?></time>
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
                <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/noImage.jpg")); ?>"
                  alt="NoImage画像" />
                <?php endif; ?>
              </figure>
              <div class="detail__content">
                <?php the_content(); ?>
              </div>

            </div>
          </div>
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

        <aside class="sub-blog__aside-container aside">
          <div class="aside__popular-box">
            <div class="aside__title">
              <p class="aside__title-text">人気記事</p>
            </div>
            <div class="aside__popular-items">
              <article class="aside__popular-item card">
                <a href="./blog-detail.html">
                  <figure class="card__image card__image--sub"><img src="./assets/images/common/card_4.jpg"
                      alt="透き通った海の中でピンク色の大きな珊瑚礁が輝いている様子"></figure>
                  <div class="card__body card__body--sub">
                    <time datetime="2023-11-17" class="card__date">2023/11/17</time>
                    <h3 class="card__title">ライセンス取得</h3>
                  </div>
                </a>
              </article>
              <article class="aside__popular-item card">
                <a href="./blog-detail.html">
                  <figure class="card__image card__image--sub"><img src="./assets/images/common/card_2.jpg"
                      alt="透き通った海の中でピンク色の大きな珊瑚礁が輝いている様子"></figure>
                  <div class="card__body card__body--sub">
                    <time datetime="2023-11-17" class="card__date">2023/11/17</time>
                    <h3 class="card__title">ウミガメと泳ぐ</h3>
                  </div>
                </a>
              </article>
              <article class="aside__popular-item card">
                <a href="./blog-detail.html">
                  <figure class="card__image card__image--sub"><img src="./assets/images/common/card_3.jpg"
                      alt="透き通った海の中でピンク色の大きな珊瑚礁が輝いている様子"></figure>
                  <div class="card__body card__body--sub">
                    <time datetime="2023-11-17" class="card__date">2023/11/17</time>
                    <h3 class="card__title">カクレクマノミ</h3>
                  </div>
                </a>
              </article>
            </div>
          </div>
          <div class="aside__review review">
            <div class="aside__title">
              <p class="aside__title-text">口コミ</p>
            </div>
            <article class="boxes__item boxes__item--sub box">
              <div class="box__container box__container--sub">
                <div class="box__header box__header--sub">
                  <p class="box__gender">30代&#040;カップル&#041;</p>
                  <h3 class="box__title box__title--sub">ここにタイトルが入ります。ここにタイトル</h3>
                </div>
                <figure class="box__image box__image--sub">
                  <img src="./assets/images/common/sub-blog__couple.jpg" alt="30代のカップルがソファーに座りながら笑顔でこちらを見ている様子">
                </figure>
              </div>
              <div class="review__button">
                <button class="button" onclick="location.href='./voice.html'">View&nbsp;more<span
                    class="button__arrow"></span></button>
              </div>
            </article>
          </div>
          <div class="aside__campaign aside-campaign">
            <div class="aside__title">
              <p class="aside__title-text">キャンペーン</p>
            </div>
            <div class="aside__container slider">
              <article class="slider__item slider__item--sub">
                <a href="./campaign.html">
                  <figure class="slider__image slider__image--sub"><img src="./assets/images/common/slider_1.jpg"
                      alt="さまざまな色をした魚が群れで泳いでいる様子"></figure>
                  <div class="slider__body slider__body--sub">
                    <h3 class="slider__title slider__title--sub">ライセンス取得</h3>
                    <div class="slider__meta slider__meta--sub">
                      <h4 class="slider__sub-title">全部コミコミ(お一人様)</h4>
                      <div class="slider__price-unit slider__price-unit--sub">
                        <p class="slider__old-price slider__old-price--sub">&#165;56,000</p>
                        <p class="slider__new-price slider__new-price--sub">&#165;46,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </article>
              <article class="slider__item slider__item--sub">
                <a href="./campaign.html">
                  <figure class="slider__image slider__image--sub"><img src="./assets/images/common/slider_2.jpg"
                      alt="さまざまな色をした魚が群れで泳いでいる様子"></figure>
                  <div class="slider__body slider__body--sub">
                    <h3 class="slider__title slider__title--sub">貸切体験ダイビング</h3>
                    <div class="slider__meta slider__meta--sub">
                      <h4 class="slider__sub-title slider__title--sub">全部コミコミ(お一人様)</h4>
                      <div class="slider__price-unit slider__price-unit--sub">
                        <p class="slider__old-price slider__old-price--sub">&#165;24&#44;000</p>
                        <p class="slider__new-price slider__new-price--sub">&#165;18&#44;000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </article>
            </div>
            <div class="aside-campaign__button">
              <button class="button" onclick="location.href='./campaign.html'">View&nbsp;more<span
                  class="button__arrow"></span></button>
            </div>
          </div>
          <div class="aside__archive archive">
            <div class="aside__title">
              <p class="aside__title-text">アーカイブ</p>
            </div>
            <div class="archive__container">
              <ul class="archive__items">
                <li class="archive__item archive__item--newLayout js-archive-item--new">2023</li>
                <li class="archive__item archive__item--close-layout">
                  <ul class="archive__sub-items js-subItems--new">
                    <li class="archive__sub-item archive__sub-item--layout"><a href="#">3月</a></li>
                    <li class="archive__sub-item archive__sub-item--layout"><a href="#">2月</a></li>
                    <li class="archive__sub-item archive__sub-item--layout"><a href="#">1月</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="archive__items">
                <li class="archive__item archive__item--oldLayout js-archive-item--old">2022</li>
                <li class="archive__item archive__item--close-layout">
                  <ul class="archive__sub-items js-subItems--old">
                    <li class="archive__sub-item archive__sub-item--layout"><a href="#"></a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>