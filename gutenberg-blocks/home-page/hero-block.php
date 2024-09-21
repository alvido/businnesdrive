<?php
$hero_title = get_field('hero_title'); // Получаем заголовок
$hero_link_text = get_field('hero_link_text'); // Получаем текст для кнопки (добавлено)
$hero_background = get_field('hero_background'); // Получаем фоновое изображение

if (!empty($hero_title)): ?>
    <section class="hero" <?php if (!empty($hero_background)): ?>
            style="background-image: url('<?php echo esc_url($hero_background['url']); ?>');" <?php endif; ?>>

        <div class="hero__wrapper container">
            <div class="center"><?php echo ($hero_title); ?></div>

            <?php if (!empty($hero_link_text)): ?>
                <a href="#feedback" class="button"><?php echo esc_html($hero_link_text); ?></a>
            <?php endif; ?>

        </div>
    </section>
<?php endif; ?>