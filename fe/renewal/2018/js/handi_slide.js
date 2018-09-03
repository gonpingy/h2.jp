//クリックでスライド表示
$(function() {

  //PC,SP切り替え
  var ua = navigator.userAgent;
  if (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {
        var headerHeight = 50; //ヘッダから距離を取りたい高さ
  } else {
        var headerHeight = 125;
  }

  $('a[href^="#"]').click(function() {
    var speed = 1000;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - headerHeight;
    $("html, body").animate({
      scrollTop: position
    }, speed, "swing");
    return false;
  });
});
