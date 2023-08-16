  <?php
  if (is_page('information')) {
    $imagePC = '/assets/images/common/sub-information__hero-pc.jpg';
    $imageSP = '/assets/images/common/sub-information__hero-sp.jpg';
    $alt = '透き通った海のなかスキューバーダイビングをしている人の周りをたくさんの小魚が泳いでいる様子';
    $titleClass = '';
    $title = 'information';
  } elseif (is_home('blog')) {
    $imagePC = '/assets/images/common/sub-blog__hero-pc.jpg';
    $imageSP = '/assets/images/common/sub-blog__hero-sp.jpg';
    $alt = '透き通った青い海のなかをいっぱいの透き通った魚が泳いでいる様子';
    $titleClass = '';
    $title = 'blog';
  } elseif (is_page('price')) {
    $imagePC = '/assets/images/common/sub-price__hero-pc.jpg';
    $imageSP = '/assets/images/common/sub-price__hero-sp.jpg';
    $alt = 'シュノーケルが海より飛び出ている様子';
    $titleClass = '';
    $title = 'price';
  } elseif (is_page('faq')) {
    $imagePC = '/assets/images/common/sub-faq__hero-pc.jpg';
    $imageSP = '/assets/images/common/sub-faq__hero-sp.jpg';
    $alt = '青天のなか青々とした穏やかなな波が綺麗な砂浜に注ぎ込んでいる様子';
    $title = '';
    $title = 'faq';
  } elseif (is_page('contact')) {
    $imagePC = '/assets/images/common/sub-contact__hero-pc.jpg';
    $imageSP = '/assets/images/common/sub-contact__hero-sp.jpg';
    $alt = '透き通った緑色の海と陸を上空から見下ろしている様子';
    $title = '';
    $title = 'contact';
  } elseif (is_page('thanks')) {
    $imagePC = '/assets/images/common/sub-contact__hero-pc.jpg';
    $imageSP = '/assets/images/common/sub-contact__hero-sp.jpg';
    $alt = '透き通った緑色の海と陸を上空から見下ろしている様子';
    $titleClass = '';
    $title = 'site&nbsp;<span class="hero__title-text--big">map';
  } elseif (is_page('sitemap')) {
    $imagePC = '/assets/images/common/sub-siteMap__hero-pc.jpg';
    $imageSP = '/assets/images/common/sub-siteMap__hero-sp.jpg';
    $alt = '透き通った緑色の海と陸を上空から見下ろしている様子';
    $titleClass = '';
  } elseif (is_page('privacypolicy')) {
    $imagePC = '/assets/images/common/sub-siteMap__hero-pc.jpg';
    $imageSP = '/assets/images/common/sub-siteMap__hero-sp.jpg';
    $alt = '透き通った緑色の海と陸を上空から見下ろしている様子';
    $titleClass = '';
    $title = 'site&nbsp;<span class="hero__title-text--big">map';
  } elseif (is_page('privacypolicy')) {
    $imagePC = '/assets/images/common/sub-siteMap__hero-pc.jpg';
    $imageSP = '/assets/images/common/sub-siteMap__hero-sp.jpg';
    $alt = '透き通った海の中を色とりどりの魚たちが泳いでいる様子';
    $titleClass = 'hero__title-text hero__title-text--capitalize';
    $title = 'privacy&nbsp;policy';
  }

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