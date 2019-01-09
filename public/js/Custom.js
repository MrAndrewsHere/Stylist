$(document).ready(() => {
  var $val = "g";
    $('.sc-message-list').scrollTop(1000000);
    $('.sc-message-list').bind("DOMSubtreeModified",function(){

        $('.sc-message-list').scrollTop(1000000);
    });

    $('.send_new_message').on('submit', function (e) {


    });
    $('.AddService_To_Stylist').on('submit', function (e) {
        e.preventDefault();



        $.ajax({
            type: 'POST',
            url: '/AddService_To_Stylist',
            data: $(this).serialize(),
            success() {

            },
            error() {

            },
        });

        if ($(this).hasClass('red'))
        {

            $(this).children('.btn--action-small').css('background-color','darkred');
            $(this).children('.btn--action-small').text('Удалить');
            $(this).removeClass('red');
        }
        else
        {
            $(this).children('.btn--action-small').css('background-color','#0e7e77');
            $(this).children('.btn--action-small').text('Добавить');
            $(this).addClass('red');
        }
    });


  // заказ услуг
  $('.accept_by_client').on('submit', function (e) {
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
      const a = this.closest('ul');
      a.parentElement.removeChild(a);
        $.ajax({
            type: 'POST',
            url: '/delete_order',
            data: $(this).serialize(),
            success(result) {
                e.target.parentNode.parentNode.style.display = 'none';
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
    e.target.parentNode.style.display = 'none';
  });


    $('.show_new_profile').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/show_new_profile',
            data: $(this).serialize(),
            success(result) {
                $('.admin-request__about').html(result);
            },
            error() {
                $('.message-error').css('display', 'block');
            },
        });

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
      $.ajax({
          type: 'POST',
          url: '/admin_stylist_services',
          data: $(this).serialize(),
          success(result) {
              $('.ask-question__quests').html(result);
              // $('.orders-list-links').after(result);
          },
          error() {
              $('.message-error').css('display', 'block');
          },
      });

      $.ajax({
          type: 'POST',
          url: '/admin_orders',
          data: $(this).serialize(),
          success(result) {
              $('.clear_after').html(result);
              // $('.orders-list-links').after(result);
          },
          error() {
              $('.message-error').css('display', 'block');
          },
      });
  });
    $('#send_confirm_btn').on('click', function (e) {
        e.preventDefault();

        $.ajax({
            type: 'GET',
            url: '/Send_Confirm',
            data: "",
            success(result) {
                $('.message-success').text(result);
                $('.message-success').css('display', 'block');
                setTimeout(function () {
                    $('.message-success').css('display', 'none');
                }, 3000);

            },
            error(result) {
                $('.message-error').text(result);
                $('.message-error').css('display', 'block');
            },
        });
    });
  // удаление элемента фортфолио стилистом
  $('.delete_portfolio').on('submit', function (e) {
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: '/delete_portfolio',
      data: $(this).serialize(),
        success(result) {
            e.target.parentNode.parentNode.parentNode.style.display = 'none';
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
        success(result) {
            e.target.parentNode.parentNode.style.display = 'none';
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

  // принятие заказа
  $('.accept_order').on('submit', function (e) {
    e.preventDefault();
      const a = this.closest('ul');
    $.ajax({
      type: 'POST',
      url: '/Accept_Order',
      data: $(this).serialize(),
        success(result) {
            e.target.parentNode.parentNode.style.display = 'none';
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

  // отмена заказа
  $('.cancel_order').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '/Cancel_Order',
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
   if ($(this).attr('value').toString() != 'none')
   { $.ajax({
      type: 'GET',
      url: '/'+ $(this).attr('id').toString(),
      data: '',
      success(result) {
        const div = $('.my_orders');
        div.empty();
        div.html(result);
      },
      error() {},
    });}
  });
});
