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

  <!-- インフォメーション -->
  <div class="sub-information under-information">
    <figure class="sub-information__decoration"><img
        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-right.png" alt="魚の群れの様子">
    </figure>
    <div class="sub-information_inner inner">
      <ul class="sub-information__tab info-tab">
        <li class="info-tab__text js-infoTab-trigger is-active" data-category="license">ライセンス<br
            class="info-tab__text--md-show">講習</li>
        <li class="info-tab__text js-infoTab-trigger" data-category="fanDiving">ファン<br
            class="info-tab__text--md-show">ダイビング</li>
        <li class="info-tab__text js-infoTab-trigger" data-category="diving">体験<br class="info-tab__text--md-show">ダイビング
        </li>
      </ul>
      <div class="sub-information__items info-content">
        <div class="info-content__item js-infoContent-target is-active" data-target="license" id="tab_panel-1">
          <div class="info-content__wrapper">
            <figure class="info-content__image"><img
                src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/tab_1.jpg" alt="緑色のくじらのデザイン">
            </figure>
            <div class="info-content__meta">
              <h3 class="info-content__title">ライセンス講習</h3>
              <p class="info-content__text text">
                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします&excl;スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう&excl;
              </p>
            </div>
          </div>
        </div>
        <div class="info-content__item js-infoContent-target" data-target="fanDiving" id="tab_panel-2">
          <div class="info-content__wrapper">
            <figure class="info-content__image"><img
                src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/tab_2.jpg" alt="緑色のくじらのデザイン">
            </figure>
            <div class="info-content__meta">
              <h3 class="info-content__title">ファンダイビング</h3>
              <p class="info-content__text text">
                ブランクダイバー、ライセンスを取り立ての方も安心&excl;沖縄本島を代表する「青の洞窟」&#040;真栄田岬&#041;やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意&excl;
              </p>
            </div>
          </div>
        </div>
        <div class="info-content__item js-infoContent-target" data-target="diving" id="tab_panel-3">
          <div class=" info-content__wrapper">
            <figure class="info-content__image"><img
                src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/tab_3.jpg" alt="緑色の小魚のデザイン">
            </figure>
            <div class="info-content__meta">
              <h3 class="info-content__title">体験ダイビング</h3>
              <p class="info-content__text tex5">
                ブランクダイバー、ライセンスを取り立ての方も安心&excl;沖縄本島を代表する「青の洞窟」&#040;真栄田岬&#041;やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意&excl;
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
<?php get_footer(); ?>