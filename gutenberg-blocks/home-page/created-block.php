<?php if (have_rows('created_list')): ?>
    <section class="created">
        <div class="container">
            <h2 class="center"><?php the_field('created_title'); ?></h2>
            <p class="center decor-bottom"><?php the_field('created_text'); ?></p>
            <ul class="created__list">
                <?php while (have_rows('created_list')):
                    the_row(); ?>
                    <li>
                        <?php
                        $image = get_sub_field('image');
                        if (!empty($image)): ?>
                          <span><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"></span>
                        <?php endif; ?>
                        <h4 class="center"><?php the_sub_field('title'); ?></h4>
                        <p class="center"><?php the_sub_field('text'); ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>