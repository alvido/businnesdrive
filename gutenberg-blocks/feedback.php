<?php
$form_shortcode = get_field('form_shortcode'); // Получаем форму
$form_title = get_field('form_title');

if (!empty($form_shortcode)): ?>
    <section class="feedback" id="feedback">
        <div class="column">
            <h3><?php echo ($form_title); ?></h3>
            <div class="feedback__form">
                <?php echo do_shortcode(esc_html($form_shortcode)); ?>
            </div>
        </div>
        <div class="column dark">
            <?php
            $feedback_image = get_field('feedback_image');
            if (!empty($feedback_image)): ?>
                <img src="<?php echo esc_url($feedback_image['url']); ?>" alt="<?php echo esc_attr($feedback_image['alt']); ?>">
            <?php endif; ?>

            <?php $feedback_title = get_field('feedback_title');
            if (get_field($feedback_title)): ?>
                <h3><?php echo esc_html($feedback_title); ?></h3>
            <?php endif; ?>

            <?php $feedback_text = get_field('feedback_text');
            if ($feedback_text): ?>
                <p><?php echo esc_html($feedback_text); ?></p>
            <?php endif; ?>

            <div class="header__social social">
                <?php get_template_part('template-parts/content', 'social'); ?>
            </div>
        </div>
    </section>
<?php endif; ?>