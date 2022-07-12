$(function () {
  // menu
  $('#headerMenu').on('click', function () {
    $('.headerNav').toggleClass('navActive')
    $('.menuTop').toggleClass('menuTopActive')
    $('.menuCenter').toggleClass('menuCenterActive')
    $('.menuBottom').toggleClass('menuBottomActive')
  });
  // click close
  if (window.matchMedia('(max-width: 960px)').matches) {
    $('#headerNav a[href]').on('click', function (event) {
      $('#headerMenu').trigger('click');
    });
  }
});


//固定ヘッダーの指定
var headerHeight = $('#header').outerHeight();

// ページ外アンカーのページ付きリンクへのスムーススクロール
var urlHash = location.hash;
if (urlHash) {
  $('body,html').stop().scrollTop(0);
  setTimeout(function () {
    var target = $(urlHash);
    var position = target.offset().top - headerHeight;
    $('body,html').stop().animate({
      scrollTop: position
    }, 500);
  }, 100);
}
// ページ内アンカーのページ付きリンクへのスムーススクロール
$(function () {
  $('a[href*="#"], area[href*="#"]').not(".noScroll").click(function () {

    var speed = 400,
      href = $(this).prop("href"),
      hrefPageUrl = href.split("#")[0],
      currentUrl = location.href,
      currentUrl = currentUrl.split("#")[0];
    if (hrefPageUrl == currentUrl) {
      href = href.split("#");
      href = href.pop();
      href = "#" + href;
      var target = $(href == "#" || href == "" ? 'html' : href),
        position = target.offset().top - headerHeight;
      $('body,html').stop().animate({
        scrollTop: position
      }, 500);

      return false;
    }

  });
});



jQuery('#your-zip').keyup(function () {
  AjaxZip3.zip2addr(this, '', 'your-address', 'your-address');
});