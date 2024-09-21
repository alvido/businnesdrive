<?php
$partners_title = get_field('partners_title');
if (!empty($partners_title)): ?>
    <section class="partners">
        <div class="container">
            <h2 class="center decor-bottom"><?php echo esc_html($partners_title); ?></h2>
            <ul class="partners__list">
                <?php while (have_rows('partners_list')):
                    the_row(); ?>
                    <li>
                        <?php
                        $image = get_sub_field('image');
                        if (!empty($image)): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>