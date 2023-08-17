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

  <div class="sub-faq under-faq">
    <figure class="sub-price__decoration"><img
        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-right.png" alt="魚の群れの様子"></figure>
    <div class="sub-faq__inner inner">
      <div class="sub-faq__accordion accordion">
        <div class="accordion__items">
          <div class="accordion__item">
            <h3 class="accordion__title js-faqAccordion-title">
              ここに質問が入ります。 </h3>
            <div class="accordion__content">
              <p class="accordion__content-text">
                ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
              </p>
            </div>
          </div>
          <div class="accordion__item">
            <h3 class="accordion__title js-faqAccordion-title">
              ここに質問が入ります。 </h3>
            <div class="accordion__content">
              <p class="accordion__content-text">
                ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
              </p>
            </div>
          </div>
          <div class="accordion__item">
            <h3 class="accordion__title js-faqAccordion-title">
              ここに質問が入ります。 </h3>
            <div class="accordion__content">
              <p class="accordion__content-text">
                ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
              </p>
            </div>
          </div>
          <div class="accordion__item">
            <h3 class="accordion__title js-faqAccordion-title">
              ここに質問が入ります。 </h3>
            <div class="accordion__content">
              <p class="accordion__content-text">
                ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
              </p>
            </div>
          </div>
          <div class="accordion__item">
            <h3 class="accordion__title js-faqAccordion-title">
              ここに質問が入ります。 </h3>
            <div class="accordion__content">
              <p class="accordion__content-text">
                ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
              </p>
            </div>
          </div>
          <div class="accordion__item">
            <h3 class="accordion__title js-faqAccordion-title">
              ここに質問が入ります。 </h3>
            <div class="accordion__content">
              <p class="accordion__content-text">
                ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
              </p>
            </div>
          </div>
          <div class="accordion__item">
            <h3 class="accordion__title js-faqAccordion-title">
              ここに質問が入ります。 </h3>
            <div class="accordion__content">
              <p class="accordion__content-text">
                ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
<?php get_footer(); ?>