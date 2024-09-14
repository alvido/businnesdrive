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
  if (document.querySelector("#consistSwiper")) {
    new Swiper("#consistSwiper", {
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
        560: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
      },
    });
  }

  let swiperInstance;

  function initSwiper() {
    if (window.innerWidth < 768) {
      if (!swiperInstance) {
        swiperInstance = new Swiper("#teamSwiper", {
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
          slidesPerView: 1,
          spaceBetween: 10,
        });
      }
    } else {
      if (swiperInstance) {
        swiperInstance.destroy(true, true); // Отключить Swiper
        swiperInstance = null;
      }
    }
  }

  // Инициализация при загрузке
  initSwiper();

  // Перепроверка при изменении размеров окна
  window.addEventListener("resize", function () {
    initSwiper();
  });

});
// swiper


// textarea show //
document.addEventListener("DOMContentLoaded", function () {
  let openTextArea = document.getElementById("openTextArea");
  let hiddenArea = document.getElementById("hiddenArea");

  if (openTextArea) {
    openTextArea.addEventListener("click", function (e) {
      e.stopPropagation(); // Остановка всплытия события
      hiddenArea.classList.toggle("show");
    });
  }
});
//

//active team item 
document.addEventListener("DOMContentLoaded", function () {
  let teamItem = document.querySelectorAll(".team__list li");
  if (teamItem) {
    teamItem.forEach((item) => {
      item.addEventListener("click", function (e) {
        e.stopPropagation(); // Остановка всплытия события
        this.classList.toggle("active");
      });
    });
  }
});
//

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


document.addEventListener("DOMContentLoaded", function () {
  const steps = document.querySelectorAll(".step");
  let currentStep = 0;

  function showStep(stepIndex) {
    steps.forEach((step, index) => {
      step.style.display = index === stepIndex ? "block" : "none";
    });
  }

  function nextStep() {
    if (currentStep < steps.length - 1) {
      currentStep++;
      showStep(currentStep);
    }
  }

  function prevStep() {
    if (currentStep > 0) {
      currentStep--;
      showStep(currentStep);
    }
  }

  document.querySelectorAll(".nextBtn").forEach(button => {
    button.addEventListener("click", nextStep);
  });

  document.querySelectorAll(".prevBtn").forEach(button => {
    button.addEventListener("click", prevStep);
  });

  showStep(currentStep);

  // Отправка формы
  document.getElementById("multiStepForm").addEventListener("submit", function (e) {
    e.preventDefault();
    // Логика отправки данных на сервер
    alert("Форма отправлена!");
  });
});
