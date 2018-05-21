$(document).ready(() => {
  $('.slider').slick({
    dots: false,
    arrows: true,
  });

  $('.slider-my-style').slick({
    dots: false,
    arrows: true,
  });


  // слайдер на странице «мой стиль»

  $('.slider-tips').on('init', (event, slick) => {
    const num = slick.slideCount;
    const currNum = slick.currentSlide + 1;

    $('.slider-tips__numbers-current').text(`${currNum}`);
    $('.slider-tips__numbers-all').text(`${num}`);
  });

  $('.slider-tips').slick({
    autoplay: false,
    dots: false,
  });

  $('.slider-tips').on('afterChange', (event, slick, currentSlide) => {
    $('.slider-tips__numbers-current').text(`${currentSlide + 1}`);
  });

  // конец слайдера на странице «мой стиль»


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

  if (educationBlock) {
    educationBlock.addEventListener('click', (e) => {
      if (!e.target.classList.contains('btn--diplom-delete')) return;
      e.target.parentNode.style.display = 'none';
    });
  }

  if (editDiploms) {
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
  }


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

  // добавление превью загружаемого изображения
  function handleFileSelectSingle(evt) {
    const file = evt.target.files;

    const f = file[0];

    const reader = new FileReader();

    reader.onload = (function (theFile) {
      return function (e) {
        const span = document.createElement('span');
        span.innerHTML = ['<img class="form__output-avatar" src="', e.target.result,
          '" title="', escape(theFile.name), '"/>'].join('');
        document.getElementById('form__output-avatar').innerHTML = '';
        document.getElementById('form__output-avatar').insertBefore(span, null);
      };
    }(f));

    reader.readAsDataURL(f);
  }
  document.getElementById('avatar').addEventListener('change', handleFileSelectSingle, false);

  // добавление превью загружаемых дипломов
  function handleFileSelectMulti(evt) {
    const files = evt.target.files;

    document.getElementById('form__output-diploms').innerHTML = '';

    for (let i = 0, f; f = files[i]; i += 1) {
      const reader = new FileReader();

      reader.onload = (function (theFile) {
        return function (e) {
          const span = document.createElement('span');
          span.innerHTML = ['<img class="form__output-diploms" src="', e.target.result,
            '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('form__output-diploms').insertBefore(span, null);
        };
      }(f));

      reader.readAsDataURL(f);
    }
  }

  document.getElementById('diploms').addEventListener('change', handleFileSelectMulti, false);
});
