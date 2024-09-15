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

//
document.addEventListener("DOMContentLoaded", function () {
  const openQuiz = document.getElementById("openQuiz");

  openQuiz.addEventListener("click", startQuiz);

  function startQuiz() {
    const quiz = document.querySelector(".quiz");
    let body = document.querySelector("body");

    if (quiz) {
      quiz.classList.add("show");

      if (body) {
        console.log("Body найден:", body);
        body.classList.add("lock");
        console.log("Класс 'lock' добавлен. Текущий класс body:", body.className);
      } else {
        console.error("Body не найден.");
      }
    }
  }
});

//

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
  let openTextArea = document.querySelectorAll(".open-textarea");

  if (openTextArea) {
    openTextArea.forEach((open) => {
      open.addEventListener("click", function (e) {
        e.stopPropagation(); // Stop event bubbling
        let nextHiddenArea = this.nextElementSibling; // Get the next sibling element
        if (nextHiddenArea && nextHiddenArea.classList.contains("hidden-area")) {
          nextHiddenArea.classList.toggle("show"); // Toggle 'show' class
        }
      });
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

// select2
// In your Javascript (external .js resource or <script> tag)
$(document).ready(function () {
  if (typeof $.fn.select2 !== "undefined") {
    $(".select__input").select2({
      minimumResultsForSearch: Infinity,
    });
    console.log("Select2 подключен и работает.");
  } else {
    console.error("Select2 не подключен.");
  }
});

//

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


// quiz logic
document.addEventListener("DOMContentLoaded", function () {
  const steps = document.querySelectorAll(".step");
  const totalSteps = steps.length; // Общее количество шагов
  let currentStep = 0;

  const quiz = document.querySelector(".quiz");
  const stepNumberEl = document.getElementById("stepNumber");
  const stepTitleEl = document.getElementById("stepTitle");
  const currentStepEl = document.getElementById("currentStep");
  const totalStepsEl = document.getElementById("totalSteps");
  const progressBar = document.getElementById("progressBar");

  const closeBtn = document.querySelector(".quiz .close");
  const nextBtn = document.querySelector(".nextBtn");
  const prevBtn = document.querySelector(".prevBtn");
  const submitBtn = document.querySelector(".submitBtn");

  // Установить общее количество шагов
  totalStepsEl.textContent = totalSteps;

  function showStep(stepIndex) {
    steps.forEach((step, index) => {
      step.style.display = index === stepIndex ? "flex" : "none";
    });

    // Обновляем номер шага и заголовок
    stepNumberEl.textContent = stepIndex + 1;
    currentStepEl.textContent = stepIndex + 1;
    stepTitleEl.textContent = steps[stepIndex].getAttribute("data-step-title");

    // Обновляем прогресс-бар
    const progressPercent = ((stepIndex + 1) / totalSteps) * 100;
    progressBar.style.setProperty('--progress-width', progressPercent + '%');

    // Управляем видимостью кнопок
    if (stepIndex === totalSteps - 1) {
      // Если последний шаг
      nextBtn.style.display = "none";
      submitBtn.style.display = "flex";
    } else {
      nextBtn.style.display = "flex";
      submitBtn.style.display = "none";
    }

    // Управляем видимостью кнопки "Назад"
    prevBtn.style.display = stepIndex > 0 ? "flex" : "none";
  }

  function closeQuiz() {
    if (closeBtn) {
      quiz.classList.remove("show");
    }
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

  closeBtn.addEventListener("click", closeQuiz);
  nextBtn.addEventListener("click", nextStep);
  prevBtn.addEventListener("click", prevStep);

  // Изначально показываем первый шаг
  showStep(currentStep);
});

// quiz logic