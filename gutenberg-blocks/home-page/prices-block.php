<?php
$prices_title = get_field('prices_title');
if (!empty($prices_title)): ?>
    <section class="prices dark">
        <div class="container">
            <h2 class="center decor-bottom"><?php echo esc_html($prices_title); ?></h2>
            <p class="center"><?php echo esc_html(get_field('prices_text')); ?></p>
            <ul class="prices__list">
                <li>
                    <?php
                    $prices_item_image = get_field('prices_item_image');
                    if (!empty($prices_item_image)): ?>
                        <span class="prices__decor"><img src="<?php echo esc_url($prices_item_image['url']); ?>"
                                alt="<?php echo esc_attr($prices_item_image['alt']); ?>"></span>
                    <?php endif; ?>
                    <h6 class="center"><?php echo esc_html(get_field('prices_item_title')); ?></h6>
                    <span class="center prices__details"><?php echo esc_html(get_field('prices_item_text')); ?></span>
                    <ul class="prices__details-list">
                        <?php while (have_rows('prices_list')):
                            the_row(); ?>
                            <li><?php the_sub_field('text'); ?></li>
                        <?php endwhile; ?>
                    </ul>
                    <a class="button" href="#feedback"><?php echo esc_html(get_field('prices_button')); ?></a>
                </li>
            </ul>
        </div>
    </section>
<?php endif; ?>