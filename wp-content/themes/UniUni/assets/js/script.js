$(function() {
	$('body').fadeIn(1000); //1秒かけてフェードイン！
});


$(function() {
  $(".j-header_btn").click(function() {
      $("html").toggleClass("is-scroll-prevent");
  });
});

const swiper_fv = new Swiper('.slider_fv', {
  centeredSlides: true,
  loop: true,
  speed: 500,
  slidesPerView: 1,
  spaceBetween: 12,
	initialSlide: 1,
  autoplay: {
  delay: 8000,
  },
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
  pagination: {
		el: '.swiper-pagination-fv',
		type: 'bullets',
		clickable: true
	},
});


const slider_fv_cont = new Swiper('.slider_fv_cont', {
  centeredSlides: true,
  loop: true,
  speed: 500,
  slidesPerView: 1.5,
  effect: 'fade',
	initialSlide: 1,
  fadeEffect: {
    crossFade: true
},
  breakpoints: {

      640: {
          slidesPerView: 1,
      },
      768: {
          slidesPerView: 1,
      },
      1080: {
          slidesPerView: 1,
      },
      1280: {
          slidesPerView: 1,
      },
  },
});
swiper_fv.controller.control =slider_fv_cont;
slider_fv_cont.controller.control =swiper_fv;

const swiper_series = new Swiper('.slider_series_post', {
  centeredSlides: true,
  loop: true,
  speed: 500,
  slidesPerView: 1,
  spaceBetween: 12,
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
  breakpoints: {

      640: {
          slidesPerView: 1,
      },
      768: {
          slidesPerView: 1,
      },
      1080: {
          slidesPerView: 1,
      },
      1280: {
          slidesPerView: 1,
      },
  },
});

const swiper_mv = new Swiper('.slider_mv', {
  centeredSlides: true,
  loop: true,
  speed: 500,
  slidesPerView: 1.5,
  spaceBetween: 12,
  autoplay: {
      delay: 10000,
  },
  navigation: {
      nextEl: '.swiper-button-next--mv',
      prevEl: '.swiper-button-prev--mv',
  },
  pagination: {
		el: '.swiper-pagination',
		type: 'bullets',
		clickable: true
	},
  breakpoints: {

      640: {
          slidesPerView: 2,
      },
      768: {
          slidesPerView: 2,
      },
      1080: {
          slidesPerView: 2,
      },
      1280: {
          slidesPerView: 2,
      },
  },
});

const swiper_serialization = new Swiper('.slider_serialization', {
  centeredSlides: true,
  loop: true,
  speed: 500,
  slidesPerView: 1.5,
  spaceBetween: 12,
  navigation: {
      nextEl: '.swiper-button-next--series',
      prevEl: '.swiper-button-prev--series',
  },
  // pagination: {
	// 	el: '.swiper-pagination',
	// 	type: 'bullets',
	// 	clickable: true
	// },
  breakpoints: {

      640: {
          slidesPerView: 2.5,
      },
      768: {
          slidesPerView: 2.75,
      },
      1080: {
          slidesPerView: 3.25,
      },
      1280: {
          slidesPerView: 3,
      },
  },
});


const swiper_video = new Swiper('.slider_video', {
  centeredSlides: true,
  loop: true,
  speed: 500,
  slidesPerView: 1.5,
  spaceBetween: 12,
  navigation: {
      nextEl: '.swiper-button-next--video',
      prevEl: '.swiper-button-prev--video',
  },
  // pagination: {
	// 	el: '.swiper-pagination',
	// 	type: 'bullets',
	// 	clickable: true
	// },
  breakpoints: {

      640: {
          slidesPerView: 2.5,
      },
      768: {
          slidesPerView: 2.75,
      },
      1080: {
          slidesPerView: 3.25,
      },
      1280: {
          slidesPerView: 2,
      },
  },
});

//任意のタブにURLからリンクするための設定
function GethashID (hashIDName){
  if(hashIDName){
    //タブ設定
    $('.tab li').find('a').each(function() { //タブ内のaタグ全てを取得
      var idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得
      if(idName == hashIDName){ //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
        var parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
        $('.tab li').removeClass("active"); //タブ内のliについているactiveクラスを取り除き
        $(parentElm).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
        //表示させるエリア設定
        $(".area").removeClass("is-active"); //もともとついているis-activeクラスを取り除き
        $(hashIDName).addClass("is-active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加
      }
    });
  }
}

//タブをクリックしたら
$('.tab a').on('click', function() {
  var idName = $(this).attr('href'); //タブ内のリンク名を取得
  GethashID (idName);//設定したタブの読み込みと
  return false;//aタグを無効にする
});


// 上記の動きをページが読み込まれたらすぐに動かす
$(window).on('load', function () {
    $('.tab li:first-of-type').addClass("active"); //最初のliにactiveクラスを追加
    $('.area--rank:first-of-type').addClass("is-active"); //最初の.areaにis-activeクラスを追加
  var hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
  GethashID (hashName);//設定したタブの読み込み
});


//任意のタブにURLからリンクするための設定
function GethashIDrank (hashIDName){
  if(hashIDName){
    //タブ設定
    $('.tab--rank li').find('a').each(function() { //タブ内のaタグ全てを取得
      var idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得
      if(idName == hashIDName){ //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
        var parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
        $('.tab--rank li').removeClass("active"); //タブ内のliについているactiveクラスを取り除き
        $(parentElm).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
        //表示させるエリア設定
        $(".area--rank").removeClass("is-active"); //もともとついているis-activeクラスを取り除き
        $(hashIDName).addClass("is-active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加
      }
    });
  }
}

//タブをクリックしたら
$('.tab--rank a').on('click', function() {
  var idName = $(this).attr('href'); //タブ内のリンク名を取得
  GethashIDrank (idName);//設定したタブの読み込みと
  return false;//aタグを無効にする
});


// 上記の動きをページが読み込まれたらすぐに動かす
$(window).on('load', function () {
    $('.tab--rank li:first-of-type').addClass("active"); //最初のliにactiveクラスを追加
    $('.area--rank:first-of-type').addClass("is-active"); //最初の.areaにis-activeクラスを追加
  var hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
  GethashIDrank (hashName);//設定したタブの読み込み
});


// if(navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/i)){
// 	$(window).on("scroll", function() {
//     scrollHeight = $(document).height();
//     scrollPosition = $(window).height() + $(window).scrollTop();
//     footerHeight = $(".l-footer").innerHeight();
//     breadcrumbsHeight = $(".l-section--breadcrumbs").innerHeight();
//     contentsBottomHeight = $(".contents_bottom").innerHeight();
//     if ($(this).scrollTop() < 350) {
//       $(".c-post_sns_left").css({
//         "position":"absolute",
//         "top":"20px",
//         "opacity":"1",
//         "transition":".5s",
//       });
//     }else{
//     if($(this).scrollTop() < 355) {
//       $(".c-post_sns_left").css({
//         "opacity":"0",
//       });
//     }else{
//       if($(this).scrollTop() < 400) {
//       $(".c-post_sns_left").css({
//         "position":"absolute",
//         "top":"20px",
//         "opacity":"0",
//         "transition":".5s",
//       });
//     }else{
//       if($(this).scrollTop() < 500) {
//       $(".c-post_sns_left").css({
//         "position": "fixed",
//         "bottom":"auto",
//         "top":"30px",
//         "opacity":"1",
//         "transition":".5s",
//       });
//     }else{
//     if ( scrollHeight - scrollPosition  <= footerHeight + breadcrumbsHeight + contentsBottomHeight - 220) {
//       $(".c-post_sns_left").css({
//         "position":"absolute",
//         "top":"auto",
//         "bottom":"-10px",
//       });
//     } else {
//       $(".c-post_sns_left").css({
//         "position": "fixed",
//         "top":"30px",
//         "bottom":"auto",
//       });
//     }
//   }}}}});

//   $(window).on("scroll", function() {
//     scrollHeight = $(document).height();
//     scrollPosition = $(window).height() + $(window).scrollTop();
//     footerHeight = $(".l-footer").innerHeight();
//     breadcrumbsHeight = $(".l-section--breadcrumbs").innerHeight();
//     contentsBottomHeight = $(".contents_bottom").innerHeight();
//     if ($(this).scrollTop() < 350) {
//       $(".c-post_sns_right").css({
//         "position":"absolute",
//         "top":"20px",
//         "opacity":"1",
//         "transition":".5s",
//       });
//     }else{
//     if($(this).scrollTop() < 355) {
//       $(".c-post_sns_right").css({
//         "opacity":"0",
//       });
//     }else{
//       if($(this).scrollTop() < 400) {
//       $(".c-post_sns_right").css({
//         "position":"absolute",
//         "top":"20px",
//         "opacity":"0",
//         "transition":".5s",
//       });
//     }else{
//       if($(this).scrollTop() < 500) {
//       $(".c-post_sns_right").css({
//         "position": "fixed",
//         "bottom":"auto",
//         "top":"30px",
//         "opacity":"1",
//         "transition":".5s",
//       });
//     }else{
//     if ( scrollHeight - scrollPosition  <= footerHeight + breadcrumbsHeight + contentsBottomHeight - 220) {
//       $(".c-post_sns_right").css({
//         "position":"absolute",
//         "top":"auto",
//         "bottom":"-10px",
//       });
//     } else {
//       $(".c-post_sns_right").css({
//         "position": "fixed",
//         "top":"30px",
//         "bottom":"auto",
//       });
//     }
//   }}}}});
// }else{
// 	$(window).on("scroll", function() {
//     scrollHeight = $(document).height();
//     scrollPosition = $(window).height() + $(window).scrollTop();
//     footerHeight = $(".l-footer").innerHeight();
//     breadcrumbsHeight = $(".l-section--breadcrumbs").innerHeight();
//     contentsBottomHeight = $(".contents_bottom").innerHeight();
//     if ($(this).scrollTop() < 350) {
//       $(".c-post_sns_left").css({
//         "position":"absolute",
//         "top":"130px",
//         "opacity":"1",
//         "transition":".5s",
//       });
//     }else{
//     if($(this).scrollTop() < 355) {
//       $(".c-post_sns_left").css({
//         "opacity":"0",
//       });
//     }else{
//       if($(this).scrollTop() < 630) {
//       $(".c-post_sns_left").css({
//         "position":"absolute",
//         "top":"130px",
//         "opacity":"0",
//         "transition":".5s",
//       });
//     }else{
//       if($(this).scrollTop() < 700) {
//       $(".c-post_sns_left").css({
//         "position": "fixed",
//         "bottom":"60.2%",
//         "top":"auto",
//         "opacity":"1",
//         "transition":".5s",
//       });
//     }else{
//     if ( scrollHeight - scrollPosition  <= footerHeight + breadcrumbsHeight + contentsBottomHeight - 365 ) {
//       $(".c-post_sns_left").css({
//         "position":"absolute",
//         "bottom":"0px",
//         "top":"auto",
//         "opacity":"1",
//         "transition":"auto",
//       });
//     } else {
//       $(".c-post_sns_left").css({
//         "position": "fixed",
//         "bottom":"60.2%",
//         "top":"auto",
//         "opacity":"1",
//         "transition":"auto",
//       });
//     }
//   }}}}});

//   $(window).on("scroll", function() {
//     scrollHeight = $(document).height();
//     scrollPosition = $(window).height() + $(window).scrollTop();
//     footerHeight = $(".l-footer").innerHeight();
//     breadcrumbsHeight = $(".l-section--breadcrumbs").innerHeight();
//     contentsBottomHeight = $(".contents_bottom").innerHeight();
//     if ($(this).scrollTop() < 350) {
//       $(".c-post_sns_right").css({
//         "position":"absolute",
//         "top": "130px",
//         "opacity":"1",
//         "transition":".5s",
//       });
//     }else{
//     if($(this).scrollTop() < 355) {
//       $(".c-post_sns_right").css({
//         "opacity":"0",
//       });
//     }else{
//       if($(this).scrollTop() < 630) {
//       $(".c-post_sns_right").css({
//         "position":"absolute",
//         "top":"130px",
//         "opacity":"0",
//         "transition":".5s",
//       });
//     }else{
//       if($(this).scrollTop() < 700) {
//       $(".c-post_sns_right").css({
//         "position": "fixed",
//         "bottom":"60.2%",
//         "top":"auto",
//         "opacity":"1",
//         "transition":".5s",
//       });
//     }else{
//     if ( scrollHeight - scrollPosition  <= footerHeight + breadcrumbsHeight + contentsBottomHeight - 365 ) {
//       $(".c-post_sns_right").css({
//         "position":"absolute",
//         "bottom":"0px",
//         "top":"auto",
//         "opacity":"1",
//         "transition":"auto",
//       });
//     } else {
//       $(".c-post_sns_right").css({
//         "position": "fixed",
//         "bottom":"60.2%",
//         "top":"auto",
//         "opacity":"1",
//         "transition":"auto",
//       });
//     }
//   }}}}});
// }

// if(navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/i)){
// 	$(window).on("scroll", function() {
//     scrollHeight = $(document).height();
//     scrollPosition = $(window).height() + $(window).scrollTop();
//     footerHeight = $(".l-footer").innerHeight();
//     breadcrumbsHeight = $(".l-section--breadcrumbs").innerHeight();
//     contentsBottomHeight = $(".contents_bottom").innerHeight();
//     if ( scrollHeight - scrollPosition  <= footerHeight + breadcrumbsHeight + contentsBottomHeight -130) {
//       $(".c-post_sns_left--fixed").css({
//         "position":"absolute",
//         "bottom":"-10px",
//         "top":"auto",
//       });
//     } else {
//       $(".c-post_sns_left--fixed").css({
//         "position": "fixed",
//         "top":" 110px",
//         "bottom":"auto%",
//       });
//     }
//   });

//   $(window).on("scroll", function() {
//     scrollHeight = $(document).height();
//     scrollPosition = $(window).height() + $(window).scrollTop();
//     footerHeight = $(".l-footer").innerHeight();
//     breadcrumbsHeight = $(".l-section--breadcrumbs").innerHeight();
//     contentsBottomHeight = $(".contents_bottom").innerHeight();
//     if ( scrollHeight - scrollPosition  <= footerHeight + breadcrumbsHeight + contentsBottomHeight -130) {
//       $(".c-post_sns_right--fixed").css({
//         "position":"absolute",
//         "bottom":"-10px",
//         "top":"auto",
//       });
//     } else {
//       $(".c-post_sns_right--fixed").css({
//         "position": "fixed",
//         "top":" 110px",
//         "bottom":"auto",
//       });
//     }
//   });
// }else{
// 	$(window).on("scroll", function() {
//     scrollHeight = $(document).height();
//     scrollPosition = $(window).height() + $(window).scrollTop();
//     footerHeight = $(".l-footer").innerHeight();
//     breadcrumbsHeight = $(".l-section--breadcrumbs").innerHeight();
//     contentsBottomHeight = $(".contents_bottom").innerHeight();
//     if ( scrollHeight - scrollPosition  <= footerHeight + breadcrumbsHeight + contentsBottomHeight - 400 ) {
//       $(".c-post_sns_left--fixed").css({
//         "position":"absolute",
//         "top":"auto",
//         "bottom":"0px",
//       });
//     } else {
//       $(".c-post_sns_left--fixed").css({
//         "position": "fixed",
//         "top":"215px",
//         "bottom":"auto",
//       });
//     }
//   });

//   $(window).on("scroll", function() {
//     scrollHeight = $(document).height();
//     scrollPosition = $(window).height() + $(window).scrollTop();
//     footerHeight = $(".l-footer").innerHeight();
//     breadcrumbsHeight = $(".l-section--breadcrumbs").innerHeight();
//     contentsBottomHeight = $(".contents_bottom").innerHeight();
//     if ( scrollHeight - scrollPosition  <= footerHeight + breadcrumbsHeight + contentsBottomHeight - 400 ) {
//       $(".c-post_sns_right--fixed").css({
//         "position":"absolute",
//         "top":"auto",
//         "bottom":"0px",
//       });
//     } else {
//       $(".c-post_sns_right--fixed").css({
//         "position": "fixed",
//         "top":"215px",
//         "bottom":"auto",
//       });
//     }
//   });
// }


//スクロールした際の動きを関数でまとめる
function PageTopAnime() {

  if(navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/i)){
    var scroll = $(window).scrollTop(); //スクロール値を取得
    if (scroll >= 250){//200pxスクロールしたら
      $('#btn-fixed').removeClass('DownMove');   // DownMoveというクラス名を除去して
      $('#btn-fixed').addClass('UpMove');      // UpMoveというクラス名を追加して出現
    }else{//それ以外は
      if($('#btn-fixed').hasClass('UpMove')){//UpMoveというクラス名が既に付与されていたら
        $('#btn-fixed').removeClass('UpMove'); //  UpMoveというクラス名を除去し
        $('#btn-fixed').addClass('DownMove');  // DownMoveというクラス名を追加して非表示
      }
    }

    var wH = window.innerHeight; //画面の高さを取得
    var btnfixedPos =  $('#btn-fixed_area').offset().top; //footerの位置を取得
    if(scroll+wH >= (btnfixedPos-10)) {
      var pos = (scroll+wH) - btnfixedPos+10 //スクロールの値＋画面の高さからfooterの位置＋10pxを引いた場所を取得し
      $('#btn-fixed').css('bottom',pos); //#page-topに上記の値をCSSのbottomに直接指定してフッター手前で止まるようにする
    }else{//それ以外は
      if($('#btn-fixed').hasClass('UpMove')){//UpMoveというクラス名がついていたら
        $('#btn-fixed').css('bottom','10px');// 下から10pxの位置にページリンクを指定
      }
    };
  }else{
    var scroll = $(window).scrollTop(); //スクロール値を取得
    if (scroll >= 500){//200pxスクロールしたら
      $('#btn-fixed').removeClass('DownMove');   // DownMoveというクラス名を除去して
      $('#btn-fixed').addClass('UpMove');      // UpMoveというクラス名を追加して出現
    }else{//それ以外は
      if($('#btn-fixed').hasClass('UpMove')){//UpMoveというクラス名が既に付与されていたら
        $('#btn-fixed').removeClass('UpMove'); //  UpMoveというクラス名を除去し
        $('#btn-fixed').addClass('DownMove');  // DownMoveというクラス名を追加して非表示
      }
    }

    var wH = window.innerHeight; //画面の高さを取得
    var btnfixedPos =  $('#btn-fixed_area').offset().top; //footerの位置を取得
    if(scroll+wH >= (btnfixedPos+530)) {
      var pos = (scroll+wH) - btnfixedPos-530 //スクロールの値＋画面の高さからfooterの位置＋10pxを引いた場所を取得し
      $('#btn-fixed').css('bottom',pos); //#page-topに上記の値をCSSのbottomに直接指定してフッター手前で止まるようにする
    }else{//それ以外は
      if($('#btn-fixed').hasClass('UpMove')){//UpMoveというクラス名がついていたら
        $('#btn-fixed').css('bottom','10px');// 下から10pxの位置にページリンクを指定
      }
    }
  };
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
PageTopAnime();/* スクロールした際の動きの関数を呼ぶ*/
});

$(function() {
  //Mobile判定
  var mobile = false;
  var ua = navigator.userAgent;
  if (
    ua.indexOf("iPhone") > 0 ||
    ua.indexOf("iPod") > 0 ||
    ua.indexOf("iPad") > 0 ||
    (ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0)
  ) {
    mobile = true;
  }
  //スマホの場合muted属性追加
  if (mobile) {
    $("iframe").each(function() {
      $(this).attr("muted", "");
    });
  }
  $(".thumb").click(function() {
    var player = $(this).next("iframe")[0].contentWindow;
    player.postMessage('{"event":"command","func":"playVideo","args":""}', "*");
    $(this).hide();
  });
});

$(function() {
  //Mobile判定
  var mobile = false;
  var ua = navigator.userAgent;
  if (
    ua.indexOf("iPhone") > 0 ||
    ua.indexOf("iPod") > 0 ||
    ua.indexOf("iPad") > 0 ||
    (ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0)
  ) {
    mobile = true;
  }
  //スマホの場合muted属性追加
  if (mobile) {
    $("iframe").each(function() {
      $(this).attr("muted", "");
    });
  }
  $(".p-video_youtube_btn").click(function() {
    var player = $(this).next("iframe")[0].contentWindow;
    player.postMessage('{"event":"command","func":"playVideo","args":""}', "*");
    $(this).hide();
    $(".p-video_youtube_thumb").hide();
  });
});

const header = document.querySelector('.j-header');
  const header_btn = document.querySelector('.j-header_btn');

  header_btn.addEventListener('click', ()=>{
    if(header.classList.contains('is-active')){
      header.classList.remove('is-active');
    }else {
      header.classList.add('is-active');
    }
  });

  const tab_latest_btn = document.querySelector('.tab_new_list');
  const tab_all_btn = document.querySelector('.tab_successive_list');
  const tab_latest = document.querySelector('.p-top_new-and-rank_new_top_archive--latest');
  const tab_all = document.querySelector('.p-top_new-and-rank_new_top_archive--all');


  tab_latest_btn.addEventListener('click', ()=>{
    if(tab_latest.classList.contains('hidden')){
      tab_latest.classList.remove('hidden');
      tab_all.classList.add('hidden');
    }
  });

  tab_all_btn.addEventListener('click', ()=>{
    if(tab_all.classList.contains('hidden')){
      tab_all.classList.remove('hidden');
      tab_latest.classList.add('hidden');
    }
  });
