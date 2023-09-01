<?php
/*
Template Name: プライバシーポリシー
*/
?>
<?php get_header(); ?>
<main>

  <?php get_template_part('parts/hero'); ?>

  <?php get_template_part('parts/breadcrumb'); ?>


  <div class="sub-privacyPolicy under-privacyPolicy">
    <figure class="sub-privacyPolicy__decoration"><img
        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-right.png" alt="魚の群れの様子">
    </figure>
    <div class="sub-privacyPolicy__inner inner">
      <div class="sub-privacyPolicy__container privacyPolicy">
        <p class="privacyPolicy__title">
          <!-- タイトル40文字制限 -->
          <?php echo wp_trim_words(get_the_title(), 40, '...'); ?>
        </p>
        <div class="privacyPolicy__main-container">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>

</main>
<?php get_footer(); ?>