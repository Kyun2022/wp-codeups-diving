<?php
/*
Template Name: よくある質問
*/
?>
<?php get_header(); ?>
<main>

  <?php get_template_part('parts/hero'); ?>

  <?php get_template_part('parts/breadcrumb'); ?>


  <div class="sub-faq under-faq">
    <figure class="sub-price__decoration"><img
        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-right.png" alt="魚の群れの様子"></figure>
    <div class="sub-faq__inner inner">
      <div class="sub-faq__accordion accordion">
        <div class="accordion__items">
          <?php
          $FAQ_fields = SCF::get_option_meta('FAQ_options', 'faq_lists');
          foreach ($FAQ_fields as $FAQ_field) {
            $faq_question = esc_html($FAQ_field['faq_question']);
            $faq_answer = esc_html($FAQ_field['faq_answer']);
          ?>
          <?php if ($faq_question && $faq_answer) : ?>
          <div class="accordion__item">
            <h3 class="accordion__title js-faqAccordion-title"><?php echo $faq_question; ?></h3>
            <div class="accordion__content">
              <p class="accordion__content-text"><?php echo $faq_answer; ?></p>
            </div>
          </div>
          <?php endif; ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

</main>
<?php get_footer(); ?>