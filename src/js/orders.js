$(document).ready(function () {
  $('.orders__item').on('click', function (evt) {
    var elem = evt.target;
    var container = evt.currentTarget;
    var input = container.querySelector('.input-count');
    var sum = container.querySelector('.input-price');
    var count = parseInt(input.getAttribute('data-count'), 10);
    var price = parseInt(input.getAttribute('data-price'), 10);

    if (elem.classList.contains('minus')) {
      count = count === 1 ? count : (count - 1);
    } else if (elem.classList.contains('plus')) {
      if (count < 10) {
        count++;
      }
    }

    input.value = count;
    sum.value = price * count;
    sum.setAttribute('data-sum', sum.value);
    input.setAttribute('data-count', count);
  });
});

