<?php
/*
Template Name: サイトマップ
*/
?>
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

  <div class="sub-siteMap under-siteMap">
    <div class="sub-siteMap__inner inner">
      <div class="sub-siteMap__container siteMap-menu">
        <div class="siteMap-menu">
          <div class="siteMap-menu__container-left">
            <div class="siteMap-menu__sub-container--left1">
              <div class="siteMap-menu__contents">
                <p class="siteMap-menu__list-name">
                  <a href="<?php echo esc_url(home_url('campaign')); ?>">キャンペーン</a>
                </p>
                <ul class="siteMap-menu__items">
                  <li class="siteMap-menu__item">
                    <a href="<?php echo esc_url(home_url('campaign#campaign1')); ?>">ライセンス取得</a>
                  </li>
                  <li class="siteMap-menu__item">
                    <a href="<?php echo esc_url(home_url('campaign#campaign2')); ?>">貸切体験ダイビング</a>
                  </li>
                  <li class="siteMap-menu__item">
                    <a href="<?php echo esc_url(home_url('campaign#campaign3')); ?>">ナイトダイビング</a>
                  </li>
                </ul>
              </div>
              <div class="siteMap-menu__contents">
                <p class="siteMap-menu__list-name"><a href="<?php echo esc_url(home_url('about-us')); ?>">私たちについて</a>
                </p>
              </div>
            </div>
            <div class="siteMap-menu__sub-container--right1">
              <div class="siteMap-menu__contents">
                <p class="siteMap-menu__list-name siteMap-menu__list-name--space">
                  <a href="<?php echo esc_url(home_url('information')); ?>">ダイビング情報</a>
                </p>
                <ul class="siteMap-menu__items">
                  <li class="siteMap-menu__item">
                    <a href="<?php echo esc_url(home_url('information#tab_panel-1')); ?>">ライセンス講習</a>
                  </li>
                  <li class="siteMap-menu__item">
                    <a href="<?php echo esc_url(home_url('information#tab_panel-3')); ?>">体験ダイビング</a>
                  </li>
                  <li class="siteMap-menu__item">
                    <a href="<?php echo esc_url(home_url('information#tab_panel-2')); ?>">ファンダイビング</a>
                  </li>
                </ul>
              </div>
              <div class="siteMap-menu__contents">
                <p class="siteMap-menu__list-name"><a href="<?php echo esc_url(home_url('blog')); ?>">ブログ</a></p>
              </div>
            </div>
          </div>
          <div class="siteMap-menu__container-right">
            <div class="siteMap-menu__sub-container--left2">
              <div class="siteMap-menu__contents">
                <p class="siteMap-menu__list-name"><a href="<?php echo esc_url(home_url('voice')); ?>">お客様の声</a></p>
              </div>
              <div class="siteMap-menu__contents">
                <p class="siteMap-menu__list-name"><a href="<?php echo esc_url(home_url('price')); ?>">料金一覧</a></p>
                <ul class="siteMap-menu__items">
                  <li class="siteMap-menu__item"><a href="<?php echo esc_url(home_url('price#price1')); ?>">ライセンス講習</a>
                  </li>
                  <li class="siteMap-menu__item"><a href="<?php echo esc_url(home_url('price#price2')); ?>">体験ダイビング</a>
                  </li>
                  <li class="siteMap-menu__item"><a href="<?php echo esc_url(home_url('price#price3')); ?>">ファンダイビング</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="siteMap-menu__sub-container--right2">
              <div class="siteMap-menu__contents">
                <p class="siteMap-menu__list-name siteMap-menu__list-name--space">
                  <a href="<?php echo esc_url(home_url('faq')); ?>">よくある質問</a>
                </p>
              </div>
              <div class="siteMap-menu__contents">
                <p class="siteMap-menu__list-name siteMap-menu__list-name--space">
                  <a href="<?php echo esc_url(home_url('sitemap')); ?>">サイトマップ</a>
                </p>
              </div>
              <div class="siteMap-menu__contents">
                <p class="siteMap-menu__list-name">
                  <a href="<?php echo esc_url(home_url('privacypolicy')); ?>">プライバシー<br class="u-mobile">ポリシー</a>
                </p>
              </div>
              <div class="siteMap-menu__contents">
                <p class="siteMap-menu__list-name">
                  <a href="<?php echo esc_url(home_url('terms-of-service')); ?>">利用規約</a>
                </p>
              </div>
              <div class="siteMap-menu__contents">
                <p class="siteMap-menu__list-name">
                  <a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
<?php get_footer(); ?>