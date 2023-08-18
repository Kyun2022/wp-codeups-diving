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
        <p class="tab__text tab__text--green"><a href="./information.html">all</a></p>
        <p class="tab__text"><a href="./information.html#tab_panel-1">ライセンス講習</a></p>
        <p class="tab__text"><a href="./information.html#tab_panel-2">ファンダイビング</a></p>
        <p class="tab__text"><a href="./information.html#tab_panel-3">体験ダイビング</a></p>
      </div>
      <div class="sub-voice__container boxes">
        <div class="boxes__items boxes__items--sub">
          <article class="boxes__item box">
            <a href="#">
              <div class="box__container">
                <div class="box__header">
                  <div class="box__wrapper">
                    <p class="box__gender">20代&#040;女性&#041;</p>
                    <span class="box__label">ライセンス講習</span>
                  </div>
                  <h3 class="box__title">ここにタイトルが入ります。ここにタイトル</h3>
                </div>
                <figure class="box__image">
                  <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/box_1.jpg"
                    alt="笑顔の女性が麦わら帽子を被ってこちらを見ている様子">
                </figure>
              </div>
              <div class="box__meta">
                <p class="box__text text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </a>
          </article>
          <article class="boxes__item box">
            <a href="#">
              <div class="box__container">
                <div class="box__header">
                  <div class="box__wrapper">
                    <p class="box__gender">20代&#040;男性&#041;</p>
                    <span class="box__label">ファンダイビング</span>
                  </div>
                  <h3 class="box__title">ここにタイトルが入ります。ここにタイトル</h3>
                </div>
                <figure class="box__image"><img
                    src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/box_2.jpg"
                    alt="笑顔の青年が親指を突き出している様子">
                </figure>
              </div>
              <div class="box__meta">
                <p class="box__text text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </a>
          </article>
          <article class="boxes__item box">
            <a href="#">
              <div class="box__container">
                <div class="box__header">
                  <div class="box__wrapper">
                    <p class="box__gender">30代&#040;女性&#041;</p>
                    <span class="box__label">体験ダイビング</span>
                  </div>
                  <h3 class="box__title">ここにタイトルが入ります。ここにタイトル</h3>
                </div>
                <figure class="box__image"><img
                    src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/box_3.jpg"
                    alt="2人の女性がこちらを笑顔で振り向いた様子">
                </figure>
              </div>
              <div class="box__meta">
                <p class="box__text text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </a>
          </article>
          <article class="boxes__item box">
            <a href="#">
              <div class="box__container">
                <div class="box__header">
                  <div class="box__wrapper">
                    <p class="box__gender">20代&#040;女性&#041;</p>
                    <span class="box__label">体験ダイビング</span>
                  </div>
                  <h3 class="box__title">ここにタイトルが入ります。ここにタイトル</h3>
                </div>
                <figure class="box__image"><img
                    src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/box_4.jpg"
                    alt="風に靡いた髪を手で押さえている女性が歯に噛んでいる様子"></figure>
              </div>
              <div class="box__meta">
                <p class="box__text text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </a>
          </article>
          <article class="boxes__item box">
            <a href="#">
              <div class="box__container">
                <div class="box__header">
                  <div class="box__wrapper">
                    <p class="box__gender">30代&#040;カップル&#041;</p>
                    <span class="box__label">ファンダイビング</span>
                  </div>
                  <h3 class="box__title">ここにタイトルが入ります。ここにタイトル</h3>
                </div>
                <figure class="box__image"><img
                    src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/box_5.jpg"
                    alt="男性と女性がソファーに座り笑顔でこちらを見ている様子">
                </figure>
              </div>
              <div class="box__meta">
                <p class="box__text text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </a>
          </article>
          <article class="boxes__item box">
            <a href="#">
              <div class="box__container">
                <div class="box__header">
                  <div class="box__wrapper">
                    <p class="box__gender">20代&#040;女性&#041;</p>
                    <span class="box__label">ライセンス講習</span>
                  </div>
                  <h3 class="box__title">ここにタイトルが入ります。ここにタイトル</h3>
                </div>
                <figure class="box__image"><img
                    src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/box_6.jpg"
                    alt="ボーダーラインの洋服を着た女性がこちらの視線を逸らしながら歯に噛んでいる様子"></figure>
              </div>
              <div class="box__meta">
                <p class="box__text text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </a>
          </article>
        </div>
      </div>
      <div class="sub-voice__pageNation pageNation">
        <ul class="pageNation__items">
          <?php wp_pagenavi(); ?>
        </ul>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>