<?php if (have_rows('about_company')): ?>
    <section class="about__information">
        <div class="about__information-inner container">
            <?php while (have_rows('about_company')):
                the_row(); ?>
                <div class="wrapper">
                    <div class="column">
                        <h2 class="decor-left"><?php the_sub_field('title'); ?></h2>
                        <?php the_sub_field('content'); ?>
                        <?php
                        $button = get_sub_field('button');
                        if (!empty($button)): ?>
                            <a href="#feedback" class="button"><?php the_sub_field('button'); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="column">
                        <?php
                        $image = get_sub_field('image');
                        if (!empty($image)): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>