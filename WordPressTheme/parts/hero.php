  <?php
  if (is_page('information')) {
    $imagePC = '/assets/images/common/sub-information__hero-pc.webp';
    $imageSP = '/assets/images/common/sub-information__hero-sp.webp';
    $alt = '透き通った海のなかスキューバーダイビングをしている人の周りをたくさんの小魚が泳いでいる様子';
    $titleClass = 'hero__title-text';
    $title = 'information';
  } elseif (is_home('blog')) {
    $imagePC = '/assets/images/common/sub-blog__hero-pc.webp';
    $imageSP = '/assets/images/common/sub-blog__hero-sp.webp';
    $alt = '透き通った青い海のなかをいっぱいの透き通った魚が泳いでいる様子';
    $titleClass = 'hero__title-text';
    $title = 'blog';
  } elseif (is_month('blog') || is_year('blog')) {
    $imagePC = '/assets/images/common/sub-blog__hero-pc.webp';
    $imageSP = '/assets/images/common/sub-blog__hero-sp.webp';
    $alt = '透き通った青い海のなかをいっぱいの透き通った魚が泳いでいる様子';
    $titleClass = 'hero__title-text';
    $title = 'blog';
  } elseif (is_single()) {
    $imagePC = '/assets/images/common/sub-blog__hero-pc.webp';
    $imageSP = '/assets/images/common/sub-blog__hero-sp.webp';
    $alt = '透き通った青い海のなかをいっぱいの透き通った魚が泳いでいる様子';
    $titleClass = 'hero__title-text';
    $title = 'blog';
  } elseif (is_page('price')) {
    $imagePC = '/assets/images/common/sub-price__hero-pc.webp';
    $imageSP = '/assets/images/common/sub-price__hero-sp.webp';
    $alt = 'シュノーケルが海より飛び出ている様子';
    $titleClass = 'hero__title-text';
    $title = 'price';
  } elseif (is_page('faq')) {
    $imagePC = '/assets/images/common/sub-faq__hero-pc.webp';
    $imageSP = '/assets/images/common/sub-faq__hero-sp.webp';
    $alt = '青天のなか青々とした穏やかなな波が綺麗な砂浜に注ぎ込んでいる様子';
    $titleClass = 'hero__title-text';
    $title = 'faq';
  } elseif (is_page('contact')) {
    $imagePC = '/assets/images/common/sub-contact__hero-pc.webp';
    $imageSP = '/assets/images/common/sub-contact__hero-sp.webp';
    $alt = '透き通った緑色の海と陸を上空から見下ろしている様子';
    $titleClass = 'hero__title-text';
    $title = 'contact';
  } elseif (is_page('thanks')) {
    $imagePC = '/assets/images/common/sub-contact__hero-pc.webp';
    $imageSP = '/assets/images/common/sub-contact__hero-sp.webp';
    $alt = '透き通った緑色の海と陸を上空から見下ろしている様子';
    $titleClass = 'hero__title-text';
    $title = 'contact';
  } elseif (is_page('sitemap')) {
    $imagePC = '/assets/images/common/sub-siteMap__hero-pc.webp';
    $imageSP = '/assets/images/common/sub-siteMap__hero-sp.webp';
    $alt = '透き通った緑色の海と陸を上空から見下ろしている様子';
    $titleClass = 'hero__title-text';
    $title = 'site&nbsp;<span class="hero__title-text--big">map';
  } elseif (is_page('privacypolicy')) {
    $imagePC = '/assets/images/common/sub-siteMap__hero-pc.webp';
    $imageSP = '/assets/images/common/sub-siteMap__hero-sp.webp';
    $alt = '透き通った緑色の海と陸を上空から見下ろしている様子';
    $titleClass = 'hero__title-text hero__title-text--capitalize';
    $title = 'privacy&nbsp;policy';
  } elseif (is_page('terms-of-service')) {
    $imagePC = '/assets/images/common/sub-siteMap__hero-pc.webp';
    $imageSP = '/assets/images/common/sub-siteMap__hero-sp.webp';
    $alt = '透き通った海の中を色とりどりの魚たちが泳いでいる様子';
    $titleClass = 'hero__title-text';
    $title = 'terms&nbsp;of&nbsp;<span class="hero__title-text--capitalize">service';
  } elseif (is_page('about-us')) {
    $imagePC = '/assets/images/common/sub-aboutus__hero-pc.webp';
    $imageSP = '/assets/images/common/sub-aboutus__hero-sp.webp';
    $alt = '空をバックに黄い色のシーダーがこちらをみている様子';
    $titleClass = 'hero__title-text';
    $title = 'about&nbsp;us';
  } elseif (is_post_type_archive('campaign')) {
    $imagePC = '/assets/images/common/sub-campaign__hero-pc.webp';
    $imageSP = '/assets/images/common/sub-campaign__hero-sp.webp';
    $alt = '透き通った海の中を２匹の黄色い魚が泳いでいる様子';
    $titleClass = 'hero__title-text';
    $title = 'campaign';
  } elseif (is_tax('campaign_category')) {
    $imagePC = '/assets/images/common/sub-campaign__hero-pc.webp';
    $imageSP = '/assets/images/common/sub-campaign__hero-sp.webp';
    $alt = '透き通った海の中を２匹の黄色い魚が泳いでいる様子';
    $titleClass = 'hero__title-text';
    $title = 'campaign';
  } elseif (is_post_type_archive('voice')) {
    $imagePC = '/assets/images/common/sub-voice__hero-pc.webp';
    $imageSP = '/assets/images/common/sub-voice__hero-sp.webp';
    $alt = '5人のスキューバーたちが空を見ながら透き通った海の上に浮いている様子を上空から撮影している';
    $titleClass = 'hero__title-text';
    $title = 'voice';
  } elseif (is_tax('voice_category')) {
    $imagePC = '/assets/images/common/sub-voice__hero-pc.webp';
    $imageSP = '/assets/images/common/sub-voice__hero-sp.webp';
    $alt = '5人のスキューバーたちが空を見ながら透き通った海の上に浮いている様子を上空から撮影している';
    $titleClass = 'hero__title-text';
    $title = 'voice';
  };
  ?>

  <section class="hero">
    <picture>
      <source srcset="<?php echo esc_url(get_theme_file_uri($imagePC)); ?>" media="(min-width:768px)">
      <img src="<?php echo esc_url(get_theme_file_uri($imageSP)); ?>" alt="<?php echo $alt ?>">
    </picture>
    <div class="hero__title">
      <h2 class="<?php echo $titleClass ?>"><?php echo $title ?></h2>
    </div>
  </section>