<?php

/**
 * The template for displaying front pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package businnesdrive
 */
get_header();
?>

<main id="primary" class="main site-main">
    <section class="hero"
        style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero.png');">
        <div class="hero__wrapper container">
            <h1 class="center">Легко та зручно управляйте своїм бізнесом та підвищуйте продажі з
                <span>"consultant"</span>
            </h1>
            <a href="#" class="button">Дізнатися більше</a>
        </div>
        <button class="button button-chat" id="liveChat">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_651)">
                    <path
                        d="M24 5.3335C25.0609 5.3335 26.0783 5.75492 26.8284 6.50507C27.5786 7.25521 28 8.27263 28 9.3335V20.0002C28 21.061 27.5786 22.0784 26.8284 22.8286C26.0783 23.5787 25.0609 24.0002 24 24.0002H17.3333L10.6667 28.0002V24.0002H8C6.93913 24.0002 5.92172 23.5787 5.17157 22.8286C4.42143 22.0784 4 21.061 4 20.0002V9.3335C4 8.27263 4.42143 7.25521 5.17157 6.50507C5.92172 5.75492 6.93913 5.3335 8 5.3335H24Z"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12.6666 12H12.68" stroke="white" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M19.3334 12H19.3467" stroke="white" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M12.6666 17.3335C13.1011 17.777 13.6198 18.1293 14.1921 18.3698C14.7645 18.6103 15.3791 18.7342 16 18.7342C16.6208 18.7342 17.2354 18.6103 17.8078 18.3698C18.3802 18.1293 18.8988 17.777 19.3333 17.3335"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                    <clipPath id="clip0_1_651">
                        <rect width="32" height="32" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </button>
    </section>

    <section class="created">
        <div class="container">
            <h2 class="center">Для кого створена</h2>
            <p class="center decor-bottom">якщо підходите по всім трьом пунктам - вважайте, розроблена саме для
                вас</p>
            <ul class="created__list">
                <li>
                    <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/medal.svg"
                            alt="medal"></span>
                    <h4 class="center">Сфера послуг</h4>
                    <p class="center">
                        Наша система підходить для будь-якого бізнесу в сфері послуг – від салонів краси до
                        маркетингових агентств. Вона допомагає ефективно керувати взаємодією з клієнтами,
                        планувати роботу та аналізувати результати для підвищення рівня сервісу.
                    </p>
                </li>
                <li>
                    <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/medal.svg"
                            alt="medal"></span>
                    <h4 class="center">Малий бізнес</h4>
                    <p class="center">
                        Ідеально підходить для малого бізнесу, який прагне автоматизувати процеси управління
                        клієнтами та підвищити ефективність роботи. Простий інтерфейс та доступні функції
                        дозволяють швидко впровадити систему в роботу без додаткових витрат.
                    </p>
                </li>
                <li>
                    <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/medal.svg"
                            alt="medal"></span>
                    <h4 class="center">Стартапи</h4>
                    <p class="center">
                        Для стартапів важливо швидко організувати бізнес-процеси та забезпечити їхнє
                        масштабування. Наша система забезпечує гнучкість та легкість у використанні, а також
                        модель оплати за результат, що дозволяє швидко адаптуватися до змін і зростання.
                    </p>
                </li>
            </ul>
        </div>
    </section>
    <section class="advantages">
        <div class="container">
            <h2 class="center decor-bottom">Переваги</h2>
            <ul class="advantages__list">
                <li>
                    <h5>Власний сайт</h5>
                    <p>Легко створюйте та керуйте декількома власними сайтами за допомогою нашої системи
                        управління контентом абсолютно безкоштовно.</p>
                </li>
                <li>
                    <h5>Кастомізація</h5>
                    <p>Безмежні можливості для налаштування системи під ваші потреби завдяки нашій команда
                        розробників та бізнес-аналітиків.</p>
                </li>
                <li>
                    <h5>Безкоштовне впровадження</h5>
                    <p>Жодних витрат на впровадження та технічну підтримку платформи.</p>
                </li>
                <li>
                    <h5>Доступ до консультацій</h5>
                    <p>Легкий доступ до консультацій наших бізнес-спеціалістів: юристів, бухгалтерів,
                        маркетологів та sales-менеджерів, що дозволяє економити Ваш час.</p>
                </li>
                <li>
                    <h5>Адаптивний інтерфейс</h5>
                    <p>Інтерфейс, що адаптується до будь-якого пристрою.</p>
                </li>
                <li>
                    <h5>Сайт+СРМ+<br>мессенджер</h5>
                    <p>Отримайте сайт, СРМ та внутрішній мессенджер в одному пакеті.</p>
                </li>
                <li>
                    <h5>Інструмент заробітку</h5>
                    <p>Використовуйте наші інструменти для збільшення прибутку</p>
                </li>
                <li>
                    <h5>Оплата за СИП</h5>
                    <p>Платіть лише за успішні дії за моделлю СИП.</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="consist">
        <div class="container">
            <h2 class="center">3 чого складається
                Система Управління Бізнесом “Consultant”</h2>
            <p class="center decor-bottom">В нашій системі лише те, що дійсно потрібно бізнесу для збільшення
                прибутку</p>
            <div class="swiper" id="consistSwiper">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide">
                        <div class="slide-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/crm.png" alt="">
                        </div>
                        <div class="slide-content">
                            <h4>Модуль Підтримки</h4>
                            <p>
                                Цілком природно, що під час впровадження або в процесі роботи можуть виникати
                                питання. Наша служба підтримки завжди на зв’язку, готова допомогти у будь-який
                                момент. Ми створили спеціальний модуль для обробки звернень, де ви можете
                                відстежувати, як швидко наші спеціалісти вирішують ваші запити
                            </p>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="slide-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/crm.png" alt="">
                        </div>
                        <div class="slide-content">
                            <h4>Підтримки</h4>
                            <p>
                                Цілком природно, що під час впровадження або в процесі роботи можуть виникати
                                питання. Наша служба підтримки завжди на зв’язку, готова допомогти у будь-який
                                момент. Ми створили спеціальний модуль для обробки звернень, де ви можете
                                відстежувати, як швидко наші спеціалісти вирішують ваші запити
                            </p>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="slide-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/crm.png" alt="">
                        </div>
                        <div class="slide-content">
                            <h4>Модуль Підтримки</h4>
                            <p>
                                Цілком природно, що під час впровадження або в процесі роботи можуть виникати
                                питання. Наша служба підтримки завжди на зв’язку, готова допомогти у будь-який
                                момент. Ми створили спеціальний модуль для обробки звернень, де ви можете
                                відстежувати, як швидко наші спеціалісти вирішують ваші запити
                            </p>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="slide-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/crm.png" alt="">
                        </div>
                        <div class="slide-content">
                            <h4>Модуль</h4>
                            <p>
                                Цілком природно, що під час впровадження або в процесі роботи можуть виникати
                                питання. Наша служба підтримки завжди на зв’язку, готова допомогти у будь-який
                                момент. Ми створили спеціальний модуль для обробки звернень, де ви можете
                                відстежувати, як швидко наші спеціалісти вирішують ваші запити
                            </p>
                        </div>
                    </li>
                </ul>
                <div class="swiper__navigation">
                    <div class="swiper-pagination"></div>
                    <div class="swiper__navigation-buttons">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about dark home">
        <div class="container">
            <div class="wrapper">
                <h2 class="decor-left">Про компанію</h2>
                <div class="info">
                    <p>
                        Наша команда більше 5 років спеціалізується на збільшенні продажів та впровадженні
                        програмного забезпечення в бізнес
                    </p>
                    <a href="about.html" class="button">дізнатися більше</a>
                </div>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company.png" alt="">
        </div>
    </section>
    <section class="survey" id="survey">
        <div class="container">
            <div class="dark">
                <h2>Квіз-опитування</h2>
                <p>
                    Для того, що б ми запропонували саме те що Вам потрібно - пропонуємо пройти коротке
                    опитування
                    щодо потреб Вашого бізнесу. Це займе декілька хвилин - а Ви отримаєте безкоштовну
                    консультацію
                    від Бізнес-аналітика нашої компанії
                </p>
                <button class="button" id="openQuiz">Розпочати</button>
            </div>
        </div>
    </section>
    <section class="prices dark">
        <div class="container">
            <h2 class="center decor-bottom">Ціни</h2>
            <p class="center">Ми пропонуємо модель оплати лише за результат - а саме заявки від ваших клієнтів
                які потрапили в систему за допомогою різних джерел</p>
            <ul class="prices__list">
                <li>
                    <span class="prices__decor"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/zap.svg"
                            alt=""></span>
                    <h6 class="center">Перші 200 заявок - Безкоштовно</h6>
                    <span class="center prices__details">Більше 200:</span>
                    <ul class="prices__details-list">
                        <li>1 грн - кожна наступна заявка</li>
                        <li>+1 грн - якщо вона з лендингу який створений в СРМ</li>
                        <li>+1 грн - якщо лід написав в чат який на лендінгу</li>
                        <li>+1 грн - якщо клієнт скористався телефонією</li>
                    </ul>
                    <button class="button">Придбати</button>
                </li>
            </ul>
        </div>
    </section>
    <section class="partners">
        <div class="container">
            <h2 class="center decor-bottom">Якщо Вам не підійде саме наша система, то ми можемо підібрати для
                Вас іншу під потреби Вашого бізнесу зі списку партнерів</h2>
            <ul class="partners__list">
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partner/onebox.png" alt="">
                </li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partner/lbs.png" alt=""></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partner/raiffensen.png"
                        alt=""></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partner/zarina.png" alt="">
                </li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partner/raiffensen.png"
                        alt=""></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partner/zarina.png" alt="">
                </li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partner/raiffensen.png"
                        alt=""></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partner/zarina.png" alt="">
                </li>
            </ul>
        </div>
    </section>
    <?php get_template_part('template-parts/content', 'post'); ?>
    <section class="blog interested">
        <div class="container">
            <div class="interested__inner">
                <h2 class="decor-left">
                    Блог
                </h2>
                <button class="button">дізнатися більше</button>
                <ul class="blog__list">
                    <li
                        style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog.jpg');">
                        <div class="top">
                            <h4>Новина</h4>
                            <div class="info">
                                <span class="date">31 липня 2024</span>
                                <span class="time">16:30</span>
                            </div>
                        </div>
                        <div class="bottom">
                            <a class="blog__link" href="#">
                                <h5>Назва статті 1</h5>
                            </a>
                            <p>
                                Більшість відомих генераторів Lorem Ipsum в Мережі генерують текст шляхом
                                повторення
                                наперед заданих послідовностей Lorem Ipsum. Принципова відмінність цього
                                генератора
                                робить його першим справжнім генератором Lorem Ipsum.
                            </p>
                        </div>
                    </li>
                    <li
                        style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog.jpg');">
                        <div class="top">
                            <h4>Новина</h4>
                            <div class="info">
                                <span class="date">31 липня 2024</span>
                                <span class="time">16:30</span>
                            </div>
                        </div>
                        <div class="bottom">
                            <a class="blog__link" href="#">
                                <h5>Назва статті 1</h5>
                            </a>
                            <p>
                                Більшість відомих генераторів Lorem Ipsum в Мережі генерують текст шляхом
                                повторення
                                наперед заданих послідовностей Lorem Ipsum. Принципова відмінність цього
                                генератора
                                робить його першим справжнім генератором Lorem Ipsum.
                            </p>
                        </div>
                    </li>
                    <li
                        style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog.jpg');">
                        <div class="top">
                            <h4>Новина</h4>
                            <div class="info">
                                <span class="date">31 липня 2024</span>
                                <span class="time">16:30</span>
                            </div>
                        </div>
                        <div class="bottom">
                            <a class="blog__link" href="#">
                                <h5>Назва статті 1</h5>
                            </a>
                            <p>
                                Більшість відомих генераторів Lorem Ipsum в Мережі генерують текст шляхом
                                повторення
                                наперед заданих послідовностей Lorem Ipsum. Принципова відмінність цього
                                генератора
                                робить його першим справжнім генератором Lorem Ipsum.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="feedback">
        <div class="column">
            <h3>Зворотній зв'язок</h3>
            <form action="#" class="feedback__form">
                <label for="name">
                    <input type="text" id="name" name="name" required placeholder="ім’я">
                    <p>Ваше ім’я</p>
                </label>
                <label for="company">
                    <input type="text" id="company" name="company" required placeholder="назва компанії">
                    <p> назва компанії</p>
                </label>
                <label for="email">
                    <input type="email" id="email" name="email" required placeholder="email">
                    <p>email</p>
                </label>
                <label for="phone">
                    <input type="tel" id="phone" name="phone" required placeholder="+380 00 000 00 00">
                    <p>телефон</p>
                </label>
                <button class="open open-textarea" type="button">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_181_1649)">
                            <path d="M5.33325 6H10.6666" stroke="#1397D6" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M5.33325 8.66675H9.33325" stroke="#1397D6" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M12 2.66675C12.5304 2.66675 13.0391 2.87746 13.4142 3.25253C13.7893 3.62761 14 4.13631 14 4.66675V10.0001C14 10.5305 13.7893 11.0392 13.4142 11.4143C13.0391 11.7894 12.5304 12.0001 12 12.0001H8.66667L5.33333 14.0001V12.0001H4C3.46957 12.0001 2.96086 11.7894 2.58579 11.4143C2.21071 11.0392 2 10.5305 2 10.0001V4.66675C2 4.13631 2.21071 3.62761 2.58579 3.25253C2.96086 2.87746 3.46957 2.66675 4 2.66675H12Z"
                                stroke="#1397D6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_181_1649">
                                <rect width="16" height="16" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    Додати коментар
                </button>
                <label class ="hidden-area" for="comments">
                    <textarea id="comments" name="comments" rows="4" placeholder="Коментар"></textarea>
                    <p>Коментар</p>
                </label>
                <button class="button" type="submit">Надіслати</button>
            </form>
        </div>
        <div class="column dark">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/stars.svg" alt="">
            <h3>Це робить текст схожим на оповідний</h3>
            <p>Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює композицію
                сторінки. Сенс використання Lorem Ipsum.</p>
            <div class="social">
                <a href="" class="" target="_blank">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_635)">
                            <path
                                d="M20 13.3335L14.6667 18.6668L22.6667 26.6668L28 5.3335L4 14.6668L9.33333 17.3335L12 25.3335L16 20.0002"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1_635">
                                <rect width="32" height="32" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="" class="" target="_blank">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_638)">
                            <path
                                d="M5.33325 10.6668C5.33325 9.25234 5.89515 7.89579 6.89535 6.89559C7.89554 5.8954 9.2521 5.3335 10.6666 5.3335H21.3333C22.7477 5.3335 24.1043 5.8954 25.1045 6.89559C26.1047 7.89579 26.6666 9.25234 26.6666 10.6668V21.3335C26.6666 22.748 26.1047 24.1045 25.1045 25.1047C24.1043 26.1049 22.7477 26.6668 21.3333 26.6668H10.6666C9.2521 26.6668 7.89554 26.1049 6.89535 25.1047C5.89515 24.1045 5.33325 22.748 5.33325 21.3335V10.6668Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M12 16C12 17.0609 12.4214 18.0783 13.1716 18.8284C13.9217 19.5786 14.9391 20 16 20C17.0609 20 18.0783 19.5786 18.8284 18.8284C19.5786 18.0783 20 17.0609 20 16C20 14.9391 19.5786 13.9217 18.8284 13.1716C18.0783 12.4214 17.0609 12 16 12C14.9391 12 13.9217 12.4214 13.1716 13.1716C12.4214 13.9217 12 14.9391 12 16Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M22 10V10.0133" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1_638">
                                <rect width="32" height="32" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="" class="" target="_blank">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_643)">
                            <path
                                d="M9.33325 13.3333V18.6667H13.3333V28H18.6666V18.6667H22.6666L23.9999 13.3333H18.6666V10.6667C18.6666 10.313 18.8071 9.97391 19.0571 9.72386C19.3072 9.47381 19.6463 9.33333 19.9999 9.33333H23.9999V4H19.9999C18.2318 4 16.5361 4.70238 15.2859 5.95262C14.0356 7.20286 13.3333 8.89856 13.3333 10.6667V13.3333H9.33325Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1_643">
                                <rect width="32" height="32" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="" class="" target="_blank">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_646)">
                            <path
                                d="M2.66675 10.6668C2.66675 9.25234 3.22865 7.89579 4.22885 6.89559C5.22904 5.8954 6.58559 5.3335 8.00008 5.3335H24.0001C25.4146 5.3335 26.7711 5.8954 27.7713 6.89559C28.7715 7.89579 29.3334 9.25234 29.3334 10.6668V21.3335C29.3334 22.748 28.7715 24.1045 27.7713 25.1047C26.7711 26.1049 25.4146 26.6668 24.0001 26.6668H8.00008C6.58559 26.6668 5.22904 26.1049 4.22885 25.1047C3.22865 24.1045 2.66675 22.748 2.66675 21.3335V10.6668Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.3333 12L19.9999 16L13.3333 20V12Z" stroke="white" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1_646">
                                <rect width="32" height="32" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
