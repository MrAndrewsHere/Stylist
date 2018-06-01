$(document).ready(() => {

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
        }, 3000);
      },
      error(result) {
        $('.message-error').text(result);
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
});
