$(document).ready(() => {
  $('.slider').slick({
    dots: false,
    arrows: true,
  });

  $('.slider-my-style').slick({
    dots: false,
    arrows: true,
  });

  $('.slider-tips').slick({
    autoplay: false,
    dots: false,
  });

  $('.link-tab').click(function () {
    $('.link-tab').removeClass('link-active').eq($(this).index()).addClass('link-active');
    $('.my-orders__item').hide().eq($(this).index()).show();
  }).eq(0).addClass('.my-orders__item--active');

  $('.link-change-content').click(function (e) {
    e.preventDefault();
    $('.link-change-content').removeClass('link-change-content--active').eq($(this).index()).addClass('link-change-content--active');
    $('.lk-client__style-seasons-description').hide().eq($(this).index()).css('display', 'flex');
  }).eq(0).addClass('.lk-client__style-seasons-description--active');

  $('#contactform').on('submit', (e) => {
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: '/sendmail',
      data: $('#contactform').serialize(),
      success() {
        $('.message-success').css('display', 'block');
        $('#contactform').trigger('reset');
      },
      error() {
        $('.message-error').css('display', 'block');
      },
    });
  });


  $('.delete_order').on('submit', function (e) {
    e.preventDefault();

    const a = this.closest('ul');
    a.parentElement.removeChild(a);

    $.ajax({
      type: 'POST',
      url: '/delete_order',
      data: $(this).serialize(),
      success() {
        $('.message-success').css('display', 'block');
      },
      error() {
        $('.message-error').css('display', 'block');
      },
    });
  });
});
