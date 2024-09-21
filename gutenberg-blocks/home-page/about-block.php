<?php
$about_title = get_field('about_title');
if (!empty($about_title)): ?>
    <section class="about dark home">
        <div class="container">
            <div class="wrapper">
                <h2 class="decor-left"><?php echo esc_html($about_title); ?></h2>
                <div class="info">
                    <p><?php echo esc_html(get_field('about_text')); ?></p>
                    <a href="#feedback" class="button"><?php echo esc_html(get_field('about_link')); ?></a>
                </div>
            </div>
            <?php
            $about_image = get_field('about_image');
            if (!empty($about_image)): ?>
                <div class="slide-img">
                    <img src="<?php echo esc_url($about_image['url']); ?>" alt="<?php echo esc_attr($about_image['alt']); ?>">
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
