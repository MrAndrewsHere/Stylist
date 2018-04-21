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

    $(".btn--filter").click(function (e) {

        e.preventDefault();
        $(this).toggleClass("btn--filter-non-active");
        alert('hello');
        // var category = $(this).className;
        // category = encodeURIComponent(category);
        // var xhr = new XMLHttpRequest();
        // xhr.open('GET','/take'+'category='+category,true);
        // // xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        // xhr.send();

    });

});