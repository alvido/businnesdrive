<?php if (have_rows('about_team')): ?>
    <section class="team">
        <div class="container">
            <h2 class="center decor-bottom"><?php the_field( 'team_title' ); ?></h2>
            <div class="swiper" id="teamSwiper">
                <ul class="swiper-wrapper team__list">
                    <?php while (have_rows('about_team')):
                        the_row(); ?>
                        <li class="swiper-slide">
                            <?php
                            $image = get_sub_field('image');
                            if (!empty($image)): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                            <?php endif; ?>
                            <h5><?php the_sub_field('name'); ?></h5>
                            <span><?php the_sub_field('profession'); ?></span>
                            <p><?php the_sub_field('text'); ?></p>
                            <a href="mailto:<?php the_sub_field('mail'); ?>"><?php the_sub_field('mail'); ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="swiper__navigation swiper__navigation--team">
                <div class="swiper-pagination"></div>
                <div class="swiper__navigation-buttons">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>