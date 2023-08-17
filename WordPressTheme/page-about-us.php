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

  <!-- sub-aboutUs -->
  <section class="sub-aboutUs under-aboutUs">
    <figure class="sub-aboutUs__decoration"><img
        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-right.png" alt="魚の群れの様子"></figure>
    <div class="sub-aboutUs__inner inner">
      <div class="sub-aboutUs__images">
        <figure class="sub-aboutUs__image-sky sub-aboutUs__image-sky--md-none">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about-pc_1.jpg"
            alt="青空の背景の中、屋根の上に紅色のシーダーがこちらを見ている様子">
        </figure>
        <figure class="sub-aboutUs__image-sea">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/about-pc_2.jpg"
            alt="透き通った海の中を２匹の黄色い魚が泳いでいる様子">
        </figure>
      </div>
      <div class="sub-aboutUs__container">
        <div class="sub-aboutUs__title-block">
          <h2 class="sub-aboutUs__sub-title">Dive&nbsp;into<br>the&nbsp;Ocean</h2>
        </div>
        <div class="sub-aboutUs__meta">
          <p class="sub-aboutUs__text text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ギャラリー -->
  <section class="gallery under-gallery">
    <figure class="gallery__decoration gallery__decoration--md-none"><img
        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-left.png" alt="魚の群れの様子"></figure>
    <div class="gallery__inner inner">
      <div class="gallery_title title title--center">
        <p class="title__text">gallery</p>
        <h2 class="title__sub-text">フォト</h2>
      </div>
      <div class="gallery__container">
        <figure class="gallery__image" data-micromodal-trigger="js-modal1">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery_1.jpg"
            alt="透き通った海の中でピンク色の大きな珊瑚礁が輝いている様子">
        </figure>
        <figure class="gallery__image" data-micromodal-trigger="js-modal2">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery_2.jpg"
            alt="透き通った海に2隻のボートと向こう側に緑輝く島が見える様子">
        </figure>
        <figure class="gallery__image" data-micromodal-trigger="js-modal3">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery_3.jpg"
            alt="透き通った海の中を2匹の黄色い魚が泳いでいる様子">
        </figure>
        <figure class="gallery__image" data-micromodal-trigger="js-modal4">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery_4.jpg"
            alt="透き通った海の中を1匹の黄色い魚が泳いでいる様子">
        </figure>
        <figure class="gallery__image" data-micromodal-trigger="js-modal5">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery_5.jpg"
            alt="さまざまな色をした魚が群れで泳いでいる様子">
        </figure>
        <figure class="gallery__image" data-micromodal-trigger="js-modal6">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery_6.jpg"
            alt="透き通った海の中を２匹の黄色い魚が泳いでいる様子">
        </figure>
      </div>

      <!-- モーダル -->
      <div class="modal modal--slide" id="js-modal1" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
          <div class="modal__image" role="dialog" aria-modal="true">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery_1.jpg"
              alt="透き通った海の中でピンク色の大きな珊瑚礁が輝いている様子" data-micromodal-close />
          </div>
        </div>
      </div>
      <div class="modal modal--slide" id="js-modal2" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
          <div class="modal__image" role="dialog" aria-modal="true">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery_2.jpg"
              alt="透き通った海に2隻のボートと向こう側に緑輝く島が見える様子" data-micromodal-close />
          </div>
        </div>
      </div>
      <div class="modal modal--slide" id="js-modal3" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
          <div class="modal__image" role="dialog" aria-modal="true">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery_3.jpg"
              alt="透き通った海の中を2匹の黄色い魚が泳いでいる様子" data-micromodal-close />
          </div>
        </div>
      </div>
      <div class="modal modal--slide" id="js-modal4" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
          <div class="modal__image" role="dialog" aria-modal="true">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery_4.jpg"
              alt="透き通った海の中を1匹の黄色い魚が泳いでいる様子" data-micromodal-close />
          </div>
        </div>
      </div>
      <div class="modal modal--slide" id="js-modal5" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
          <div class="modal__image" role="dialog" aria-modal="true">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery_5.jpg"
              alt="さまざまな色をした魚が群れで泳いでいる様子" data-micromodal-close />
          </div>
        </div>
      </div>
      <div class="modal modal--slide" id="js-modal6" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
          <div class="modal__image" role="dialog" aria-modal="true">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/gallery_6.jpg"
              alt="透き通った海の中を２匹の黄色い魚が泳いでいる様子" data-micromodal-close />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- contact -->
  <section class="contact contact--aboutUs">
    <figure class="contact__decoration"><img
        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-contact.png" alt="魚の群れの様子">
    </figure>
    <div class="contact__inner inner">
      <div class="contact__container">
        <div class="contact__info">
          <div class="contact__logo-block">
            <figure class="contact__logo"><a href="./index.html"><img
                  src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/logo_2.png"
                  alt="CodeUpsの文字、会社のロゴ"></a></figure>
          </div>
          <div class="contact__wrapper">
            <div class="contact__map"><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.40701233783!2d127.6646619769652!3d26.21596157706934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56996d05d1023%3A0x3afb03e18b00573f!2z44OR44K344OV44Kj44OD44Kv44Ob44OG44Or5rKW57iE!5e0!3m2!1sja!2sjp!4v1688297197575!5m2!1sja!2sjp"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <ul class="contact__items">
              <li class="contact__item">沖縄県那覇市1-1</li>
              <li class="contact__item">TEL:0120-000-0000</li>
              <li class="contact__item">営業時間:8:30-19:00</li>
              <li class="contact__item">定休日:毎週火曜日</li>
            </ul>
          </div>
        </div>
        <div class="contact__action">
          <div class="contact__title title title--center">
            <p class="title__text title__text--big">contact</p>
            <h2 class="title__sub-text title__sub-text--layout">お問い合わせ</h2>
            <p class="title__emphasis">ご予約・お問い合わせはコチラ</p>
            <div class="title__button">
              <button class="button"
                onclick="location.href='<?php echo esc_url(home_url('contact')); ?>'">Contact&nbsp;us<span
                  class="button__arrow"></span></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>