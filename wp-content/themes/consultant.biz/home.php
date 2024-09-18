<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package businnesdrive
 */

get_header();
?>

<main id="primary" class="main site-main">
    <section class="blog blog-top">
        <div class="container">
            <span class="subtitle">Наш блог</span>

            <?php
            // Получаем ID страницы записей (блога)
            $blog_page_id = get_option('page_for_posts');

            // Получаем ID переведённой страницы в зависимости от языка
            $lang = pll_current_language();
            $translated_blog_page_id = pll_get_post($blog_page_id, $lang);

            // Получаем объект поста переведённой страницы
            $translated_page = get_post($translated_blog_page_id);

            // Получаем заголовок и контент страницы
            $translated_title = get_the_title($translated_blog_page_id);
            $translated_content = apply_filters('the_content', $translated_page->post_content);
            ?>
            <h1 class="center">
                <?php echo esc_html($translated_title); ?>
            </h1>
            <div class="center">
                <?php echo $translated_content; ?>
            </div>

            <form class="subscription" action="#">
                <input type="email" placeholder="Введіть свій імейл">
                <button class="button">Підписатися</button>
            </form>

            <ul class="blog-top__list">
                <?php
                // Параметры запроса
                $args = array(
                    'post_type' => array('post', 'news'), // Стандартные посты и кастомные 'news'
                    'posts_per_page' => 4, // Количество постов для вывода
                    'orderby' => 'date', // Сортировка по дате
                    'order' => 'DESC', // В порядке убывания (новые посты первыми)
                );

                $query = new WP_Query($args);
                $counter = 0; // Счётчик для отслеживания первого поста
                
                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post();
                        $counter++; // Увеличиваем счётчик для каждого поста
                
                        // Получаем URL миниатюры поста (если есть)
                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

                        if ($counter == 1): // Первый пост
                            ?>
                            <li
                                style="background-image: url(<?php echo esc_url($thumbnail_url ? $thumbnail_url : 'assets/images/single.jpg'); ?>);">
                                <div class="top">
                                    <h4><?php echo esc_html(get_post_type() == 'news' ? pll__('Новина') : pll__('Стаття')); ?></h4>
                                    <div class="info">
                                        <span class="date"><?php echo get_the_date('j F Y'); ?></span>
                                        <span class="time"><?php echo get_the_time('H:i'); ?></span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="blog__link" href="<?php the_permalink(); ?>">
                                        <h5><?php the_title(); ?></h5>
                                    </a>
                                    <div><?php the_excerpt(); ?></div>
                                </div>
                            </li>
                        <?php else: // Остальные посты ?>
                            <li>
                                <img src="<?php echo esc_url($thumbnail_url ? $thumbnail_url : 'assets/images/article' . $counter . '.jpg'); ?>"
                                    alt="">
                                <div class="content">
                                    <div class="info">
                                        <span class="date"><?php echo get_the_date('j F Y'); ?></span>
                                        <span class="time"><?php echo get_the_time('H:i'); ?></span>
                                    </div>
                                    <a class="blog__link" href="<?php the_permalink(); ?>">
                                        <h5><?php the_title(); ?></h5>
                                    </a>
                                    <div><?php the_excerpt(); ?></div>
                                    <ul class="categories__list">
                                        <?php
                                        // Выводим категории поста
                                        $categories = get_the_category();
                                        if (!empty($categories)):
                                            foreach ($categories as $category): ?>
                                                <li>
                                                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                                                        <?php echo esc_html($category->name); ?>
                                                    </a>
                                                </li>
                                            <?php endforeach;
                                        else:
                                            echo '<li>Без категории</li>';
                                        endif;
                                        ?>
                                    </ul>
                                </div>
                            </li>
                        <?php endif;
                    endwhile;
                else: ?>
                    <p>Постов не найдено</p>
                <?php endif; ?>

                <?php wp_reset_postdata(); // Сброс запроса ?>
            </ul>

        </div>
    </section>

    <!-- Blog News -->
    <?php
    // Параметры запроса
    // Для новостей
    $paged_news = (get_query_var('paged_news') > 0) ? get_query_var('paged_news') : 1;
    $args_news = array(
        'post_type' => 'news',
        'posts_per_page' => 6,
        'paged' => $paged_news
    );
    $query_news = new WP_Query($args_news);


    // Проверяем наличие постов
    if ($query_news->have_posts()): ?>
        <section class="blog post">
            <div class="container">
                <div class="blog__inner">
                    <h2 class="decor-left">
                        Новини
                    </h2>
                    <!-- Форма поиска для постов -->
                    <form class="search__form absolute" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <input type="hidden" name="post_type" value="news" />
                        <input class="search__input" type="text" name="s" id="s" placeholder="Пошук" />
                        <button class="search__btn" type="submit">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_181_1032)">
                                    <path
                                        d="M3 10C3 10.9193 3.18106 11.8295 3.53284 12.6788C3.88463 13.5281 4.40024 14.2997 5.05025 14.9497C5.70026 15.5998 6.47194 16.1154 7.32122 16.4672C8.1705 16.8189 9.08075 17 10 17C10.9193 17 11.8295 16.8189 12.6788 16.4672C13.5281 16.1154 14.2997 15.5998 14.9497 14.9497C15.5998 14.2997 16.1154 13.5281 16.4672 12.6788C16.8189 11.8295 17 10.9193 17 10C17 9.08075 16.8189 8.1705 16.4672 7.32122C16.1154 6.47194 15.5998 5.70026 14.9497 5.05025C14.2997 4.40024 13.5281 3.88463 12.6788 3.53284C11.8295 3.18106 10.9193 3 10 3C9.08075 3 8.1705 3.18106 7.32122 3.53284C6.47194 3.88463 5.70026 4.40024 5.05025 5.05025C4.40024 5.70026 3.88463 6.47194 3.53284 7.32122C3.18106 8.1705 3 9.08075 3 10Z"
                                        stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M21 21L15 15" stroke="black" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_181_1032">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                    </form>
                    <!-- Получаем список категорий для постов типа 'news' -->
                    <ul class="categories__list">
                        <?php
                        $categories = get_terms(array(
                            'taxonomy' => 'news_category', // Указываем таксономию
                            'orderby' => 'name',
                            'order' => 'ASC',
                            'hide_empty' => true, // Показывать только категории с постами
                        ));

                        if (!empty($categories)): // Если категории найдены
                            foreach ($categories as $category): ?>
                                <li>
                                    <a href="<?php echo esc_url(get_term_link($category)); ?>">
                                        <?php echo esc_html($category->name); ?>
                                    </a>
                                </li>
                            <?php endforeach;
                        else: // Если категорий нет
                            echo '<p>Категории не найдены.</p>';
                        endif;
                        ?>
                    </ul>
                    <!-- Список постов -->
                    <ul class="blog__list">
                        <?php
                        while ($query_news->have_posts()):
                            $query_news->the_post();

                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                            <li
                                style="<?php echo $thumbnail_url ? 'background-image: url(' . esc_url($thumbnail_url) . ');' : ''; ?>">
                                <div class="top">
                                    <h4><?php echo esc_html(get_post_type() == 'news' ? pll__('Новина') : pll__('Стаття')); ?></h4>
                                    <div class="info">
                                        <span class="date"><?php the_modified_date('F j Y'); ?></span>
                                        <span class="time"><?php the_modified_date('H:i'); ?></span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="blog__link" href="<?php the_permalink(); ?>">
                                        <h5><?php the_title(); ?></h5>
                                    </a>
                                    <div><?php the_excerpt(); ?></div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <!-- Пагинация для новостей -->
                    <?php // Пагинация для новостей
                        if ($query_news->max_num_pages > 1): ?>
                        <div class="pagination">
                            <!-- Предыдущая страница -->
                            <button class="pagination__button">
                                <?php
                                if ($paged_news > 1) {
                                    $prev_page = $paged_news - 1;
                                    $prev_link = add_query_arg('paged_news', $prev_page);
                                    echo '<a href="' . esc_url($prev_link) . '"><img src="' . get_stylesheet_directory_uri() . '/assets/images/icon/arrow-left.svg" alt="Next" /></a>';
                                } else {
                                    // Если это последняя страница, можно просто вывести текст без ссылки
                                    echo '<a href="#" class="disabled"><img src="' . get_stylesheet_directory_uri() . '/assets/images/icon/arrow-left.svg" alt="Next" /></a>';
                                }
                                ?>
                                <span>Попередня</span>
                            </button>
                            <!-- Список страниц -->
                            <?php
                            $pagination_news = paginate_links(array(
                                'total' => $query_news->max_num_pages,
                                'current' => $paged_news,
                                'type' => 'array',
                                'show_all' => false,
                                'end_size' => 1,
                                'mid_size' => 2,
                                'prev_next' => false,
                                'base' => add_query_arg('paged_news', '%#%'), // Добавляем параметр 'paged_news' в URL
                                'format' => '?paged_news=%#%', // Формат ссылки
                            ));

                            if ($pagination_news) {
                                echo '<ul class="pagination__list">';
                                foreach ($pagination_news as $page) {
                                    echo '<li>' . $page . '</li>';
                                }
                                echo '</ul>';
                            }
                            ?>
                            <!-- Следующая страница -->
                            <button class="pagination__button">
                                <span>Наступна</span>
                                <?php
                                if ($paged_news < $query_news->max_num_pages) {
                                    $next_page = $paged_news + 1;
                                    $next_link = add_query_arg('paged_news', $next_page);
                                    ?>
                                    <?php
                                    echo '<a href="' . esc_url($next_link) . '"><img src="' . get_stylesheet_directory_uri() . '/assets/images/icon/arrow-right.svg" alt="Next" /></a>';
                                } else {
                                    // Если это последняя страница, можно просто вывести текст без ссылки
                                    echo '<a href="#" class="disabled"><img src="' . get_stylesheet_directory_uri() . '/assets/images/icon/arrow-right.svg" alt="Next" /></a>';
                                }
                                ?>
                            </button>
                        </div>
                    <?php endif; // Конец проверки ?>

                    <?php wp_reset_postdata(); // Сброс запроса ?>
                </div>
            </div>
        </section>
    <?php endif; // Конец проверки наличия постов ?>
    <!-- Blog News -->


    <!-- Blog Articles -->
    <?php
    // Параметры запроса
    // Для статей
    $paged_posts = (get_query_var('paged_posts') > 0) ? get_query_var('paged_posts') : 1;
    $args_posts = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'paged' => $paged_posts
    );
    $query_posts = new WP_Query($args_posts);

    // Проверяем наличие постов
    if ($query_posts->have_posts()): ?>
        <section class="blog">
            <div class="container">
                <div class="blog__inner">
                    <h2 class="decor-left">
                        Статті
                    </h2>
                    <!-- Форма поиска для постов -->
                    <form class="search__form absolute" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <input type="hidden" name="post_type" value="post" />
                        <input class="search__input" type="text" name="s" id="s" placeholder="Пошук" />
                        <button class="search__btn" type="submit">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_181_1032)">
                                    <path
                                        d="M3 10C3 10.9193 3.18106 11.8295 3.53284 12.6788C3.88463 13.5281 4.40024 14.2997 5.05025 14.9497C5.70026 15.5998 6.47194 16.1154 7.32122 16.4672C8.1705 16.8189 9.08075 17 10 17C10.9193 17 11.8295 16.8189 12.6788 16.4672C13.5281 16.1154 14.2997 15.5998 14.9497 14.9497C15.5998 14.2997 16.1154 13.5281 16.4672 12.6788C16.8189 11.8295 17 10.9193 17 10C17 9.08075 16.8189 8.1705 16.4672 7.32122C16.1154 6.47194 15.5998 5.70026 14.9497 5.05025C14.2997 4.40024 13.5281 3.88463 12.6788 3.53284C11.8295 3.18106 10.9193 3 10 3C9.08075 3 8.1705 3.18106 7.32122 3.53284C6.47194 3.88463 5.70026 4.40024 5.05025 5.05025C4.40024 5.70026 3.88463 6.47194 3.53284 7.32122C3.18106 8.1705 3 9.08075 3 10Z"
                                        stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M21 21L15 15" stroke="black" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_181_1032">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                    </form>
                    <!-- Получаем список категорий -->
                    <ul class="categories__list">
                        <?php
                        $categories = get_categories(array(
                            'orderby' => 'name',
                            'order' => 'ASC'
                        ));

                        if (!empty($categories)): // Если категории найдены
                            foreach ($categories as $category): ?>
                                <li>
                                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                                        <?php echo esc_html($category->name); ?>
                                    </a>
                                </li>
                            <?php endforeach;
                        else: // Если категорий нет
                            echo '<p>Категории не найдены.</p>';
                        endif;
                        ?>
                    </ul>
                    <!-- Список постов -->
                    <ul class="blog__list">
                        <?php
                        while ($query_posts->have_posts()):
                            $query_posts->the_post();

                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                            <li
                                style="<?php echo $thumbnail_url ? 'background-image: url(' . esc_url($thumbnail_url) . ');' : ''; ?>">
                                <div class="top">
                                    <h4><?php echo esc_html(get_post_type() == 'news' ? pll__('Новина') : pll__('Стаття')); ?></h4>
                                    <div class="info">
                                        <span class="date"><?php the_modified_date('F j Y'); ?></span>
                                        <span class="time"><?php the_modified_date('H:i'); ?></span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="blog__link" href="<?php the_permalink(); ?>">
                                        <h5><?php the_title(); ?></h5>
                                    </a>
                                    <div><?php the_excerpt(); ?></div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <!-- Пагинация для статей -->
                    <?php if ($query_posts->max_num_pages > 1): ?>
                        <div class="pagination">
                            <!-- Предыдущая страница -->
                            <button class="pagination__button">
                                <?php
                                if ($paged_posts > 1) {
                                    $prev_page = $paged_posts - 1;
                                    $prev_link = add_query_arg('paged_posts', $prev_page);
                                    echo '<a href="' . esc_url($prev_link) . '"><img src="' . get_stylesheet_directory_uri() . '/assets/images/icon/arrow-left.svg" alt="Next" /></a>';
                                } else {
                                    // Если это последняя страница, можно просто вывести текст без ссылки
                                    echo '<a href="#" class="disabled"><img src="' . get_stylesheet_directory_uri() . '/assets/images/icon/arrow-left.svg" alt="Next" /></a>';
                                }
                                ?>
                                <span>Попередня</span>
                            </button>
                            <!-- Список страниц -->
                            <?php
                            $pagination_posts = paginate_links(array(
                                'total' => $query_posts->max_num_pages,
                                'current' => $paged_posts,
                                'type' => 'array',
                                'show_all' => false,
                                'end_size' => 1,
                                'mid_size' => 2,
                                'prev_next' => false,
                                'base' => add_query_arg('paged_posts', '%#%'), // Добавляем параметр 'paged_posts' в URL
                                'format' => '?paged_posts=%#%', // Формат ссылки
                            ));

                            if ($pagination_posts) {
                                echo '<ul class="pagination__list">';
                                foreach ($pagination_posts as $page) {
                                    echo '<li>' . $page . '</li>';
                                }
                                echo '</ul>';
                            }
                            ?>
                            <!-- Следующая страница -->
                            <button class="pagination__button">
                                <span>Наступна</span>
                                <?php
                                if ($paged_posts < $query_posts->max_num_pages) {
                                    $next_page = $paged_posts + 1;
                                    $next_link = add_query_arg('paged_posts', $next_page);
                                    ?>

                                    <?php
                                    echo '<a href="' . esc_url($next_link) . '"><img src="' . get_stylesheet_directory_uri() . '/assets/images/icon/arrow-right.svg" alt="Next" /></a>';
                                } else {
                                    // Если это последняя страница, можно просто вывести текст без ссылки
                                    echo '<a href="#" class="disabled"><img src="' . get_stylesheet_directory_uri() . '/assets/images/icon/arrow-right.svg" alt="Next" /></a>';
                                }

                                ?>
                            </button>
                        </div>
                    <?php endif; // Конец проверки ?>

                    <?php wp_reset_postdata(); // Сброс запроса ?>
                </div>
            </div>
        </section>
        <?php
    endif;
    ?>
    <!-- Blog Articles -->

</main><!-- #main -->


<?php

get_footer();