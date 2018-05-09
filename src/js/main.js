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

  /* дипломы */

  const educationBlock = document.querySelector('.lk-stylist__education--filled');
  const editDiploms = document.querySelector('.btn--edit-diploms');
  const btn = document.querySelectorAll('.btn--diplom-delete');
  let state = false;

  educationBlock.addEventListener('click', (e) => {
    if (!e.target.classList.contains('btn--diplom-delete')) return;
    e.target.parentNode.style.display = 'none';
  });

  editDiploms.addEventListener('click', () => {
    if (state === false) {
      editDiploms.textContent = 'готово';
      for (let i = 0; i < btn.length; i += 1) {
        btn[i].style.display = 'block';
      }
      state = true;
    } else {
      editDiploms.textContent = 'редактировать';
      for (let i = 0; i < btn.length; i += 1) {
        btn[i].style.display = 'none';
      }
      state = false;
    }
  });


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
