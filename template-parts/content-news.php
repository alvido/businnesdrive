<section class="blog interested">
    <div class="container">
        <div class="interested__inner">
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
            <h2 class="decor-left">
                <?php echo esc_html($translated_title); ?>
            </h2>
            <?php
            if ($blog_page_id) {
                $blog_page_url = get_permalink($blog_page_id);
                echo '<a class="button" href="' . esc_url($blog_page_url) . '">' . pll__('Дізнатися більше') . '</a>';
            }
            ?>
            <ul class="blog__list">
                <?php
                // Параметры запроса
                $args = array(
                    'post_type' => array('post', 'news'), // Стандартные посты и кастомные 'news'
                    'posts_per_page' => 3, // Количество постов для вывода
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
                        ?>
                        <li
                            style="background-image: url(<?php echo esc_url($thumbnail_url ? $thumbnail_url : 'assets/images/single.jpg'); ?>);">
                            <div class="top">
                                <h4><?php echo esc_html(get_post_type() == 'news' ? pll__('Новина') : pll__('Стаття')); ?>
                                </h4>
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
                        <?php
                    endwhile;
                else: ?>
                    <p>Постов не найдено</p>
                <?php endif; ?>

                <?php wp_reset_postdata(); // Сброс запроса ?>
            </ul>
        </div>
    </div>
</section>