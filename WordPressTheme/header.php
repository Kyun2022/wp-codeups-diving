<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<!-- ローディング -->
<?php if (is_front_page()) : ?>

  <body class="js-fixed" <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="loading js-loading">
      <div class="loading__title js-loadingTitle">
        <h2 class="loading__title-text">DIVING</h2>
        <p class="loading__title-subtext">into&nbsp;the&nbsp;ocean</p>
      </div>
    </div>
  <?php endif; ?>


  <!-- ヘッダー -->
  <header class="header js-header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo_1.png" alt="CodeUpsの文字、会社のロゴ">
        </a>
      </h1>
      <nav class="header__nav header__nav--md-none">
        <ul class="header__items">
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('campaign')); ?>">campaign<span>キャンペーン</span></a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('about-us')); ?>">about&nbsp;us<span>私たちについて</span></a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('information')); ?>">information<span>ダイビング情報</span></a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('blog')); ?>">blog<span>ブログ</span></a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('voice')); ?>">voice<span>お客様の声</span></a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('price')); ?>">price<span>料金一覧</span></a>
          </li>
          <li class="header__item header__item--big">
            <a href="<?php echo esc_url(home_url('faq')); ?>">faq<span>よくある質問</span></a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('contact')); ?>">contact<span>お問い合わせ</span></a>
          </li>
        </ul>
      </nav>

      <!-- ハンバーガーメニュー -->
      <div class="header__hamburger hamburger hamburger--md-show js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <!-- ドロワーメニュー -->
      <div class="header__drawer drawer-menu drawer-menu--all-close js-drawerMenu">
        <div class="drawer-menu__inner inner">
          <div class="drawer-menu__container-left">
            <div class="drawer-menu__contents">
              <p class="drawer-menu__list-name"><a href="<?php echo esc_url(home_url('campaign')); ?>">キャンペーン</a></p>
              <ul class="drawer-menu__items">
                <li class="drawer-menu__item"><a href="<?php echo esc_url(home_url('campaign#campaign1')); ?>">ライセンス講習</a></li>
                <li class="drawer-menu__item"><a href="<?php echo esc_url(home_url('campaign#campaign2')); ?>">貸切体験ダイビング</a></li>
                <li class="drawer-menu__item"><a href="<?php echo esc_url(home_url('campaign#campaign3')); ?>">ナイトダイビング</a></li>
              </ul>
            </div>
            <div class="drawer-menu__contents">
              <p class="drawer-menu__list-name"><a href="<?php echo esc_url(home_url('about-us')); ?>">私たちについて</a></p>
            </div>
            <div class="drawer-menu__contents">
              <p class="drawer-menu__list-name"><a href="<?php echo esc_url(home_url('information')); ?>">ダイビング情報</a>
              </p>
              <ul class="drawer-menu__items">
                <li class="drawer-menu__item"><a href="<?php echo esc_url(home_url('information#tab_panel-1')); ?>">ライセンス講習</a></li>
                <li class="drawer-menu__item"><a href="<?php echo esc_url(home_url('information#tab_panel-3')); ?>">体験ダイビング</a></li>
                <li class="drawer-menu__item"><a href="<?php echo esc_url(home_url('information#tab_panel-2')); ?>">ファンダイビング</a></li>
              </ul>
            </div>
            <div class="drawer-menu__contents">
              <p class="drawer-menu__list-name"><a href="<?php echo esc_url(home_url('blog')); ?>">ブログ</a></p>
            </div>
          </div>
          <div class="drawer-menu__container-right">
            <div class="drawer-menu__contents">
              <p class="drawer-menu__list-name"><a href="<?php echo esc_url(home_url('voice')); ?>">お客様の声</a></p>
            </div>
            <div class="drawer-menu__contents">
              <p class="drawer-menu__list-name"><a href="<?php echo esc_url(home_url('price')); ?>">料金一覧</a></p>
            </div>
            <div class="drawer-menu__contents">
              <ul class="drawer-menu__items">
                <li class="drawer-menu__item"><a href="<?php echo esc_url(home_url('price#price1')); ?>">ライセンス講習</a>
                </li>
                <li class="drawer-menu__item"><a href="<?php echo esc_url(home_url('price#price2')); ?>">体験ダイビング</a>
                </li>
                <li class="drawer-menu__item"><a href="<?php echo esc_url(home_url('price#price3')); ?>">ファンダイビング</a>
                </li>
              </ul>
            </div>
            <div class="drawer-menu__contents">
              <p class="drawer-menu__list-name"><a href="<?php echo esc_url(home_url('faq')); ?>">よくある質問</a></p>
            </div>
            <div class="drawer-menu__contents">
              <p class="drawer-menu__list-name"><a href="<?php echo esc_url(home_url('sitemap')); ?>">サイトマップ</a></p>
            </div>
            <div class="drawer-menu__contents">
              <p class="drawer-menu__list-name"><a href="<?php echo esc_url(home_url('privacypolicy')); ?>">プライバシー<br class="u-mobile">ポリシー</a>
              </p>
            </div>
            <div class="drawer-menu__contents">
              <p class="drawer-menu__list-name"><a href="<?php echo esc_url(home_url('terms-of-service')); ?>">利用規約</a></p>
            </div>
            <div class="drawer-menu__contents">
              <p class="drawer-menu__list-name"><a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>