<?php get_header(); ?>
<main>
  <div class="sub-404 under-404">

    <?php if (function_exists('bcn_display')) { ?>
    <div class="breadcrumb inner breadcrumb--404">
      <div class="breadcrumb breadcrumb-text--white" vocab="http://schema.org/" typeof="BreadcrumbList">
        <?php bcn_display(); ?>
      </div>
    </div>
    <?php } ?>

    <div class="sub-404__inner inner">
      <figure class="sub-404__image"><img
          src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/whale-right--big.png" alt="大きな鯨のデザイン">
      </figure>
      <div class="sub-404__container">
        <div class="sub-404__box">
          <p class="sub-404__title">404</p>
          <p class="sub-404__text">申し訳ありません。<br>お探しのページが見つかりません。</p>
          <div class="sub-404__button">
            <button class="button button--colorChange"
              onclick="location.href='<?php echo esc_url(home_url('/')); ?>'">Page&nbsp;TOP<span
                class="button__arrow--colorChange"></span></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>