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
    <figure class="sub-campaign__decoration"><img
        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-right.png" alt="魚の群れの様子"></figure>
    <div class="sub-campaign__inner inner">
      <div class="sub-campaign__tab tab">
        <p class="tab__text tab__text--green"><a href="./information.html">all</a></p>
        <p class="tab__text"><a href="./information.html#tab_panel-1">ライセンス講習</a></p>
        <p class="tab__text"><a href="./information.html#tab_panel-2">ファンダイビング</a></p>
        <p class="tab__text"><a href="./information.html#tab_panel-3">体験ダイビング</a></p>
      </div>
      <div class="sub-campaign__menu">
        <div class="sub-campaign__items slider">
          <article class="slider__item" id="campaign1">
            <figure class="slider__image">
              <img src="./assets/images/common/slider_1.jpg" alt="さまざまな色をした魚が群れで泳いでいる様子">
            </figure>
            <div class="slider__body slider__body--layout">
              <p class="slider__label">ライセンス講習</p>
              <h3 class="slider__title slider__title--layout">ライセンス取得</h3>
              <div class="slider__meta slider__meta--layout">
                <h4 class="slider__sub-title">全部コミコミ&#040;お一人様&#041;</h4>
                <div class="slider__price-unit slider__price-unit--layout">
                  <p class="slider__old-price slider__old-price--layout">&#165;56&#44;000</p>
                  <p class="slider__new-price">&#165;46&#44;000</p>
                </div>
              </div>
              <div class="slider__detail slider__detail--md-none">
                <p class="slider__text text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
                <div class="slider__box">
                  <p class="slider__date">2023&#047;6&#047;1&#045;9&#047;30</p>
                  <p class="slider__sub-text">ご予約・お問い合わせはコチラ</p>
                  <div class="slider__button-block">
                    <button class="button"
                      onclick="location.href='<?php echo esc_url(home_url('contact')); ?>'">contact&nbsp;us<span
                        class="button__arrow"></span></button>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <article class="slider__item" id="campaign2">
            <figure class="slider__image"><img
                src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/slider_2.jpg"
                alt="さまざまな色をした魚が群れで泳いでいる様子">
            </figure>
            <div class="slider__body slider__body--layout">
              <p class="slider__label">体験ダイビング</p>
              <h3 class="slider__title slider__title--layout">貸切体験ダイビング</h3>
              <div class="slider__meta slider__meta--layout">
                <h4 class="slider__sub-title">全部コミコミ&#040;お一人様&#041;</h4>
                <div class="slider__price-unit slider__price-unit--layout">
                  <p class="slider__old-price slider__old-price--layout">&#165;24&#44;000</p>
                  <p class="slider__new-price">&#165;18&#44;000</p>
                </div>
              </div>
              <div class="slider__detail slider__detail--md-none">
                <p class="slider__text text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
                <div class="slider__box">
                  <p class="slider__date">2023&#047;6&#047;1&#045;9&#047;30</p>
                  <p class="slider__sub-text">ご予約・お問い合わせはコチラ</p>
                  <div class="slider__button-block">
                    <button class="button"
                      onclick="location.href='<?php echo esc_url(home_url('contact')); ?>'">contact&nbsp;us<span
                        class="button__arrow"></span></button>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <article class="slider__item" id="campaign3">
            <figure class="slider__image"><img
                src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/slider_3.jpg"
                alt="さまざまな色をした魚が群れで泳いでいる様子">
            </figure>
            <div class="slider__body slider__body--layout">
              <p class="slider__label">体験ダイビング</p>
              <h3 class="slider__title slider__title--layout">ナイトダイビング</h3>
              <div class="slider__meta slider__meta--layout">
                <h4 class="slider__sub-title">全部コミコミ&#040;お一人様&#041;</h4>
                <div class="slider__price-unit slider__price-unit--layout">
                  <p class="slider__old-price slider__old-price--layout">&#165;10,000</p>
                  <p class="slider__new-price">&#165;8,000</p>
                </div>
              </div>
              <div class="slider__detail slider__detail--md-none">
                <p class="slider__text text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
                <div class="slider__box">
                  <p class="slider__date">2023&#047;6&#047;1&#045;9&#047;30</p>
                  <p class="slider__sub-text">ご予約・お問い合わせはコチラ</p>
                  <div class="slider__button-block">
                    <button class="button"
                      onclick="location.href='<?php echo esc_url(home_url('contact')); ?>'">contact&nbsp;us<span
                        class="button__arrow"></span></button>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <article class="slider__item" id="campaign4">
            <figure class="slider__image"> <img
                src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/slider_4.jpg"
                alt="さまざまな色をした魚が群れで泳いでいる様子">
            </figure>
            <div class="slider__body slider__body--layout">
              <p class="slider__label">ファンダイビング</p>
              <h3 class="slider__title slider__title--layout">貸切ファンダイビング</h3>
              <div class="slider__meta slider__meta--layout">
                <h4 class="slider__sub-title">全部コミコミ&#040;お一人様&#041;</h4>
                <div class="slider__price-unit slider__price-unit--layout">
                  <p class="slider__old-price slider__old-price--layout">&#165;20&#44;000</p>
                  <p class="slider__new-price">&#165;16&#44;000</p>
                </div>
              </div>
              <div class="slider__detail slider__detail--md-none">
                <p class="slider__text text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
                <div class="slider__box">
                  <p class="slider__date">2023&#047;6&#047;1&#045;9&#047;30</p>
                  <p class="slider__sub-text">ご予約・お問い合わせはコチラ</p>
                  <div class="slider__button-block">
                    <button class="button"
                      onclick="location.href='<?php echo esc_url(home_url('contact')); ?>'">contact&nbsp;us<span
                        class="button__arrow"></span></button>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
      <div class="sub-campaign__pageNation pageNation">
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
  </div>
</main>
<?php get_footer(); ?>