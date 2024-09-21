<section class="value">
    <div class="container">
        <h2 class="visually-hidden"><?php the_field( 'values_title' ); ?></h2>
        <p class="title"><?php the_field( 'values_title' ); ?></p>
    </div>
    <div class="about__banner"
        <?php if ( get_field( 'background_image' ) ) : ?>
            <?php
            $bg_image = get_field('background_image');
            $bg_image_url = wp_get_attachment_image_url($bg_image, 'full');
            ?>
            style="background-image: url(<?php echo esc_url($bg_image_url); ?>);"
        <?php endif; ?>
    >
        <ul class="about__banner-list">
            <?php if ( have_rows( 'banner_items' ) ) : ?>
                <?php while ( have_rows( 'banner_items' ) ) : the_row(); ?>
                    <li class="about__banner-item">
                        <div class="about__banner-content">
                            <?php $icon = get_sub_field( 'icon' ); ?>
                            <?php $size = 'full'; ?>
                            <?php if ( $icon ) : ?>
                                <?php echo wp_get_attachment_image( $icon, $size ); ?>
                            <?php endif; ?>

                            <h3><?php the_sub_field( 'title' ); ?></h3>
                            <p>
                                <?php the_sub_field( 'desc' ); ?>
                            </p>
                        </div>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>

        </ul>
    </div>
</section>
