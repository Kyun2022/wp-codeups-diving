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

  <div class="sub-price under-price">
    <figure class="sub-price__decoration"><img
        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-right.png" alt="魚の群れの様子"></figure>
    <div class="sub-price__inner inner">
      <div class="sub-price__container priceBox">
        <div class="priceBox__container" id="Price1">
          <div class="priceBox__theme">
            <p class="priceBox__theme-text">ライセンス講習</p>
          </div>
          <div class="priceBox__items">
            <dl class="priceBox__wrapper">
              <dt class="priceBox__content">オープンウォーター<br class="priceBox__br">ダイバーコース</dt>
              <dd class="priceBox__price">&#165;50&#44;000</dd>
            </dl>
            <dl class="priceBox__wrapper">
              <dt class="priceBox__content">アドバンスド<br class="priceBox__br">オープンウォーターコース</dt>
              <dd class="priceBox__price">&#165;60&#44;000</dd>
            </dl>
            <dl class="priceBox__wrapper">
              <dt class="priceBox__content">レスキュー＋EFRコース</dt>
              <dd class="priceBox__price">&#165;70&#44;000</dd>
            </dl>
          </div>
        </div>
        <div class="priceBox__container" id="Price2">
          <div class="priceBox__theme">
            <p class="priceBox__theme-text">体験ダイビング</p>
          </div>
          <div class="priceBox__items">
            <dl class="priceBox__wrapper">
              <dt class="priceBox__content">ビーチ体験ダイビング<br class="priceBox__br">(半日)</dt>
              <dd class="priceBox__price">&#165;7&#44;000</dd>
            </dl>
            <dl class="priceBox__wrapper">
              <dt class="priceBox__content">ビーチ体験ダイビング<br class="priceBox__br">(1日)</dt>
              <dd class="priceBox__price">&#165;14&#44;000</dd>
            </dl>
            <dl class="priceBox__wrapper">
              <dt class="priceBox__content">ボート体験ダイビング<br class="priceBox__br">(半日)</dt>
              <dd class="priceBox__price">&#165;10&#44;000</dd>
            </dl>
            <dl class="priceBox__wrapper">
              <dt class="priceBox__content">ボート体験ダイビング<br class="priceBox__br">(1日)</dt>
              <dd class="priceBox__price">&#165;18&#44;000</dd>
            </dl>
          </div>
        </div>
        <div class="priceBox__container" id="Price3">
          <div class="priceBox__theme">
            <p class="priceBox__theme-text">ファンダイビング</p>
          </div>
          <div class="priceBox__items">
            <dl class="priceBox__wrapper">
              <dt class="priceBox__content">ビーチダイビング<br class="priceBox__br">(2ダイブ)</dt>
              <dd class="priceBox__price">&#165;14&#44;000</dd>
            </dl>
            <dl class="priceBox__wrapper">
              <dt class="priceBox__content">ボートダイビング<br class="priceBox__br">(2ダイブ)</dt>
              <dd class="priceBox__price">&#165;18&#44;000</dd>
            </dl>
            <dl class="priceBox__wrapper">
              <dt class="priceBox__content">スペシャルダイビング<br class="priceBox__br">(2ダイブ)</dt>
              <dd class="priceBox__price">&#165;24&#44;000</dd>
            </dl>
            <dl class="priceBox__wrapper">
              <dt class="priceBox__content">ナイトダイビング<br class="priceBox__br">(1ダイブ)</dt>
              <dd class="priceBox__price">&#165;10&#44;000</dd>
            </dl>
          </div>
        </div>
        <div class="priceBox__container" id="Price4">
          <div class="priceBox__theme">
            <p class="priceBox_theme-text">スペシャルダイビング</p>
          </div>
          <div class="priceBox__items">
            <dl class="priceBox__wrapper">
              <dt class="priceBox__content">貸切ダイビング<br class="priceBox__br">(2ダイブ)</dt>
              <dd class="priceBox__price">&#165;24&#44;000</dd>
            </dl>
            <dl class="priceBox__wrapper">
              <dt class="priceBox__content">1日ダイビング<br class="priceBox__br">(3ダイブ)</dt>
              <dd class="priceBox__price">&#165;32&#44;000</dd>
            </dl>
            <dl class="priceBox__wrapper">
              <dt class="priceBox__content">ナイトダイビング<br class="priceBox__br">(2ダイブ)</dt>
              <dd class="priceBox__price">&#165;14&#44;000</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>