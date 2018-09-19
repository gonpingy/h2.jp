

//　不要かも。検証したのちけす
$(function() {
  var headerHeight = 100; //ヘッダの高さ
  $('a[href^=#]').click(function() {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - headerHeight; //ヘッダの高さ分位置をずらす
    $("html, body").animate({
      scrollTop: position
    }, 550, "swing");
    return false;
  });
});



//集合写真をランダムに表示
$(function() {
    var images = [
      '../../wp-content/themes/handihouse/2018/img/top_img02_1.jpg',
      '../../wp-content/themes/handihouse/2018/img/top_img02_2.jpg'
    ];
    var randImg = images[Math.floor(Math.random() * images.length)];
    $('.rimg').attr('src', randImg);
});

//メニューとトップへ戻るボタン、動画の出現
$(window).scroll(
  function() {
    //ウィンドウサイズの取得
    var wheight = window.innerHeight;

    var now = $(window).scrollTop(); //現在位置の取得
    if (now > wheight - 140) {
      $('#header_top').fadeIn('slow');
      $('#page-top').fadeIn('slow');
      $('#firstview').hide();
      $('#secondview').fadeOut();
    } else {
      $('#header_top').fadeOut('slow');
      $('#page-top').fadeOut('slow');
      $('#secondview').css({
        'opacity': '1',
        'animation': 'none'
      });
      $('#secondview').show();
    }
  }
);
$('#move-page-top').click(
  function() {
    $('html,body').animate({
      scrollTop: 0
    }, 'slow');
  }
);

//TOP PAGE ONLY cookieで同じ日はスプラッシュを表示しないようにする
//videoの出現タイミングも調整
$(function() {
  var player = $('#varea').get(0); //videoタグの要素を取得

  if ($.cookie("access")) {

    player.pause(); //一旦停止

    $('.topcover').css({
      display: 'none'
    });
    $('#firstview').css({
      display: 'none'
    });
    $('#secondview').css({
      'opacity': '1',
      'animation': 'none'
    });
    player.play();
    //$.removeCookie("access");
  } else {

    player.pause(); //一旦停止

    $.cookie("access", "hh", {
      expires: 1
    }); //, path:'/', domain:'handihouse.jp'});
    setTimeout(function() {
      player.play(); //動画の再生
    }, 3800);
  }
});


//動画再生の制御
$("#sound_button").click(function() {

  //最初に音が流れる場合。　ソースのボタン,クラスは　OFFになるよう書くこと
  /*      if ($(this).hasClass("sound_off")) {
          $(this).removeClass("sound_off");
          $(this).addClass("sound_on");
          $(this).text("OFF");
          $("video").prop('muted', false);
        } else {
          $(this).removeClass("sound_on");
          $(this).addClass("sound_off");
          $(this).text("ON");
          $("video").prop('muted', true);
        }
  */
  if ($(this).hasClass("sound_off")) {
    $(this).removeClass("sound_off");
    $(this).addClass("sound_on");
    $(this).html("<i class='fas fa-volume-up'></i>");
    $("video").prop('muted', false);
  } else {
    $(this).removeClass("sound_on");
    $(this).addClass("sound_off");
    $(this).html("<i class='fas fa-volume-off'></i><i class='fas fa-times'></i>");
    $("video").prop('muted', true);
  }
});

//VISION テキストの出現
$(function() {
  $('.acover').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
    if (isInView) {
      $(this).stop().addClass('slide-right');
    } else {
      //  $(this).stop().removeClass('cshow');
    }
  });
});
$(function() {
  $('.acover2').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
    if (isInView) {
      $(this).stop().addClass('fade_out');
    } else {
      //  $(this).stop().removeClass('cshow');
    }
  });
});
