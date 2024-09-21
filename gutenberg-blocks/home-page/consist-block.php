<?php if (have_rows('consist_list')): ?>
    <section class="consist">
        <div class="container">
            <h2 class="center"><?php the_field('consist_title'); ?></h2>
            <p class="center decor-bottom"><?php the_field('consist_text'); ?></p>
            <div class="swiper" id="consistSwiper">
                <ul class="swiper-wrapper">
                    <?php while (have_rows('consist_list')):
                        the_row(); ?>
                        <li class="swiper-slide">
                            <?php
                            $image = get_sub_field('image');
                            if (!empty($image)): ?>
                                <div class="slide-img">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                </div>
                            <?php endif; ?>
                            <div class="slide-content">
                                <h4><?php the_sub_field('title'); ?></h4>
                                <p><?php the_sub_field('text'); ?></p>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <div class="swiper__navigation">
                    <div class="swiper-pagination"></div>
                    <div class="swiper__navigation-buttons">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>