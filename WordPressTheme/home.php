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
          <div class="cards__items">
            <article class="cards__item card">
              <a href="./blog-detail.html">
                <figure class="card__image card__image--hover"><img
                    src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/card_1.jpg"
                    alt="透き通った海の中でピンク色の大きな珊瑚礁が輝いている様子"></figure>
                <div class="card__body">
                  <div class="card__header">
                    <time datetime="2023-11-17" class="card__date">2023/11/17</time>
                    <h3 class="card__title">ライセンス取得</h3>
                  </div>
                  <div class="card__meta">
                    <p class="card__text text">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                  </div>
                </div>
              </a>
            </article>
            <article class="cards__item card">
              <a href="./blog-detail.html">
                <figure class="card__image card__image--hover"><img
                    src="<?php echo esc_url(get_theme_file_uri()); ?>//assets/images/common/card_2.jpg"
                    alt="透き通った海の中で大きなウミガメが気持ち良さそうに泳いでいる様子"></figure>
                <div class="card__body">
                  <div class="card__header">
                    <time datetime="2023-11-17" class="card__date">2023/11/17</time>
                    <h3 class="card__title">ウミガメと泳ぐ</h3>
                  </div>
                  <div class="card__meta">
                    <p class="card__text text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                  </div>
                </div>
              </a>
            </article>
            <article class="cards__item card">
              <a href="./blog-detail.html">
                <figure class="card__image card__image--hover"><img
                    src="<?php echo esc_url(get_theme_file_uri()); ?>//assets/images/common/card_3.jpg"
                    alt="映画ファインディング・ニモで知られるカクレクマノミが珊瑚礁の中から顔をのぞかせている様子"></figure>
                <div class="card__body">
                  <div class="card__header">
                    <time datetime="2023-11-17" class="card__date">2023/11/17</time>
                    <h3 class="card__title">カクレクマノミ</h3>
                  </div>
                  <div class="card__meta">
                    <p class="card__text text">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                  </div>
                </div>
              </a>
            </article>
            <article class="cards__item card">
              <a href="./blog-detail.html">
                <figure class="card__image card__image--hover"><img
                    src="<?php echo esc_url(get_theme_file_uri()); ?>//assets/images/common/card_4.jpg"
                    alt="映画ファインディング・ニモで知られるカクレクマノミが珊瑚礁の中から顔をのぞかせている様子"></figure>
                <div class="card__body">
                  <div class="card__header">
                    <time datetime="2023-11-17" class="card__date">2023/11/17</time>
                    <h3 class="card__title">カクレクマノミ</h3>
                  </div>
                  <div class="card__meta">
                    <p class="card__text text">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                  </div>
                </div>
              </a>
            </article>
            <article class="cards__item card">
              <a href="./blog-detail.html">
                <figure class="card__image card__image--hover"><img
                    src="<?php echo esc_url(get_theme_file_uri()); ?>//assets/images/common/card_5.jpg"
                    alt="映画ファインディング・ニモで知られるカクレクマノミが珊瑚礁の中から顔をのぞかせている様子"></figure>
                <div class="card__body">
                  <div class="card__header">
                    <time datetime="2023-11-17" class="card__date">2023/11/17</time>
                    <h3 class="card__title">カクレクマノミ</h3>
                  </div>
                  <div class="card__meta">
                    <p class="card__text text">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                  </div>
                </div>
              </a>
            </article>
            <article class="cards__item card">
              <a href="./blog-detail.html">
                <figure class="card__image card__image--hover"><img
                    src="<?php echo esc_url(get_theme_file_uri()); ?>//assets/images/common/card_6.jpg"
                    alt="映画ファインディング・ニモで知られるカクレクマノミが珊瑚礁の中から顔をのぞかせている様子"></figure>
                <div class="card__body">
                  <div class="card__header">
                    <time datetime="2023-11-17" class="card__date">2023/11/17</time>
                    <h3 class="card__title">カクレクマノミ</h3>
                  </div>
                  <div class="card__meta">
                    <p class="card__text text">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                  </div>
                </div>
              </a>
            </article>
            <article class="cards__item card">
              <a href="./blog-detail.html">
                <figure class="card__image card__image--hover"><img
                    src="<?php echo esc_url(get_theme_file_uri()); ?>//assets/images/common/card_3.jpg"
                    alt="映画ファインディング・ニモで知られるカクレクマノミが珊瑚礁の中から顔をのぞかせている様子"></figure>
                <div class="card__body">
                  <div class="card__header">
                    <time datetime="2023-11-17" class="card__date">2023/11/17</time>
                    <h3 class="card__title">カクレクマノミ</h3>
                  </div>
                  <div class="card__meta">
                    <p class="card__text text">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                  </div>
                </div>
              </a>
            </article>
            <article class="cards__item card">
              <a href="./blog-detail.html">
                <figure class="card__image card__image--hover"><img
                    src="<?php echo esc_url(get_theme_file_uri()); ?>//assets/images/common/card_4.jpg"
                    alt="映画ファインディング・ニモで知られるカクレクマノミが珊瑚礁の中から顔をのぞかせている様子"></figure>
                <div class="card__body">
                  <div class="card__header">
                    <time datetime="2023-11-17" class="card__date">2023/11/17</time>
                    <h3 class="card__title">カクレクマノミ</h3>
                  </div>
                  <div class="card__meta">
                    <p class="card__text text">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                  </div>
                </div>
              </a>
            </article>
            <article class="cards__item card">
              <a href="./blog-detail.html">
                <figure class="card__image card__image--hover"><img
                    src="<?php echo esc_url(get_theme_file_uri()); ?>//assets/images/common/card_5.jpg"
                    alt="映画ファインディング・ニモで知られるカクレクマノミが珊瑚礁の中から顔をのぞかせている様子"></figure>
                <div class="card__body">
                  <div class="card__header">
                    <time datetime="2023-11-17" class="card__date">2023/11/17</time>
                    <h3 class="card__title">カクレクマノミ</h3>
                  </div>
                  <div class="card__meta">
                    <p class="card__text text">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                  </div>
                </div>
              </a>
            </article>
            <article class="cards__item card">
              <a href="./blog-detail.html">
                <figure class="card__image card__image--hover"><img
                    src="<?php echo esc_url(get_theme_file_uri()); ?>//assets/images/common/card_6.jpg"
                    alt="映画ファインディング・ニモで知られるカクレクマノミが珊瑚礁の中から顔をのぞかせている様子"></figure>
                <div class="card__body">
                  <div class="card__header">
                    <time datetime="2023-11-17" class="card__date">2023/11/17</time>
                    <h3 class="card__title">カクレクマノミ</h3>
                  </div>
                  <div class="card__meta">
                    <p class="card__text text">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                  </div>
                </div>
              </a>
            </article>
          </div>
          <div class="sub-blog__pageNation pageNation">
            <ul class="pageNation__items">
              <li class="pageNation__item"><a href="#">&lt;</a></li>
              <li class="pageNation__item pageNation__item--current"><a href="#">1</a></li>
              <li class="pageNation__item"><a href="#">2</a></li>
              <li class="pageNation__item"><a href="#">3</a></li>
              <li class="pageNation__item"><a href="#">4</a></li>
              <li class="pageNation__item pageNation__item--md-none"><a href="#">5</a></li>
              <li class="pageNation__item pageNation__item--md-none"><a href="#">6</a></li>
              <li class="pageNation__item"><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>

        <aside class="sub-blog__aside-container aside">
          <div class="aside__popular-box">
            <div class="aside__title">
              <p class="aside__title-text">人気記事</p>
            </div>
            <div class="aside__popular-items">
              <article class="aside__popular-item card">
                <a href="./blog-detail.html">
                  <figure class="card__image card__image--sub"><img
                      src="<?php echo esc_url(get_theme_file_uri()); ?>//assets/images/common/card_4.jpg"
                      alt="透き通った海の中でピンク色の大きな珊瑚礁が輝いている様子"></figure>
                  <div class="card__body card__body--sub">
                    <time datetime="2023-11-17" class="card__date">2023/11/17</time>
                    <h3 class="card__title">ライセンス取得</h3>
                  </div>
                </a>
              </article>
              <article class="aside__popular-item card">
                <a href="./blog-detail.html">
                  <figure class="card__image card__image--sub"><img
                      src="<?php echo esc_url(get_theme_file_uri()); ?>//assets/images/common/card_2.jpg"
                      alt="透き通った海の中でピンク色の大きな珊瑚礁が輝いている様子"></figure>
                  <div class="card__body card__body--sub">
                    <time datetime="2023-11-17" class="card__date">2023/11/17</time>
                    <h3 class="card__title">ウミガメと泳ぐ</h3>
                  </div>
                </a>
              </article>
              <article class="aside__popular-item card">
                <a href="./blog-detail.html">
                  <figure class="card__image card__image--sub"><img
                      src="<?php echo esc_url(get_theme_file_uri()); ?>//assets/images/common/card_3.jpg"
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
                  <img src="<?php echo esc_url(get_theme_file_uri()); ?>//assets/images/common/sub-blog__couple.jpg"
                    alt="30代のカップルがソファーに座りながら笑顔でこちらを見ている様子">
                </figure>
              </div>
              <div class="review__button">
                <button class="button"
                  onclick="location.href='<?php echo esc_url(home_url('voice')); ?>'">View&nbsp;more<span
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
                  <figure class="slider__image slider__image--sub"><img
                      src="<?php echo esc_url(get_theme_file_uri()); ?>//assets/images/common/slider_1.jpg"
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
                  <figure class="slider__image slider__image--sub"><img
                      src="<?php echo esc_url(get_theme_file_uri()); ?>//assets/images/common/slider_2.jpg"
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
              <button class="button"
                onclick="location.href='<?php echo esc_url(home_url('campaign')); ?>'">View&nbsp;more<span
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