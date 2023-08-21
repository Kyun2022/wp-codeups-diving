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
          <p class="sub-aboutUs__text text">
            私たちは情熱を持ってダイビングの世界を案内するダイビングインストラクター集団です。海の美しさと驚異に魅了され、その素晴らしさを多くの人々と共有することに情熱を燃やしています。安全性を最優先に考えながら、初心者から経験豊富なダイバーまで、様々なレベルの方々に楽しいダイビング体験を提供しています。
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ギャラリー -->
  <section class="gallery under-gallery">
    <figure class="gallery__decoration gallery__decoration--md-none">
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-left.png" alt="魚の群れの様子">
    </figure>
    <div class="gallery__inner inner">
      <div class="gallery_title title title--center">
        <p class="title__text">gallery</p>
        <h2 class="title__sub-text">フォト</h2>
      </div>

      <div class="gallery__container">
        <?php
        $repeat_item = SCF::get_option_meta('theme-options', 'gallery_lists');
        foreach ($repeat_item as $index => $fields) {
          $image_url = wp_get_attachment_image_src($fields['gallery_item'], 'full');
        ?>
        <figure class="gallery__image" data-micromodal-trigger="js-modal<?php echo $index + 1; ?>">
          <img src="<?php echo $image_url[0]; ?>" alt="ギャラリーの画像">
        </figure>
        <?php
        }
        ?>
      </div>
      <div class="gallery__modal">
        <?php
        $repeat_item = SCF::get_option_meta('theme-options', 'gallery_lists');
        foreach ($repeat_item as $index => $fields) {
          $image_url = wp_get_attachment_image_src($fields['gallery_item'], 'full');
        ?>
        <div class="modal modal--slide" id="js-modal<?php echo $index + 1; ?>" aria-hidden="true">
          <div class="modal__overlay" tabindex="-1" data-micromodal-close>
            <div class="modal__image" role="dialog" aria-modal="true">
              <img src="<?php echo $image_url[0]; ?>" alt="ギャラリーの画像" data-micromodal-close />
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>

    </div>
  </section>
</main>

<?php get_footer(); ?>