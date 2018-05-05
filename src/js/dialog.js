(function () {
  const modalAuth = document.querySelector('.modal-auth');
  const modalRegistration = document.querySelector('.modal-registration');
  const btnAuth = document.querySelectorAll('.btn--auth');
  const btnRegistration = document.querySelectorAll('.btn--registration');
  const closeAuth = document.querySelector('.btn--close-auth');
  const closeRegistration = document.querySelector('.btn--close-registration');
  const email = document.querySelector('.input-email');
  const login = document.querySelector('.input-login');
  const ESC_CODE = 27;

  const profileMenu = document.querySelector('.nav-profile');
  const profileMenuBlock = document.querySelector('.nav-profile__menu');

  const formAuth = document.querySelector('.form-auth');
  const password = document.querySelector('.input-password');
  const storage = localStorage.getItem('email');

  // открытие модального окна
  const openDialog = function (btn, modalWindow, inputFocus, inputFocusTwo) {
    for (let i = 0; i < btn.length; i += 1) {
      btn[i].addEventListener('click', (event) => {
        event.preventDefault();
        modalWindow.classList.add('modal-auth-show');

        if (storage && modalAuth.classList.contains('modal-auth-show')) {
          const inputFocusValue = inputFocus;
          inputFocusValue.value = storage;
          inputFocusTwo.focus();
        } else {
          inputFocus.focus();
        }
      });
    }
  };
  openDialog(btnAuth, modalAuth, email, password);
  openDialog(btnRegistration, modalRegistration, login);

  // закрытие модального окна
  const closeDialog = function (closeModal, modalWindow) {
    closeModal.addEventListener('click', (event) => {
      event.preventDefault();
      modalWindow.classList.remove('modal-auth-show');
    });
  };
  closeDialog(closeAuth, modalAuth);
  closeDialog(closeRegistration, modalRegistration);

  // закрытие модальных окон на ESC
  window.addEventListener('keydown', (event) => {
    if (event.keyCode === ESC_CODE) {
      if (modalAuth.classList.contains('modal-auth-show')) {
        modalAuth.classList.remove('modal-auth-show');
      } else if (modalRegistration.classList.contains('modal-auth-show')) {
        modalRegistration.classList.remove('modal-auth-show');
      }
    }
  });

  // меню пользователя при клике на аватарке
  if (profileMenu) {
    profileMenu.addEventListener('click', () => {
      profileMenuBlock.classList.toggle('nav-profile__visible');
    });
  }

  // добавление данных в localStorage
  formAuth.addEventListener('submit', (event) => {
    if (!email.value || !password.value) {
      event.preventDefault();
    } else {
      localStorage.setItem('email', email.value);
    }
  });
}());
