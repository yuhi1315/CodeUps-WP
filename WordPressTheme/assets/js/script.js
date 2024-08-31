"use strict";

jQuery(function ($) {
  // ページトップスクロールを制御する関数
  function handlePageTopScroll() {
    var pageTop = $(".js-page-top");
    pageTop.hide();
    $(window).scroll(function () {
      if ($(this).scrollTop() > 20) {
        pageTop.fadeIn();
      } else {
        pageTop.fadeOut();
      }
      var scrollHeight = $(document).height(); /* ページ全体の高さ */
      var scrollPosition =
        $(window).height() +
        $(window).scrollTop(); /* ページの一番上からスクロールされた距離 */
      var footerPaddingTop = parseInt($("footer").css("padding-top"));
      var footerPaddingBottom = parseInt($("footer").css("padding-bottom"));
      var footHeight =
        $("footer").height() +
        footerPaddingTop +
        footerPaddingBottom; /* フッターの高さ */

      if (scrollHeight - scrollPosition <= footHeight) {
        $(".top-scroll").css({
          position: "absolute",
          bottom: 15 + footHeight,
        });
      } else {
        $(".top-scroll").css({
          position: "fixed",
          bottom: "10px",
        });
      }
    });
    pageTop.click(function () {
      $("body, html").animate(
        {
          scrollTop: 0,
        },
        300
      );
      return false;
    });
  }

  // ハンバーガーメニューを制御する関数
  function handleHamburgerMenu() {
    $(".js-hamburger,.js-sp-nav").click(function () {
      $(".js-header").toggleClass("is-active");
      $(".js-sp-nav").fadeToggle(500);
      $(".js-hamburger").toggleClass("is-active");
      if ($("body").css("overflow") === "hidden") {
        // もし overflow が hidden なら、body のスタイルを元に戻す
        $("body").css({
          height: "",
          overflow: "",
        });
      } else {
        // そうでなければ、body に height: 100% と overflow: hidden を設定し、スクロールを無効にする
        $("body").css({
          height: "100%",
          overflow: "hidden",
        });
      }
    });
  }

  // ウィンドウリサイズ時の処理を制御する関数
  function handleWindowResize() {
    $(window).resize(function () {
      if (window.matchMedia("(min-width: 768px)").matches) {
        closeDrawer();
        $(".js-header").removeClass("is-active");
      }
    });
  }

  // ドロワーを閉じる関数
  function closeDrawer() {
    $(".js-sp-nav").fadeOut(500);
    $(".js-hamburger").removeClass("is-active");
  }

  // Swiper の初期化
  var mv__swiper = new Swiper(".js-mv-swiper", {
    effect: "fade",
    loop: true,
    autoplay: {
      delay: 0,
    },
    speed: 5000,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  var campaign__swiper = new Swiper(".js-campaign__swiper", {
    loop: true,
    loopAdditionalSlides: 2,
    pagination: {
      el: ".swiper-pagination",
      type: "progressbar",
    },
    spaceBetween: 24,
    slidesPerView: "1.26",
    speed: 4000,
    autoplay: {
      delay: 0,
    },
    breakpoints: {
      765: {
        slidesPerView: 2.5,
        spaceBetween: 40,
      },
      1440: {
        slidesPerView: 3.5,
        spaceBetween: 40,
      },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // 画像のスクロールアニメーション
  var box = $(".js-imgBg-change"),
    speed = 700;
  box.each(function () {
    $(this).append('<div class="color"></div>');
    var color = $(this).find($(".color")),
      image = $(this).find("img");
    var counter = 0;
    image.css("opacity", "0");
    color.css("width", "0%");
    // inview を使って背景色が画面に現れたら処理をする
    color.on("inview", function () {
      if (counter == 0) {
        $(this)
          .delay(200)
          .animate(
            {
              width: "100%",
            },
            speed,
            function () {
              image.css("opacity", "1");
              $(this).css({
                left: "0",
                right: "auto",
              });
              $(this).animate(
                {
                  width: "0%",
                },
                speed
              );
            }
          );
        counter = 1;
      }
    });
  });

  // 各関数の実行
  handlePageTopScroll();
  handleHamburgerMenu();
  handleWindowResize();
});
$(function () {
  var open = $(".js-modal-open"),
    close = $(".js-modal__close"),
    modal = $(".js-modal");

  //開くボタンをクリックしたらモーダルを表示する
  open.on("click", function () {
    var index = open.index(this);
    // 6n + 1 または 6n + 6 の場合
    if ((index + 1) % 6 == 1 || (index + 1) % 6 == 0) {
      $(".modal__content").addClass("is-large");
    }
    modal.addClass("is-open");
    $(".modal__content").html($(this).prop("outerHTML"));
    $("html, body").css("overflow", "hidden");
  });

  //閉じるボタンをクリックしたらモーダルを閉じる
  close.add(modal).on("click", function () {
    modal.removeClass("is-open");
    $(".modal__content").removeClass("is-large");
    $("html, body").css("overflow", "");
  });
});

//informationでタブボタンを押した時の挙動
$(function () {
  var tabButton = $(".js-tab-button"),
    tabContent = $(".js-tab-content");
  tabButton.on("click", function () {
    var index = tabButton.index(this);
    tabButton.removeClass("is-active");
    $(this).addClass("is-active");
    tabContent.removeClass("is-active");
    tabContent.eq(index).addClass("is-active");
  });
});

//FAQのアコーディオンメニュー
$(function () {
  // $(".js-accordion__item:first-child .js-accordion__content").css(
  //   "display",
  //   "block"
  // );
  // $(".js-accordion__item:first-child .js-accordion__title").addClass("is-open");
  $(".js-accordion__title").on("click", function () {
    $(this).toggleClass("is-open");
    $(this).next().slideToggle(300);
  });
});

//ページネーションの選択切り替え
$(function () {
  $(".js-pagination").on("click", function () {
    $(".js-pagination").removeClass("is-active");
    $(this).toggleClass("is-active");
  });
});
$(function () {
  // $(".js-archive-month:first-child").css("display", "block");
  $(".js-archive-year").on("click", function () {
    $(this).toggleClass("is-open");
    $(this).next().slideToggle(300);
  });
});
//サイドバー：アーカイブの開閉アニメーション

function onLoadTabChange() {
  var tabButton = $(".js-tab-button");
  var hash = location.hash;
  hash = (hash.match(/^#tab_panel-\d+$/) || [])[0];
  if (hash !== undefined) {
    var tabname = hash.slice(11);
  } else {
    var tabname = "tab_panel-1";
  }
  tabButton.removeClass("active");
  var tabno = tabname - 1;
  $(".tab__button").removeClass("is-active");
  $(".tab__content").removeClass("is-active");
  $(".tab__button").eq(tabno).addClass("is-active");
  $(".tab__content").eq(tabno).addClass("is-active");
}

//price リンク遷移時に、タブ位置までスクロール
function scrollToTab() {
  var headerHeight = $("header").height();
  var targetPostion = $(".tab__button").offset().top;
  var pos = targetPostion - headerHeight;
  $("body,html").animate(
    {
      scrollTop: pos,
    },
    500
  );
  return false;
}
//info リンク遷移時に、タブ位置までスクロール

function scrollToInfoTab() {
  var pos = $(".tab__button").offset().top - $("header").height() - 30;
  $("body,html").animate(
    {
      scrollTop: pos,
    },
    500
  );
  return false;
}
function scrollToPriceBlock(hash) {
  var headerHeight = $("header").height();
  var blockPos = $(hash).offset().top;
  var scrollPos = blockPos - headerHeight;
  $("body,html").animate(
    {
      scrollTop: scrollPos,
    },
    500
  );
  return false;
}
if (location.hash.includes("tab_panel")) {
  scrollToInfoTab();
  onLoadTabChange();
}
if (location.hash.includes("price")) {
  var hash = location.hash;
  scrollToPriceBlock(hash);
}
window.addEventListener(
  "hashchange",
  function () {
    if (window.location.hash.includes("tab")) {
      scrollToInfoTab();
      onLoadTabChange();
    } else {
      var _hash = location.hash;
      scrollToPriceBlock(_hash);
    }
  },
  false
);
jQuery(document).ready(function ($) {
  var clampLines = 5; // 表示する行数

  $(".line-clamp").each(function () {
    var lineHeight = parseInt($(this).css("line-height"));
    var maxHeight = lineHeight * clampLines;
    $(this).css({
      "max-height": maxHeight + "px",
      overflow: "hidden",
    });
  });
});

// ParticlesJSの初期化関数
function initParticlesJS(elementId) {
  if ($("#" + elementId).length) {
    particlesJS(elementId, {
      particles: {
        number: {
          value: elementId === "particles-section" ? 15 : 30,
          density: {
            enable: true,
            value_area: 1121.6780303333778,
          },
        },
        color: {
          value: "#fff",
        },
        shape: {
          type: "image",
          stroke: {
            width: 0,
          },
          image: {
            src: "https://firebasestorage.googleapis.com/v0/b/react-image-sample.appspot.com/o/flower.png?alt=media&token=4784fabf-ca7f-49cf-978b-4097f5e7c87a",
            width: 120,
            height: 120,
          },
        },
        opacity: {
          value: 0.06409588744762158,
          random: true,
          anim: {
            enable: false,
            speed: 1,
            opacity_min: 0.1,
            sync: false,
          },
        },
        size: {
          value: 10,
          random: true,
          anim: {
            enable: false,
            speed: 4,
            size_min: 0.1,
            sync: false,
          },
        },
        line_linked: {
          enable: false,
        },
        move: {
          enable: true,
          speed: 5,
          direction: "bottom-right",
          random: false,
          straight: false,
          out_mode: "out",
          bounce: false,
          attract: {
            enable: false,
            rotateX: 281.9177489524316,
            rotateY: 127.670995809726,
          },
        },
      },
      interactivity: {
        detect_on: "canvas",
        events: {
          onhover: {
            enable: false,
          },
          onclick: {
            enable: false,
          },
          resize: true,
        },
      },
      retina_detect: false,
    });
  }
}

// ドキュメントの準備ができたらParticlesJSを各セクションに適用
if (sessionStorage.getItem("access")) {
  $(window).on("load", function () {
    $(".loading").fadeOut(function () {});
  });
  $(".particles-js").fadeOut("slow");
} else {
  sessionStorage.setItem("access", 0);

  $(document).ready(function () {
    var sections = ["particles-loading"];
    sections.forEach(function (section) {
      initParticlesJS(section);
    });
  });

  $(window).on("load", function () {
    $(".loading_logo").fadeIn(3000);
    $(".loading")
      .delay(3000)
      .fadeOut("slow", function () {});
    $(".particles-js").fadeOut("slow");
  });
}
