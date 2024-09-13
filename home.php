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
    <section class="blog">
        <div class="container">
            <div class="blog__inner">
                <div class="search__form">
                    <!-- Форма поиска для постов -->
                    <form class="search__form" role="search" method="get"
                        action="<?php echo esc_url(home_url('/')); ?>">
                        <input type="hidden" name="post_type" value="post" />
                        <input class="search__input" type="text" name="s" id="s" placeholder="Пошук" />
                        <button class="search__btn" type="submit">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_181_1032)">
                                    <path
                                        d="M3 10C3 10.9193 3.18106 11.8295 3.53284 12.6788C3.88463 13.5281 4.40024 14.2997 5.05025 14.9497C5.70026 15.5998 6.47194 16.1154 7.32122 16.4672C8.1705 16.8189 9.08075 17 10 17C10.9193 17 11.8295 16.8189 12.6788 16.4672C13.5281 16.1154 14.2997 15.5998 14.9497 14.9497C15.5998 14.2997 16.1154 13.5281 16.4672 12.6788C16.8189 11.8295 17 10.9193 17 10C17 9.08075 16.8189 8.1705 16.4672 7.32122C16.1154 6.47194 15.5998 5.70026 14.9497 5.05025C14.2997 4.40024 13.5281 3.88463 12.6788 3.53284C11.8295 3.18106 10.9193 3 10 3C9.08075 3 8.1705 3.18106 7.32122 3.53284C6.47194 3.88463 5.70026 4.40024 5.05025 5.05025C4.40024 5.70026 3.88463 6.47194 3.53284 7.32122C3.18106 8.1705 3 9.08075 3 10Z"
                                        stroke="black" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
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
                </div>
                <ul class="blog__categories">
                    <?php
                    // Получаем список категорий
                    $categories = get_categories(array(
                        'orderby' => 'name', // Можно изменить на 'count', 'slug', и т.д.
                        'order' => 'ASC' // Можно изменить на 'DESC'
                    ));

                    // Проверяем, есть ли категории
                    if (!empty($categories)):
                        ?>
                        <?php foreach ($categories as $category): ?>
                            <li>
                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                                    <?php echo esc_html($category->name); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        <?php
                    else:
                        echo '<p>Категории не найдены.</p>';
                    endif;
                    ?>
                </ul>
                <ul class="blog__list">
                    <?php
                    // Параметры запроса
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Получаем текущую страницу
                    
                    $args = array(
                        'post_type' => 'post', // Тип записи (в данном случае, обычные посты)
                        'posts_per_page' => 3, // Количество постов на одной странице
                        'paged' => $paged // Передаем текущую страницу в запрос
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()):
                        while ($query->have_posts()):
                            $query->the_post(); ?>

                            <!-- Вывод каждого поста -->
                            <?php
                            // Получаем URL миниатюры поста
                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // 'full' можно заменить на другой размер, например 'thumbnail'
                            ?>
                            <li
                                style="<?php echo $thumbnail_url ? 'background-image: url(' . esc_url($thumbnail_url) . ');' : ''; ?>">
                                <div class="top">
                                    <h4><?php
                                    // Получаем объект типа записи и выводим его название
                                    $post_type_obj = get_post_type_object(get_post_type());
                                    echo esc_html($post_type_obj->labels->name);
                                    ?></h4>
                                    <div class="info">
                                        <span class="date"><?php the_modified_date('F j Y'); ?></span>
                                        <span class="time"><?php the_modified_date('H:i'); ?></span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="blog__link" href="<?php the_permalink(); ?>">
                                        <h5><?php the_title(); ?></h5>
                                    </a>
                                    <div>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </li>

                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); // Сбрасываем данные запроса
                    
                    else:
                        echo '<p>Посты не найдены</p>';
                    endif;
                    ?>

                </ul>
                <!-- Пагинация -->
                <div class="pagination">
                    <!-- Предыдущая страница -->
                    <span class="pagination__button">
                        <?php
                        $prev_link = get_previous_posts_link('«');
                        if ($prev_link) {
                            echo $prev_link;
                        } else {
                            echo '<a href="#" class="disabled">«</a>';
                        }
                        ?>
                    </span>

                    <!-- Список страниц -->
                    <?php
                    // Определяем текущую страницу
                    $current = max(1, get_query_var('paged'));

                    // Получаем ссылки для пагинации в виде массива
                    $pagination = paginate_links(array(
                        'total' => $query->max_num_pages,
                        'current' => $current,
                        'type' => 'array', // Получаем ссылки в виде массива
                        'show_all' => true,
                        'end_size' => 1,
                        'mid_size' => 1,
                        'prev_next' => false, // Отключаем ссылки "предыдущая" и "следующая"
                    ));

                    if ($pagination) {
                        echo '<ul class="pagination__list">';
                        foreach ($pagination as $page) {
                            echo '<li>' . $page . '</li>';
                        }
                        echo '</ul>';
                    }
                    ?>

                    <!-- Следующая страница -->
                    <span class="pagination__button">
                        <?php
                        $next_link = get_next_posts_link('»');
                        if ($next_link) {
                            echo $next_link;
                        } else {
                            echo '<a href="#" class="disabled">»</a>';
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </section>


    <section class="blog post">
        <div class="container">
            <div class="blog__inner">
                <div class="search__form">
                    <!-- Форма поиска для новостей -->
                    <form class="search__form" role="search" method="get"
                        action="<?php echo esc_url(home_url('/')); ?>">
                        <input type="hidden" name="post_type" value="news" />
                        <input class="search__input" type="text" name="s" id="s" placeholder="Поиск по новостям..." />
                        <button class="search__btn" type="submit">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_181_1032)">
                                    <path
                                        d="M3 10C3 10.9193 3.18106 11.8295 3.53284 12.6788C3.88463 13.5281 4.40024 14.2997 5.05025 14.9497C5.70026 15.5998 6.47194 16.1154 7.32122 16.4672C8.1705 16.8189 9.08075 17 10 17C10.9193 17 11.8295 16.8189 12.6788 16.4672C13.5281 16.1154 14.2997 15.5998 14.9497 14.9497C15.5998 14.2997 16.1154 13.5281 16.4672 12.6788C16.8189 11.8295 17 10.9193 17 10C17 9.08075 16.8189 8.1705 16.4672 7.32122C16.1154 6.47194 15.5998 5.70026 14.9497 5.05025C14.2997 4.40024 13.5281 3.88463 12.6788 3.53284C11.8295 3.18106 10.9193 3 10 3C9.08075 3 8.1705 3.18106 7.32122 3.53284C6.47194 3.88463 5.70026 4.40024 5.05025 5.05025C4.40024 5.70026 3.88463 6.47194 3.53284 7.32122C3.18106 8.1705 3 9.08075 3 10Z"
                                        stroke="black" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
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

                </div>
                <ul class="blog__categories">
                    <?php
                    // Получаем список категорий
                    $categories = get_categories(array(
                        'orderby' => 'name', // Можно изменить на 'count', 'slug', и т.д.
                        'order' => 'ASC' // Можно изменить на 'DESC'
                    ));

                    // Проверяем, есть ли категории
                    if (!empty($categories)):
                        ?>
                        <?php foreach ($categories as $category): ?>
                            <li>
                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                                    <?php echo esc_html($category->name); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        <?php
                    else:
                        echo '<p>Категории не найдены.</p>';
                    endif;
                    ?>
                </ul>
                <ul class="blog__list">
                    <?php
                    // Параметры запроса
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Получаем текущую страницу
                    
                    $args = array(
                        'post_type' => 'post', // Тип записи (в данном случае, обычные посты)
                        'posts_per_page' => 3, // Количество постов на одной странице
                        'paged' => $paged // Передаем текущую страницу в запрос
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()):
                        while ($query->have_posts()):
                            $query->the_post(); ?>

                            <!-- Вывод каждого поста -->
                            <?php
                            // Получаем URL миниатюры поста
                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // 'full' можно заменить на другой размер, например 'thumbnail'
                            ?>
                            <li
                                style="<?php echo $thumbnail_url ? 'background-image: url(' . esc_url($thumbnail_url) . ');' : ''; ?>">
                                <div class="top">
                                    <h4><?php
                                    // Получаем объект типа записи и выводим его название
                                    $post_type_obj = get_post_type_object(get_post_type());
                                    echo esc_html($post_type_obj->labels->name);
                                    ?></h4>
                                    <div class="info">
                                        <span class="date"><?php the_modified_date('F j Y'); ?></span>
                                        <span class="time"><?php the_modified_date('H:i'); ?></span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="blog__link" href="<?php the_permalink(); ?>">
                                        <h5><?php the_title(); ?></h5>
                                    </a>
                                    <div>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </li>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); // Сбрасываем данные запроса
                    else:
                        echo '<p>Посты не найдены</p>';
                    endif;
                    ?>
                </ul>
                <!-- Пагинация -->
                <div class="pagination">
                    <!-- Предыдущая страница -->
                    <span class="pagination__button">
                        <?php
                        $prev_link = get_previous_posts_link('«');
                        if ($prev_link) {
                            echo $prev_link;
                        } else {
                            echo '<a href="#" class="disabled">«</a>';
                        }
                        ?>
                    </span>

                    <!-- Список страниц -->
                    <?php
                    // Определяем текущую страницу
                    $current = max(1, get_query_var('paged'));

                    // Получаем ссылки для пагинации в виде массива
                    $pagination = paginate_links(array(
                        'total' => $query->max_num_pages,
                        'current' => $current,
                        'type' => 'array', // Получаем ссылки в виде массива
                        'show_all' => true,
                        'end_size' => 1,
                        'mid_size' => 1,
                        'prev_next' => false, // Отключаем ссылки "предыдущая" и "следующая"
                    ));

                    if ($pagination) {
                        echo '<ul class="pagination__list">';
                        foreach ($pagination as $page) {
                            echo '<li>' . $page . '</li>';
                        }
                        echo '</ul>';
                    }
                    ?>

                    <!-- Следующая страница -->
                    <span class="pagination__button">
                        <?php
                        $next_link = get_next_posts_link('»');
                        if ($next_link) {
                            echo $next_link;
                        } else {
                            echo '<a href="#" class="disabled">»</a>';
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </section>
</main><!-- #main -->


<?php

get_sidebar();
get_footer();