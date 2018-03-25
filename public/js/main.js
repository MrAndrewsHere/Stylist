$(document).ready(function () {

  $(".slider").slick({
    dots: false,
    arrows: true
  });

  $(".slider-tips").slick({
    dots: false,
    arrows: true
  });

  $(".link-tab").click(function () {
    $(".link-tab").removeClass("link-active").eq($(this).index()).addClass("link-active");
    $(".my-orders__item").hide().eq($(this).index()).show();
  }).eq(0).addClass(".my-orders__item--active");

  $(".link-change-content").click(function () {
    $(".link-change-content").removeClass("link-change-content--active").eq($(this).index()).addClass("link-change-content--active");
    $(".lk-client__style-seasons-description").hide().eq($(this).index()).show();
  }).eq(0).addClass(".lk-client__style-seasons-description--active");

  $(".minus").click(function () {
    var $input = $(this).parent().find("input");
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
  });

  $(".plus").click(function () {
    var $input = $(this).parent().find("input");
    var count = parseInt($input.val()) + 1;
    count = count > 4 ? 4 : count;
    $input.val(count);
    $input.change();
    return false;
  });
});