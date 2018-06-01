$(document).ready(() => {
  // выезжающее меню
  $('.btn--sidebar-open').click(() => {
    $('.sidebar').animate({
      left: '0px',
    }, 200);
  });

  $('.btn--sidebar-cancel').click(() => {
    $('.sidebar').animate({
      left: '-242px',
    }, 200);
  });


  $('.slider-portfolio').slick({
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


  // табы заказов
  $('.link-order').click(function () {
    $('.link-order').removeClass('link-order--active').eq($(this).index()).addClass('link-order--active');
    $('.orders').removeClass('orders--active').eq($(this).index()).addClass('orders--active');
  });


  // табы цветотипов
  $('.lk__item-color-type').click(function () {
    $('.lk__item-color-type').removeClass('lk__item-color-type--active').eq($(this).index()).addClass('lk__item-color-type--active');
    $('.lk__style-color-type').removeClass('lk__style-color-type--active').eq($(this).index()).addClass('lk__style-color-type--active');
  });


  // кнопка удаления портфолио
  // const portfolioBlock = document.querySelector('.portfolio');

  // if (portfolioBlock) {
  //   portfolioBlock.addEventListener('click', (e) => {
  //     if (!e.target.classList.contains('btn--delete-portfolio')) return;
  //     e.target.parentNode.parentNode.parentNode.style.display = 'none';
  //   });
  // }

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

        document.querySelector('.form__output').innerHTML = '';
        document.querySelector('.form__output').insertBefore(span, null);
      };
    }(f));

    reader.readAsDataURL(f);
  }

  function handleFileSelectSingleTwo(evt) {
    const file = evt.target.files;
    const f = file[0];
    const reader = new FileReader();

    reader.onload = (function (theFile) {
      return function (e) {
        const span = document.createElement('span');
        span.innerHTML = ['<img class="form__output-avatar" src="', e.target.result,
          '" title="', escape(theFile.name), '"/>'].join('');

        document.querySelector('.form__output-two').innerHTML = '';
        document.querySelector('.form__output-two').insertBefore(span, null);
      };
    }(f));

    reader.readAsDataURL(f);
  }

  const avatar = document.getElementById('avatar');
  if (avatar) {
    avatar.addEventListener('change', handleFileSelectSingle, false);
  }

  const photoBefore = document.getElementById('photo-before');
  if (photoBefore) {
    photoBefore.addEventListener('change', handleFileSelectSingle, false);
  }

  const photoAfter = document.getElementById('photo-after');
  if (photoAfter) {
    photoAfter.addEventListener('change', handleFileSelectSingleTwo, false);
  }


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

  const diploms = document.getElementById('diploms');
  if (diploms) {
    diploms.addEventListener('change', handleFileSelectMulti, false);
  }
});
