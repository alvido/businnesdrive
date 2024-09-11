// Burger Menu Open //
// Burger Menu Open //
document.addEventListener("DOMContentLoaded", function () {
  // Выбираем бургер-кнопку и навигацию
  let burgerButton = document.getElementById("burgerButton");
  let navigation = document.querySelector(".navigation");
  let body = document.querySelector("body");
  // let links = document.querySelectorAll(".navigation__link");

  // Если бургер-кнопка существует, добавляем обработчик события
  if (burgerButton) {
    burgerButton.addEventListener("click", function (e) {
      e.stopPropagation(); // Остановка всплытия события
      burgerButton.classList.toggle("burger--active"); // Переключаем класс активности бургер-кнопки
      // navigation.classList.toggle("navigation--active"); // Переключаем класс активности навигации
      body.classList.toggle("lock"); // Переключаем класс активности навигации
    });
  }

  // links.forEach((link) => {
  //   link.addEventListener("click", function (e) {
  //     burgerButton.classList.remove("burger--active");
  //     navigation.classList.remove("navigation--active");
  //     console.log("link", link);
  //   });
  // });
});
//

// Fixed header
document.addEventListener("DOMContentLoaded", function () {
  var header = document.querySelector(".header"),
    main = document.querySelector(".main"),
    headerH = header.offsetHeight,
    scrollOffset = window.pageYOffset;

  checkScroll(scrollOffset);

  window.addEventListener("scroll", function () {
    scrollOffset = window.pageYOffset;
    checkScroll(scrollOffset);
  });

  function checkScroll(scrollOffset) {
    if (scrollOffset >= headerH) {
      header.classList.add("fixed");
      main.style.paddingTop = headerH + "px"; // Добавляем верхний отступ
    } else {
      header.classList.remove("fixed");
      main.style.paddingTop = 0; // Убираем верхний отступ
    }
  }
});

// Fixed header end

// // select2
// // In your Javascript (external .js resource or <script> tag)
// $(document).ready(function () {
//   $("#womanInsurance, #womanStatus, #manStatus, #manInsurance").select2({
//     minimumResultsForSearch: Infinity,
//   });
// });
// //

// //faq collapse
// $(document).ready(function () {
//   $(".faq__item").on("click", function () {
//     faqCollapse($(this));
//   });
// });

// function faqCollapse($element) {
//   $element.toggleClass("active");
//   // Находим родителя и добавляем ему класс
// }
// //faq collapse

//swiper
// const progressRows = document.querySelectorAll(".hero__swiper-progress");
// let swiper;

// swiper = new Swiper(".swiper", {
//   observer: true,
//   observeParents: true,
//   // loop: true,
//   autoplay: {
//     delay: 5000,
//     disableOnInteraction: false,
//   },
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },
//   // Настройки для различных размеров экранов
//   breakpoints: {
//     // Когда ширина экрана >= 320px
//     320: {
//       slidesPerView: 1,
//       spaceBetween: 10,
//     },
//     // Когда ширина экрана >= 480px
//     768: {
//       slidesPerView: 2,
//       spaceBetween: 20,
//     },
//     // Когда ширина экрана >= 640px
//     1024: {
//       slidesPerView: 3,
//       spaceBetween: 40,
//     },
//   },
// });
// swiper

// //порядковый номер
// // Получаем все элементы с классом form__step
// const steps = document.querySelectorAll(".form__step");

// // Проходимся по каждому элементу и добавляем порядковый номер перед заголовком <h3>
// steps.forEach((step, index) => {
//   // Создаем новый элемент span
//   const stepNumber = document.createElement("span");
//   // Задаем текст содержимого как порядковый номер
//   stepNumber.textContent = `${index + 1}. `;
//   // Вставляем span перед элементом <h3>
//   step.querySelector("h3").insertAdjacentElement("afterbegin", stepNumber);
// });
// //
