<?php
/*
Template Name: 利用規約
*/
?>
<?php get_header(); ?>
<main>

  <?php get_template_part('parts/hero'); ?>

  <?php get_template_part('parts/breadcrumb'); ?>


  <div class="sub-termsOfService under-termsOfService">
    <figure class="sub-termsOfService__decoration">
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-right.png" alt="魚の群れの様子">
    </figure>
    <div class="sub-termsOfService__inner inner">
      <div class="sub-termsOfService__container termsOfService">
        <p class="termsOfService__title">
          <!-- タイトル40文字制限 -->
          <?php echo wp_trim_words(get_the_title(), 40, '...'); ?>
        </p>
        <div class="termsOfService__main-container">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>