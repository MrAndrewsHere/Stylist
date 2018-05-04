// $(document).ready(() => {

//   $('.orders__item').on('click', function (evt) {
//     const elem = evt.target;
//     const container = evt.currentTarget;
//     const input = container.querySelector('.input-count');
//     const sum = container.querySelector('.input-price');
//     let count = parseInt(input.getAttribute('data-count'), 10);
//     const price = parseInt(input.getAttribute('data-price'), 10);

//     if (elem.classList.contains('minus')) {
//       count = count === 1 ? count : (count - 1);
//     } else if (elem.classList.contains('plus')) {
//       if (count < 10) {
//         count++;
//       }
//     }

//     input.value = count;
//     sum.value = price * count;
//     sum.setAttribute('data-sum', sum.value);
//     input.setAttribute('data-count', count);
//   });

// })();

