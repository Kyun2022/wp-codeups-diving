<?php
/*
Template Name: 料金の一覧
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

  <div class="sub-price under-price">
    <figure class="sub-price__decoration">
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-right.png" alt="魚の群れの様子">
    </figure>
    <div class="sub-price__inner inner">
      <div class="sub-price__container priceBox">
        <div class="priceBox__container" id="price1">
          <div class="priceBox__theme">
            <p class="priceBox__theme-text">ライセンス講習</p>
          </div>
          <div class="priceBox__items">
            <?php
            $license_fields = SCF::get_option_meta('price_options', 'license_lists');
            foreach ($license_fields as $license_field_name => $license_value) {
              $license_content = esc_html($license_value['license_content']);
              $license_subContent = esc_html($license_value['license_subContent']);
              $license_price = esc_html($license_value['license_price']);
            ?>
            <?php if ($license_content && $license_subContent && $license_price) : ?>
            <dl class="priceBox__wrapper">
              <dt class="priceBox__content"><?php echo $license_content; ?><br
                  class="priceBox__br"><?php echo $license_subContent; ?>
              </dt>
              <dd class="priceBox__price">
                &#165;<?php
                          $license_prices = number_format($license_price);
                          echo $license_prices;
                          ?>
              </dd>
            </dl>
            <?php endif; ?>
            <?php } ?>
          </div>
        </div>

        <div class="priceBox__container" id="price2">
          <div class="priceBox__theme">
            <p class="priceBox__theme-text">体験ダイビング</p>
          </div>
          <div class="priceBox__items">
            <?php
            $experience_fields = SCF::get_option_meta('price_options', 'experience_lists');
            foreach ($experience_fields as $experience_field) {
              $experience_content = esc_html($experience_field['experience_content']);
              $experience_subContent = esc_html($experience_field['experience_subContent']);
              $experience_price = esc_html($experience_field['experience_price']);
            ?>
            <?php if ($experience_content && $experience_subContent && $experience_price) : ?>
            <dl class="priceBox__wrapper">
              <dt class="priceBox__content"><?php echo $experience_content; ?><br
                  class="priceBox__br"><?php echo $experience_subContent; ?></dt>
              <dd class="priceBox__price">
                &#165;<?php
                          $experience_prices = number_format($experience_price);
                          echo $experience_prices;
                          ?>
              </dd>
            </dl>
            <?php endif; ?>
            <?php } ?>
          </div>
        </div>

        <div class="priceBox__container" id="price3">
          <div class="priceBox__theme">
            <p class="priceBox__theme-text">ファンダイビング</p>
          </div>
          <div class="priceBox__items">
            <?php
            $fan_fields = SCF::get_option_meta('price_options', 'fan_lists');
            foreach ($fan_fields as $fan_field) {
              $fan_content = esc_html($fan_field['fan_content']);
              $fan_subContent = esc_html($fan_field['fan_subContent']);
              $fan_price = esc_html($fan_field['fan_price']);
            ?>
            <?php if ($fan_content && $fan_subContent && $fan_price) : ?>
            <dl class="priceBox__wrapper">
              <dt class="priceBox__content"><?php echo $fan_content; ?><br
                  class="priceBox__br"><?php echo $fan_subContent; ?></dt>
              <dd class="priceBox__price">
                &#165;<?php
                          $fan_prices = number_format($fan_price);
                          echo $fan_prices;
                          ?>
              </dd>
            </dl>
            <?php endif; ?>
            <?php } ?>
          </div>
        </div>

        <div class="priceBox__container" id="price4">
          <div class="priceBox__theme">
            <p class="priceBox_theme-text">スペシャルダイビング</p>
          </div>
          <div class="priceBox__items">
            <?php
            $special_fields = SCF::get_option_meta('price_options', 'special_lists');
            foreach ($special_fields as $special_field) {
              $special_content = esc_html($special_field['special_content']);
              $special_subContent = esc_html($special_field['special_subContent']);
              $special_price = esc_html($special_field['special_price']);
            ?>
            <?php if ($special_content && $special_subContent && $special_price) : ?>
            <dl class="priceBox__wrapper">
              <dt class="priceBox__content"><?php echo $special_content; ?><br
                  class="priceBox__br"><?php echo $special_subContent; ?></dt>
              <dd class="priceBox__price">
                &#165;<?php
                          $special_prices = number_format($special_price);
                          echo $special_prices;
                          ?>
              </dd>
            </dl>
            <?php endif; ?>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>