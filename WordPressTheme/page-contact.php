<?php
/*
Template Name: お問い合わせ
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

  <div class="sub-contact under-contact">
    <figure class="sub-contact__decoration"><img
        src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/fishes-right.png" alt="魚の群れの様子">
    </figure>
    <div class="sub-contact__inner inner">
      <div class="sub-contact__content">
        <div class="sub-contact__content-error sub-contact__content-error--all-none">
          <p class="sub-contact__content-errorText">必須項目が入力されていません。<br
              class="sub-contact__content-errorText--md-show">入力してください。</p>
        </div>
        <div class="sub-contact__form contactForm">
          <form>
            <div class="contactForm__container">
              <dl>
                <dt class="contactForm__title">
                  お名前
                </dt>
                <dd class="contactForm__body">
                  <input type="text" name="your_name" placeholder="沖縄&emsp;太郎" required>
                </dd>
              </dl>
            </div>
            <div class="contactForm__container">
              <dl>
                <dt class="contactForm__title">
                  メールアドレス
                </dt>
                <dd class="contactForm__body">
                  <input type="email" name="mail_address" placeholder="aaa000@gmail.com" required>
                </dd>
              </dl>
            </div>
            <div class="contactForm__container">
              <dl>
                <dt class="contactForm__title">
                  電話番号
                </dt>
                <dd class="contactForm__body">
                  <input type="text" name="telephone_number" placeholder="000-0000-0000" required>
                </dd>
              </dl>
            </div>
            <div class="contactForm__container">
              <dl>
                <dt class="contactForm__title">
                  お問合せ項目
                </dt>
                <dd class="contactForm__body">
                  <label class="contactForm__checkbox"><input type="checkbox" required><span>ダイビング講習について</span></label>
                  <label class="contactForm__checkbox"><input type="checkbox" required><span>ファンデイビングについて</span></label>
                  <label class="contactForm__checkbox"><input type="checkbox" required><span>体験ダイビングについて</span></label>
                </dd>
              </dl>
            </div>
            <div class="contactForm__container">
              <dl>
                <dt class="contactForm__title contactForm__title--layout">
                  キャンペーン
                </dt>
                <dd class="contactForm__body contactForm__body--select">
                  <select name="select_button">
                    <option value="">キャンペーン内容を選択</option>
                    <option value="ライセンス取得">ライセンス取得</option>
                    <option value="貸切体験ダイビング">貸切体験ダイビング</option>
                    <option value="ナイトダイビング">ナイトダイビング</option>
                  </select>
                </dd>
              </dl>
            </div>
            <div class="contactForm__container">
              <dl>
                <dt class="contactForm__title">
                  お問合せ内容
                </dt>
                <dd class="contactForm__body">
                  <textarea name="contents" required></textarea>
                </dd>
              </dl>
            </div>
            <div class="contactForm__footer">
              <div class="contactForm__footer-container">
                <label class="contactForm__text"><input type="checkbox"
                    required><span>個人情報の取り扱いについて同意のうえ送信します。</span></label>
              </div>
              <div class="contactForm__button">
                <button class="button" type="submit">Send<span class="button__arrow"></span></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>