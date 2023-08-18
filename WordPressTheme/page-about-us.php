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
</main>

<?php get_footer(); ?>