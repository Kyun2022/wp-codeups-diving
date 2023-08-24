<?php
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( // HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}


add_action('after_setup_theme', 'my_setup');
/* CSSとJavaScriptの読み込み */
function my_script_init()
{ // WordPress提供のjquery.jsを読み込まない
  wp_deregister_script('jquery');
  // jQueryの読み込み
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', "3.6.0", true);
  // Google Fonts
  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap',
    array(),
    null
  );
  // micromodal
  wp_enqueue_script('polyfill', 'https://polyfill.io/v3/polyfill.min.js?features=es6', "", "1.0.0", false);
  wp_enqueue_script('micro-modal', 'https://unpkg.com/micromodal/dist/micromodal.min.js', array(), "1.0.1", false);
  // swiper
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', "", "9.0.0", true);
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', "", "9.0.0", 'all');
  // inview
  wp_enqueue_script('main-js', get_theme_file_uri('/assets/js/jquery.inview.min.js?20230816'), array('jquery'), '1.0.1', true);
  // 自作jsファイルの読み込み
  wp_enqueue_script('main', get_theme_file_uri('/assets/js/script.js?20230816'), array('jquery'), '1.0.1', true);
  // 自作cssファイルの読み込み
  wp_enqueue_style('style-css', get_theme_file_uri('assets/css/style.css?20230816'), '1.0.1', false);
}
add_action('wp_enqueue_scripts', 'my_script_init');



//記事表示時の整形無効
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

// ビジュアルエディタ(TinyMCE)の整形無効
add_filter(
  'tiny_mce_before_init',
  function ($init_array) {
    global $allowedposttags;
    $init_array['valid_elements'] = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';
    $init_array['valid_children'] = '+a[' . implode('|', array_keys($allowedposttags)) . ']';
    $init_array['indent'] = true;
    $init_array['wpautop'] = false;
    $init_array['force_p_newlines'] = false;
    return $init_array;
  }
);

// 管理画面の『投稿』の名前を変える
function Change_menulabel()
{
  global $menu;
  global $submenu;
  $name = 'ブログ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name . '一覧';
  $submenu['edit.php'][10][0] = '新しい' . $name;
}
function Change_objectlabel()
{
  global $wp_post_types;
  $name = 'ブログ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name . 'の新規追加';
  $labels->edit_item = $name . 'の編集';
  $labels->new_item = '新規' . $name;
  $labels->view_item = $name . 'を表示';
  $labels->search_items = $name . 'を検索';
  $labels->not_found = $name . 'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');


// Archiveページ月別選択
function blog_get_archives_callback($item, $index, $currYear)
{
  global $wp_locale;

  if ($item['year'] == $currYear) {
    $url = get_month_link($item['year'], $item['month']);
    // 月名と年の表示
    $text = $wp_locale->get_month($item['month']);
    echo '<li class="archive__sub-item archive__sub-item--layout"><a href="' . esc_url($url) . '">' . esc_html($text) . '</a></li>';
  }
}

function blog_get_archives()
{
  global $wpdb;

  $query = "SELECT YEAR(post_date) AS `year` FROM $wpdb->posts WHERE `post_type` = 'post' AND `post_status` = 'publish' GROUP BY `year` ORDER BY `year` DESC";
  $arcResults = $wpdb->get_results($query);
  $years = array();

  if ($arcResults) {
    foreach ((array)$arcResults as $arcResult) {
      array_push($years, $arcResult->year);
    }
  }

  $query = "SELECT YEAR(post_date) as `year`, MONTH(post_date) as `month` FROM $wpdb->posts WHERE `post_type` = 'post' AND `post_status` = 'publish' GROUP BY `year`, `month` ORDER BY `year` DESC, `month` ASC";
  $arcResults = $wpdb->get_results($query, ARRAY_A);
  $months = array();

  if ($arcResults) {
    foreach ($years as $year) {
      echo '<li class="archive__item archive__item--newLayout js-archive-item--open">';
      echo  $year;
      echo '<ul class="archive__sub-items js-subItems--open">';

      array_walk($arcResults, "blog_get_archives_callback", $year);

      echo '</li>';
      echo '</ul>';
      echo '</li>';
    }
  }
}

// smart_custom_field
/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（manage_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
SCF::add_options_page('wp-codeups__DIVING', 'ギャラリー画像', 'manage_options', 'gallery_options','','4'); //管理画面の4番目にメニュー設置
SCF::add_options_page('wp-codeups__DIVING', '料金一覧', 'manage_options', 'price_options','','4'); //管理画面の５番目にメニュー設置
SCF::add_options_page('wp-codeups__DIVING', 'よくある質問', 'manage_options', 'FAQ_options','','4'); //管理画面の５番目にメニュー設置

// ContactForm7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}