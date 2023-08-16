jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  /*//////////////////////////////////////
Common
/////////////////////////////////////*/
  // ハンバーガー
  $(".js-hamburger").on("click", function () {
    if ($(".js-hamburger").hasClass("is-open")) {
      $(".js-drawerMenu").fadeOut();
      $(this).removeClass("is-open");
      $("body").removeClass("active");
    } else {
      $(".js-drawerMenu").fadeIn();
      $(this).addClass("is-open");
      $("body").addClass("active");
    }
  });

  //スクロールした際の動きを関数でまとめる
  function PageTopAnime() {
    var scroll = $(window).scrollTop(); //スクロール値を取得
    if (scroll >= 200) {
      //200pxスクロールしたら
      $("#pageTop").removeClass("DownMove"); // DownMoveというクラス名を除去して
      $("#pageTop").addClass("UpMove"); // UpMoveというクラス名を追加して出現
    } else {
      //それ以外は
      if ($("#pageTop").hasClass("UpMove")) {
        //UpMoveというクラス名が既に付与されていたら
        $("#pageTop").removeClass("UpMove"); //  UpMoveというクラス名を除去し
        $("#pageTop").addClass("DownMove"); // DownMoveというクラス名を追加して非表示
      }
    }

    var wH = window.innerHeight; //画面の高さを取得
    var footerPos = $("#footer").offset().top; //footerの位置を取得
    if (scroll + wH >= footerPos + 10) {
      var pos = scroll + wH - footerPos + 10; //スクロールの値＋画面の高さからfooterの位置＋10pxを引いた場所を取得し
      $("#pageTop").css("bottom", pos); //#pageTopに上記の値をCSSのbottomに直接指定してフッター手前で止まるようにする
    } else {
      //それ以外は
      if ($("#pageTop").hasClass("UpMove")) {
        //UpMoveというクラス名がついていたら
        $("#pageTop").css("bottom", "10px"); // 下から10pxの位置にページリンクを指定
      }
    }
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    PageTopAnime(); /* スクロールした際の動きの関数を呼ぶ*/
  });

  // ページが読み込まれたらすぐに動かしたい場合の記述
  $(window).on("load", function () {
    PageTopAnime(); /* スクロールした際の動きの関数を呼ぶ*/
  });

  // #pageTopをクリックした際の設定
  $("#pageTop").click(function () {
    $("body,html").animate(
      {
        scrollTop: 0, //ページトップまでスクロール
      },
      500
    ); //ページトップスクロールの速さ。数字が大きいほど遅くなる
    return false; //リンク自体の無効化
  });

  // スクロールするとロゴの色変更
  $(function () {
    $(window).on("scroll", function () {
      const sliderHeight = $(".mv").height();
      if (sliderHeight - 30 < $(this).scrollTop()) {
        $(".js-header").addClass("headerColorScroll");
      } else {
        $(".js-header").removeClass("headerColorScroll");
      }
    });
  });

  $(function () {
    // 別ページの場合は以下
    var urlHash = location.hash;
    if (urlHash) {
      $("body,html").stop().scrollTop(0);
      setTimeout(function () {
        // ヘッダー固定の場合はヘッダーの高さを数値で入れる、固定でない場合は0
        var headerHight = 130;
        var target = $(urlHash);
        var position = target.offset().top - headerHight;
        $("body,html").stop().animate({ scrollTop: position }, 400);
      }, 100);
    }
  });
  /*//////////////////////////////////////
Top
/////////////////////////////////////*/
  // ローディングアニメーション
  $(window).on("load", function () {
    const loadCount = sessionStorage.getItem("loadCount");

    // 初回のロード時の処理
    if (loadCount === null) {
      $(".js-loading").delay(0).fadeIn(900);
      $(".js-loadingTitle").delay(300).fadeIn(800);
      $(".js-loading").delay(2000).fadeOut(900);
      $("body")
        .delay(2500) // ローディング画面を表示した時間に合わせて適切な時間を設定
        .queue(function (next) {
          $("body").removeClass("js-fixed");
          next();
        });
      sessionStorage.setItem("loadCount", 1);
    } else {
      // 2回目以降のロード時の処理
      $(".js-loading").hide();
      $(".js-loadingTitle").hide();
      $("body").removeClass("js-fixed");
      $(window).scrollTop(0); // スクロール位置をトップに戻す
    }
  });

  // Swiper
  const swiper = new Swiper(".js-mv-slider", {
    loop: true,
    allowTouchMove: false,
    effect: "fade",
    speed: 3000,
    autoplay: {
      delay: 3000,
    },
  });

  // Swiperカード
  const mySwiperWrapper = document.querySelector(".swiper-wrapper");
  const horizonSlider = new Swiper(".js-campaign-slider", {
    loop: true,
    effect: "slide",
    disableOnInteraction: false, // 矢印をクリックしても自動再生を止めない
    slidesPerView: 1.26,
    breakpoints: {
      768: {
        slidesPerView: 3.29,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3.49,
        spaceBetween: 40,
      },
    },
    spaceBetween: 24,
    speed: 2000,
    autoplay: {
      delay: 1000,
    },
    // 前後の矢印
    navigation: {
      prevEl: ".slider__prevButton",
      nextEl: ".slider__nextButton",
    },
  });

  // 背景色アニメーション
  // 要素の取得とスピードの設定
  const box = $(".js-slideColor"),
    speed = 600;

  //.js-slideColorの付いた全ての要素に対して下記の処理を行う
  box.each(function () {
    $(".js-slideColor").append('<div class="is-view"></div>');
    const color = $(".js-slideColor").find($(".is-view")),
      image = $(this).find("img");
    let counter = 0;

    image.css("opacity", "0");
    color.css("width", "0%");
    //inviewを使って背景色が画面に現れたら処理をする
    color.on("inview", function () {
      if (counter === 0) {
        $(this)
          .delay(300)
          .animate({ width: "100%" }, speed, function () {
            image.css("opacity", "1");
            $(this).css({ left: "0", right: "auto" });
            $(this).animate({ width: "0%" }, speed);
          });
        counter = 1;
      }
    });
  });

  const box2 = $(".js-slideColor2"),
    speed2 = 600;
  //.js-slideColorの付いた全ての要素に対して下記の処理を行う

  box2.each(function () {
    $(".js-slideColor2").append('<div class="is-view2"></div>');
    const color2 = $(".js-slideColor2").find($(".is-view2")),
      image2 = $(this).find("img");
    let counter2 = 0;

    image2.css("opacity", "0");
    color2.css("width", "0%");
    //inviewを使って背景色が画面に現れたら処理をする
    color2.on("inview", function () {
      if (counter2 === 0) {
        $(this)
          .delay(300)
          .animate({ width: "100%" }, speed2, function () {
            image2.css("opacity", "1");
            $(this).css({ left: "0", right: "auto" });
            $(this).animate({ width: "0%" }, speed2);
          });
        counter2 = 1;
      }
    });
  });

  const box3 = $(".js-slideColor3"),
    speed3 = 600;
  //.js-slideColorの付いた全ての要素に対して下記の処理を行う

  box3.each(function () {
    $(".js-slideColor3").append('<div class="is-view3"></div>');
    const color3 = $(".js-slideColor3").find($(".is-view3")),
      image3 = $(this).find("img");
    let counter3 = 0;

    image3.css("opacity", "0");
    color3.css("width", "0%");
    //inviewを使って背景色が画面に現れたら処理をする
    color3.on("inview", function () {
      if (counter3 === 0) {
        $(this)
          .delay(300)
          .animate({ width: "100%" }, speed3, function () {
            image3.css("opacity", "1");
            $(this).css({ left: "0", right: "auto" });
            $(this).animate({ width: "0%" }, speed3);
          });
        counter3 = 1;
      }
    });
  });

  const box4 = $(".js-slideColor4"),
    speed4 = 600;
  //.js-slideColorの付いた全ての要素に対して下記の処理を行う

  box4.each(function () {
    $(".js-slideColor4").append('<div class="is-view4"></div>');
    const color4 = $(".js-slideColor4").find($(".is-view4")),
      image4 = $(this).find("img");
    let counter4 = 0;

    image4.css("opacity", "0");
    color4.css("width", "0%");
    //inviewを使って背景色が画面に現れたら処理をする
    color4.on("inview", function () {
      if (counter4 === 0) {
        $(this)
          .delay(300)
          .animate({ width: "100%" }, speed4, function () {
            image4.css("opacity", "1");
            $(this).css({ left: "0", right: "auto" });
            $(this).animate({ width: "0%" }, speed4);
          });
        counter4 = 1;
      }
    });
  });

  /*//////////////////////////////////////
aboutUs
/////////////////////////////////////*/
  MicroModal.init({
    awaitCloseAnimation: true,
    awaitOpenAnimation: true,
    disableScroll: true,
  });
  /*//////////////////////////////////////
information
/////////////////////////////////////*/

  // タブメニュー
  const $js_tab = $(".js-infoTab-trigger");
  const $js_tab_target = $(".js-infoContent-target");
  const cls = "is-active";

  $js_tab.on("click", function () {
    const this_category = $(this).data("category");
    $js_tab.removeClass(cls);
    $(this).addClass(cls);
    $js_tab_target.removeClass(cls);
    $js_tab_target.each(function () {
      const target_data = $(this).data("target");
      if (this_category === target_data) {
        $(this).addClass(cls);
      }
    });
  });

  //タブへダイレクトリンクの実装
  $(function () {
    //リンクからハッシュを取得
    var hash = location.hash;
    hash = (hash.match(/^#tab_panel-\d+$/) || [])[0];
    //リンクにハッシュが入っていればtabNameに格納
    if ($(hash).length) {
      var tabName = hash.slice(1);
    } else {
      var tabName = "tab_panel-1";
    }
    //コンテンツ非表示・タブを非アクティブ
    $(".js-infoTab-trigger").removeClass("is-active");
    $(".js-infoContent-target").removeClass("is-active");
    //何番目のタブかを格納
    var tabNo = $(".js-infoContent-target#" + tabName).index();
    //コンテンツ表示
    $(".js-infoContent-target").eq(tabNo).addClass("is-active");
    //タブのアクティブ化
    $(".js-infoTab-trigger").eq(tabNo).addClass("is-active");
  });
  /*//////////////////////////////////////
blog
/////////////////////////////////////*/
  $(function () {
    // タイトルをクリックすると
    // タイトルをクリックすると
    $(".js-archive-item--old").on("click", function () {
      // クリックした次の要素を開閉
      $(".js-subItems--old").next().slideToggle(600);
      // タイトルにopenクラスを付け外しして矢印の向きを変更
      $(".js-subItems--old").toggleClass("open", 600);
      $(".archive__item--oldLayout").toggleClass("open", 600);
    });
  });
  $(function () {
    // タイトルをクリックすると
    $(".js-archive-item--new").on("click", function () {
      // クリックした次の要素を開閉
      $(".js-subItems--new").next().slideToggle(600);
      // タイトルにopenクラスを付け外しして矢印の向きを変更
      $(".js-subItems--new").toggleClass("open", 600);
      $(".archive__item--newLayout").toggleClass("open", 600);
    });
  });

  /*//////////////////////////////////////
FAQ
/////////////////////////////////////*/
  $(function () {
    // タイトルをクリックすると
    $(".js-faqAccordion-title").on("click", function () {
      // クリックした次の要素を開閉
      $(this).next().slideToggle(300);
      // タイトルにopenクラスを付け外しして矢印の向きを変更
      $(this).toggleClass("open", 300);
    });
  });

  /*//////////////////////////////////////
終了
/////////////////////////////////////*/
});
