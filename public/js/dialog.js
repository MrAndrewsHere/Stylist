(function () {
  var modalAuth = document.querySelector(".modal-auth");
  var modalRegistration = document.querySelector(".modal-registration");
  var btnAuth = document.querySelectorAll(".btn--auth");
  var btnRegistration = document.querySelectorAll(".btn--registration");
  var closeAuth = document.querySelector(".btn--close-auth");
  var closeRegistration = document.querySelector(".btn--close-registration");
  var email = document.querySelector(".input-email");
  var login = document.querySelector(".input-login");
  var ESC_CODE = 27;

  var profileMenu = document.querySelector(".nav-profile");
  var profileMenuBlock = document.querySelector(".nav-profile__menu");

  var formAuth = document.querySelector(".form-auth");
  var password = document.querySelector(".input-password");
  var storage = localStorage.getItem("email");

  // открытие модального окна
  var openDialog = function (btn, modalWindow, inputFocus, inputFocusTwo) {
    for (var i = 0; i < btn.length; i++) {
      btn[i].addEventListener("click", function (event) {
        event.preventDefault();
        modalWindow.classList.add("modal-auth-show");

        if (storage && modalAuth.classList.contains("modal-auth-show")) {
          inputFocus.value = storage;
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
  var closeDialog = function (closeModal, modalWindow) {
    closeModal.addEventListener("click", function (event) {
      event.preventDefault();
      modalWindow.classList.remove("modal-auth-show");
    });
  };
  closeDialog(closeAuth, modalAuth);
  closeDialog(closeRegistration, modalRegistration);

  // закрытие модальных окон на ESC
  window.addEventListener("keydown", function (event) {
    if (event.keyCode === ESC_CODE) {
      if (modalAuth.classList.contains("modal-auth-show")) {
        modalAuth.classList.remove("modal-auth-show");
      } else if (modalRegistration.classList.contains("modal-auth-show")) {
        modalRegistration.classList.remove("modal-auth-show");
      }
    }
  });

  // меню пользователя при клике на аватарке
  profileMenu.addEventListener("click", function () {
    profileMenuBlock.classList.toggle("nav-profile__visible");
  });

  // добавление данных в localStorage
  formAuth.addEventListener("submit", function (event) {
    if (!email.value || !password.value) {
      event.preventDefault();
    } else {
      localStorage.setItem("email", email.value);
    }
  });

  var formSettings = document.querySelector(".form-settings");

  // formSettings.addEventListener("submit", function () {
  //   event.preventDefault();
  //   var node = document.createElement("div");
  //   node.classList.add("success");
  //
  //   node.textContent = "Изменения успешно сохранены";
  //   formSettings.appendChild(node);
  //
  //   setTimeout(function () {
  //     $(node).fadeOut("fast");
  //   }, 2000);
  // });

})();
