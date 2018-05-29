$(document).ready(function () {
  $('.ordered').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '/ordered',
      data: $(this).serialize(),
      success: function () {
        $('.message-success').css('display', 'block');
      },
      error: function () {
        $('.message-error').css('display', 'block');
      }
    });
  });
});

$('.add_service_to_client').on('submit', function (e) {
  e.preventDefault();
  $.ajax({
    type: 'POST',
    url: '/add_service_to_client',
    data: $(this).serialize(),
    success: function () {
      $('.message-success').css('display', 'block');
    },
    error: function () {
      $('.message-error').css('display', 'block');
    }
  });
});

$('.diplom_delete').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: '/diplom_delete',
        data: $(this).serialize(),
        success: function () {
            $('.message-success').css('display', 'block');
        },
        error: function () {
            $('.message-error').css('display', 'block');
        }
    });

    e.target.parentNode.style.display = 'none';
});

$('.show_stylist_profile').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: '/show_stylist_profile',
        data: $(this).serialize(),
        success: function (result) {
            $('.admin-request__about').html(result);
        },
        error: function () {
            $('.message-error').css('display', 'block');
        }
    });
});


$('.delete_portfolio').on('submit', function (e) {
    e.preventDefault();

    e.target.parentNode.parentNode.parentNode.style.display = 'none';
    $.ajax({
        type: 'POST',
        url: '/delete_portfolio',
        data: $(this).serialize(),
        success: function () {
            $('.message-success').css('display', 'block');
        },
        error: function () {
            $('.message-error').css('display', 'block');
        }
    });
});

$('.btn--filter').click(function () {
  // e.preventDefault();
  // $(this).toggleClass("btn--filter-non-active");
});