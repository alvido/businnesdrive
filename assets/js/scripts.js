// Burger Menu Open //
document.addEventListener("DOMContentLoaded", function () {
  // Выбираем бургер-кнопку и навигацию
  let burgerButton = document.getElementById("burgerButton");
  let navigation = document.getElementById("site-navigation");
  let body = document.querySelector("body");

  if (burgerButton) {
    burgerButton.addEventListener("click", function (e) {
      e.stopPropagation(); // Остановка всплытия события
      burgerButton.classList.toggle("burger--active");
      navigation.classList.toggle("navigation--active");
      body.classList.toggle("lock");
    });
  }

  // Обработчик клика по документу
  document.addEventListener("click", function (e) {
    // Проверяем, если клик произошел вне бургер-кнопки и навигации
    if (!navigation.contains(e.target) && !burgerButton.contains(e.target)) {
      // Убираем активные классы, если они были добавлены
      burgerButton.classList.remove("burger--active");
      navigation.classList.remove("navigation--active");
      body.classList.remove("lock");
    }
  });

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

//swiper
document.addEventListener("DOMContentLoaded", function () {
  // Проверяем наличие элементов Swiper на странице
  if (document.querySelector("#current")) {
    new Swiper("#current", {
      observer: true,
      observeParents: true,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
      },
    });
  }

  //   if (document.querySelector("#prior")) {
  //     new Swiper("#prior", {
  //       observer: true,
  //       observeParents: true,
  //       loop: true,
  //       autoplay: {
  //         delay: 3000,
  //         disableOnInteraction: false,
  //       },
  //       pagination: {
  //         el: ".swiper-pagination",
  //         clickable: true,
  //       },
  //       navigation: {
  //         nextEl: ".swiper-button-next",
  //         prevEl: ".swiper-button-prev",
  //       },
  //       breakpoints: {
  //         320: {
  //           slidesPerView: 1,
  //           spaceBetween: 10,
  //         },
  //         561: {
  //           slidesPerView: 2,
  //           spaceBetween: 20,
  //         },
  //         1024: {
  //           slidesPerView: 2,
  //           spaceBetween: 30,
  //         },
  //       },
  //     });
  //   }

  //   if (document.querySelector("#strategic")) {
  //     new Swiper("#strategic", {
  //       observer: true,
  //       observeParents: true,
  //       loop: true,
  //       autoplay: {
  //         delay: 3000,
  //         disableOnInteraction: false,
  //       },
  //       pagination: {
  //         el: ".swiper-pagination",
  //         clickable: true,
  //       },
  //       navigation: {
  //         nextEl: ".swiper-button-next",
  //         prevEl: ".swiper-button-prev",
  //       },
  //       breakpoints: {
  //         320: {
  //           slidesPerView: 1,
  //           spaceBetween: 10,
  //         },
  //         561: {
  //           slidesPerView: 2,
  //           spaceBetween: 20,
  //         },
  //         1024: {
  //           slidesPerView: 2,
  //           spaceBetween: 30,
  //         },
  //       },
  //     });
  //   }
});
// swiper

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
