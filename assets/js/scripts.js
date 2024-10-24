// Burger Menu Open //
document.addEventListener("DOMContentLoaded", function () {
  // Выбираем бургер-кнопку и навигацию
  let burgerButton = document.getElementById("burgerButton");
  let navigation = document.getElementById("site-navigation");
  let links = document.querySelectorAll(".navigation__list a");
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

  links.forEach((link) => {
    link.addEventListener("click", function (e) {
      burgerButton.classList.remove("burger--active");
      navigation.classList.remove("navigation--active");
      body.classList.remove("lock");
    });
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

  if (openQuiz) {
    openQuiz.addEventListener("click", startQuiz);
  }

  function startQuiz() {
    const quiz = document.querySelector(".quiz");
    let body = document.querySelector("body");

    if (quiz) {
      quiz.classList.add("show");

      if (body) {
        body.classList.add("block");
      }
    }
  }
});

//

//swiper
document.addEventListener("DOMContentLoaded", function () {
  // Проверяем наличие элемента с ID "consistSwiper"
  const consistSwiperElement = document.querySelector("#consistSwiper");
  if (consistSwiperElement) {
    // Инициализация Swiper для элемента "consistSwiper"
    new Swiper(consistSwiperElement, {
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
    const swiperContainer = document.querySelector("#teamSwiper");
    if (!swiperContainer) {
      console.log("Element #teamSwiper не найден!"); // Лог в консоль для отладки
      return; // Выходим из функции, если элемент не найден
    }

    // Если ширина окна меньше 768px, инициализируем Swiper
    if (window.innerWidth < 768) {
      if (!swiperInstance) {
        swiperInstance = new Swiper(swiperContainer, {
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
      // Уничтожаем Swiper, если окно шире 768px
      if (swiperInstance) {
        swiperInstance.destroy(true, true);
        swiperInstance = null;
      }
    }
  }

  // Инициализация Swiper для #teamSwiper при загрузке страницы, если элемент существует
  const teamSwiperElement = document.querySelector("#teamSwiper");
  if (teamSwiperElement) {
    initSwiper(); // Инициализация при загрузке
    window.addEventListener("resize", function () {
      initSwiper(); // Инициализация при изменении размера окна
    });
  } else {
  }
});
// swiper

// radiomark
document.addEventListener("DOMContentLoaded", function () {
  const radioButtons = document.querySelectorAll('input[type="radio"]');
  const radiomarks = document.querySelectorAll('.radiomark');

  // Обновление состояния для всех радиокнопок
  function updateRadiomarkState() {
    // Удаляем класс active у всех radiomark
    radiomarks.forEach(mark => mark.classList.remove('active'));

    // Добавляем класс active к radiomark, соответствующему выбранной радиокнопке
    radioButtons.forEach((radio) => {
      if (radio.checked) {
        const radiomark = radio.closest('.custom-radio').querySelector('.radiomark');
        if (radiomark) {
          radiomark.classList.add('active');
        }
      }
    });
  }

  // Установка обработчиков событий change и инициализация состояния
  radioButtons.forEach((radio) => {
    radio.addEventListener('change', updateRadiomarkState);
    // Инициализация состояния при загрузке страницы
    if (radio.checked) {
      updateRadiomarkState();
    }
  });

  // Обработчик клика для radiomark
  radiomarks.forEach((mark) => {
    mark.addEventListener('click', function () {
      const radioInput = this.closest('.custom-radio').querySelector('input[type="radio"]');
      if (radioInput && !radioInput.checked) {
        radioInput.checked = true; // Устанавливаем состояние checked
        radioInput.dispatchEvent(new Event('change')); // Вызываем событие change
      }
    });
  });
});

//radiomark
//checkmark
document.addEventListener("DOMContentLoaded", function () {
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');

  // Обновление состояния checkmark
  function updateCheckmarkState() {
    checkboxes.forEach((checkbox) => {
      const checkmark = checkbox.closest('.custom-checkbox').querySelector('.checkmark');
      if (checkmark) {
        if (checkbox.checked) {
          checkmark.classList.add('active'); // Добавляем класс active если чекбокс отмечен
        } else {
          checkmark.classList.remove('active'); // Убираем класс active если чекбокс не отмечен
        }
      }
    });
  }

  // Инициализация состояния при загрузке страницы
  updateCheckmarkState();

  // Обработчик клика для checkmark
  const checkmarks = document.querySelectorAll('.checkmark');
  checkmarks.forEach((mark) => {
    mark.addEventListener('click', function () {
      const checkInput = this.closest('.custom-checkbox').querySelector('input[type="checkbox"]');
      if (checkInput) {
        // checkInput.checked = !checkInput.checked; // Переключаем состояние checked
        checkInput.dispatchEvent(new Event('change')); // Вызываем событие change для обновления состояния
      }
    });
  });

  // Обработчик события change для обновления состояния checkmark
  checkboxes.forEach((checkbox) => {
    checkbox.addEventListener('change', updateCheckmarkState);
  });
});

//checkmark


// textarea show //
document.addEventListener("DOMContentLoaded", function () {
  let openTextAreaButtons = document.querySelectorAll(".open-textarea");


  if (openTextAreaButtons) {
    openTextAreaButtons.forEach((button) => {
      button.addEventListener("click", function (e) {
        e.stopPropagation(); // Остановить всплытие события
        const nextHiddenArea = this.closest('label').nextElementSibling; // Получаем следующий элемент-сосед

        if (nextHiddenArea && nextHiddenArea.classList.contains("hidden-area")) {
          nextHiddenArea.classList.toggle("show"); // Переключаем класс 'show'
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
$(document).ready(function () {
  function initializeSelect2() {
    if (typeof $.fn.select2 !== "undefined") {
      // Проверяем, мобильное устройство или нет
      if (window.innerWidth > 768) {
        // Инициализируем Select2 только на десктопе
        $(".select__input").each(function () {
          if (!$(this).data('select2')) { // Проверяем, инициализирован ли Select2
            $(this).select2({
              minimumResultsForSearch: Infinity,
            });
          }
        });
      } else {
        // Если на мобильном устройстве, используем нативный select
        $('.select__input').each(function () {
          if ($(this).data('select2')) { // Проверяем, инициализирован ли Select2
            $(this).select2('destroy'); // Отключаем Select2 на мобильных
          }
        });
      }
    }
  }

  // Инициализируем при загрузке страницы
  initializeSelect2();

  // Инициализируем или отключаем Select2 при изменении размера окна
  $(window).on('resize', function () {
    initializeSelect2();
  });
});

//


//
document.addEventListener("DOMContentLoaded", function () {
  const forms = document.querySelectorAll("form");

  forms.forEach(function (form) {
    form.addEventListener("submit", function (event) {
      let isValid = true;
      const requiredFields = form.querySelectorAll("[required]");

      requiredFields.forEach(function (field) {
        field.classList.remove("error");

        if (!validateField(field)) {
          isValid = false;
        }
      });

      if (!isValid) {
        event.preventDefault();
      }
    });
  });

  function validateField(field) {
    let isValid = true;

    // Проверка на заполненность для текстовых, email, number, tel и textarea
    if (["text", "email", "number", "tel"].includes(field.type) || field.tagName.toLowerCase() === "textarea") {
      if (!field.value.trim()) {
        field.classList.add("error");
        isValid = false;
      }
    }

    // Проверка для select
    if (field.tagName.toLowerCase() === "select") {
      if (field.value === "") {
        field.classList.add("error");
        isValid = false;

        const select2 = field.closest('form').querySelector('.select2');
        if (select2) {
          select2.classList.add('error');
        }
      } else {
        const select2 = field.closest('form').querySelector('.select2');
        if (select2) {
          select2.classList.remove('error');
        }
      }
    }

    // Проверка для радиокнопок
    if (field.type === "radio") {
      const radios = field.closest('form').querySelectorAll(`input[name="${field.name}"]`);
      let radioChecked = Array.from(radios).some(radio => radio.checked);

      if (!radioChecked) {
        radios.forEach(function (radio) {
          radio.classList.add("error");
        });
        isValid = false;
      } else {
        radios.forEach(function (radio) {
          radio.classList.remove("error");
        });
      }
    }

    return isValid;
  }
});

//


// quiz logic
document.addEventListener("DOMContentLoaded", function () {
  const steps = document.querySelectorAll(".step");
  const totalSteps = steps.length; // Общее количество шагов
  let currentStep = 0;

  const quiz = document.querySelector(".quiz");

  if (quiz) {
    const stepNumberEl = document.getElementById("stepNumber");
    const stepTitleEl = document.getElementById("stepTitle");
    const currentStepEl = document.getElementById("currentStep");
    const totalStepsEl = document.getElementById("totalSteps");
    const progressBar = document.getElementById("progressBar");

    const closeBtn = document.querySelector(".quiz .close");
    const nextBtn = document.querySelector(".nextBtn");
    const prevButtons = document.querySelectorAll(".prevBtn");
    const submitBtn = document.querySelector(".submitBtn");

    if (totalStepsEl) {
      // Установить общее количество шагов
      totalStepsEl.textContent = totalSteps;
    }

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
      prevButtons.forEach(prevBtn => {
        prevBtn.style.display = stepIndex > 0 ? "flex" : "none";
      });
    }

    function closeQuiz() {
      if (closeBtn) {
        quiz.classList.remove("show");
        let body = document.querySelector("body");

        body.classList.remove("block");
      }
    }

    function validateCurrentStep() {
      // Ищем все обязательные поля: input, textarea, select и radio
      const currentInputs = steps[currentStep].querySelectorAll('input[required], textarea[required], select[required]');
      let isValid = true;

      currentInputs.forEach(input => {
        // Проверка для текстовых полей и текстовых областей
        if (input.type !== 'radio' && !input.value) {
          isValid = false;
          input.classList.add('error'); // Добавьте стиль для визуализации ошибки
          const select2 = input.closest('.step').querySelector('.select2'); // Находим соседний элемент select2
          if (select2) {
            select2.classList.add('error'); // Добавляем класс error к select2
          }
        } else {
          input.classList.remove('error'); // Уберите ошибку, если поле заполнено
          const select2 = input.closest('.step').querySelector('.select2');
          if (select2) {
            select2.classList.remove('error'); // Убираем класс error, если значение выбрано
          }
        }

        // Проверка для radio buttons
        if (input.type === 'radio') {
          const radioGroup = steps[currentStep].querySelectorAll(`input[name="${input.name}"]`);
          const isAnyChecked = Array.from(radioGroup).some(radio => radio.checked);
          if (!isAnyChecked) {
            isValid = false;
            radioGroup[0].classList.add('error'); // Добавьте стиль для визуализации ошибки (можно применить к любому из группы)
          } else {
            radioGroup[0].classList.remove('error'); // Уберите ошибку, если хотя бы одно поле выбрано
          }
        }

        // Проверка для select
        if (input.tagName.toLowerCase() === 'select' && !input.value) {
          isValid = false;
          input.classList.add('error'); // Добавьте стиль для визуализации ошибки
          const select2 = input.closest('.step').querySelector('.select2');
          if (select2) {
            select2.classList.add('error'); // Добавляем класс error к select2
          }
        } else if (input.tagName.toLowerCase() === 'select') {
          input.classList.remove('error'); // Уберите ошибку, если значение выбрано
          const select2 = input.closest('.step').querySelector('.select2');
          if (select2) {
            select2.classList.remove('error'); // Убираем класс error, если значение выбрано
          }
        }
      });

      return isValid;
    }



    function nextStep() {
      if (validateCurrentStep()) { // Проверка обязательных полей
        if (currentStep < steps.length - 1) {
          currentStep++;
          showStep(currentStep);
        }
      } else {
        // alert('Пожалуйста, заполните все обязательные поля.'); // Сообщение об ошибке
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
    prevButtons.forEach(button => {
      button.addEventListener("click", prevStep);
    });

    submitBtn.addEventListener('click', function () {
      const form = document.querySelector('.quiz__form form');
      if (validateCurrentStep()) { // Проверка обязательных полей
        // form.submit(); // Отправить форму
      } else {
        // alert('Пожалуйста, заполните все обязательные поля.'); // Сообщение об ошибке
      }

    });

    // Изначально показываем первый шаг
    showStep(currentStep);
  }
});


// quiz logic