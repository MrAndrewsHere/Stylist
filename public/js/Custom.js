$(document).ready(() => {
  // заказ услуг
  $('.ordered').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '/ordered',
      data: $(this).serialize(),
      success(result) {
        $('.message-success').text(result);
        $('.message-success').css('display', 'block');
        setTimeout(() => {
          $('.message-success').css('display', 'none');
          $('.message-success').text('');
        }, 3000);
      },
      error(result) {
        $('.message-error').text(result);
        $('.message-error').css('display', 'block');
      },
    });
  });

  // удаление услуги в моих заказах
  $('.delete_order').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '/delete_order',
      data: $(this).serialize(),
      success(result) {
        $('.message-success').text(result);
        $('.message-success').css('display', 'block');
        setTimeout(() => {
          $('.message-success').css('display', 'none');
        }, 3000);
      },
      error() {},
    });
  });

  // что тут
  $('.add_service_to_client').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '/add_service_to_client',
      data: $(this).serialize(),
      success(result) {
        $('.message-success').text(result);
        $('.message-success').css('display', 'block');
        setTimeout(() => {
          $('.message-success').css('display', 'none');
        }, 3000);
      },
      error() {
        $('.message-error').css('display', 'block');
      },
    });
  });

  // удаление дипломов из настроек стилиста
  $('.diplom_delete').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '/diplom_delete',
      data: $(this).serialize(),
      success(result) {
        $('.message-success').text(result);
        $('.message-success').css('display', 'block');
      },
      error() {
        $('.message-error').css('display', 'block');
      },
    });
    e.target.parentNode.style.display = 'none';
  });

  // просмотр профиля стилиста
  $('.show_stylist_profile').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '/show_stylist_profile',
      data: $(this).serialize(),
      success(result) {
        $('.admin-request__about').html(result);
      },
      error() {
        $('.message-error').css('display', 'block');
      },
    });
  });

  // удаление элемента фортфолио стилистом
  $('.delete_portfolio').on('submit', function (e) {
    e.preventDefault();
    e.target.parentNode.parentNode.parentNode.style.display = 'none';
    $.ajax({
      type: 'POST',
      url: '/delete_portfolio',
      data: $(this).serialize(),
      success() {
        $('.message-success').css('display', 'block');
      },
      error() {
        $('.message-error').css('display', 'block');
      },
    });
  });

  // форма обратной связи
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

  // удаление заказа
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

  // принятие заказа
  $('.accept_order').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '/Accept_Order',
      data: $(this).serialize(),
      success() {
        e.target.parentNode.parentNode.style.display = 'none';
      },
      error() {},
    });
  });

  // отмена заказа
  $('.cancel_order').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '/Cancel_Order',
      data: $(this).serialize(),
      success() {
        e.target.parentNode.parentNode.style.display = 'none';
      },
      error() {},
    });
  });

  // перемещение по разным заказам
  $('.link-order').click(function () {
    $('.link-order')
      .removeClass('link-order--active')
      .eq($(this).index())
      .addClass('link-order--active');
    $('.orders')
      .removeClass('orders--active')
      .eq($(this).index())
      .addClass('orders--active');

    $.ajax({
      type: 'GET',
      url: `/
        $(this)
          .attr('id')
          .toString()`,
      data: '',
      success(result) {
        const div = $('.my_orders');
        div.empty();
        div.html(result);
      },
      error() {},
    });
  });
});
