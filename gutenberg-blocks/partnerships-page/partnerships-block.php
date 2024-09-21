<section class="partnerships">
    <div class="partnerships__inner container">
        <span class="title"><?php the_field( 'partnerships_title' ); ?></span>
        <h2><?php the_field( 'description' ); ?></h2>

        <?php if ( have_rows( 'current_partnerships_gallery' ) ) : ?>
            <?php while ( have_rows( 'current_partnerships_gallery' ) ) : the_row(); ?>
                <div class="wrapper">
                    <span><?php the_sub_field( 'title' ); ?></span>
                    <div class="swiper" id="current">
                        <ul class="swiper-wrapper">
                            <?php if ( have_rows( 'gallery_items' ) ) : ?>
                                <?php while ( have_rows( 'gallery_items' ) ) : the_row(); ?>
                                    <li class="swiper-slide">
                                        <?php $image = get_sub_field( 'image' ); ?>
                                        <?php $size = 'full'; ?>
                                        <?php if ( $image ) : ?>
                                            <?php echo wp_get_attachment_image( $image, $size ); ?>
                                        <?php endif; ?>                                        <div class="slide-content">
                                            <p class="small">
                                                <?php the_sub_field( 'desc' ); ?>
                                            </p>
                                            <div class="slide-date">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/time.svg" alt="time">
                                                <?php the_sub_field( 'date' ); ?>
                                            </div>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if ( have_rows( 'first_2_items_gallery' ) ) : ?>
            <?php while ( have_rows( 'first_2_items_gallery' ) ) : the_row(); ?>
                <div class="wrapper">
                    <span><?php the_sub_field( 'title' ); ?></span>
                    <div class="swiper" id="prior">
                        <ul class="swiper-wrapper">
                            <?php $gallery_images_ids = get_sub_field( 'gallery_images' ); ?>
                            <?php $size = '140_150'; ?>
                            <?php if ( $gallery_images_ids ) :  ?>
                                <?php foreach ( $gallery_images_ids as $gallery_images_id ): ?>
                                    <li class="swiper-slide">
                                        <?php echo wp_get_attachment_image( $gallery_images_id, $size ); ?>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if ( have_rows( 'second_2_items_gallery' ) ) : ?>
            <?php while ( have_rows( 'second_2_items_gallery' ) ) : the_row(); ?>
                <div class="wrapper">
                    <span><?php the_sub_field( 'title' ); ?></span>
                    <div class="swiper" id="strategic">
                        <ul class="swiper-wrapper">
                            <?php $gallery_images_ids = get_sub_field( 'gallery_images' ); ?>
                            <?php $size = '140_150'; ?>
                            <?php if ( $gallery_images_ids ) :  ?>
                                <?php foreach ( $gallery_images_ids as $gallery_images_id ): ?>
                                    <li class="swiper-slide">
                                        <?php echo wp_get_attachment_image( $gallery_images_id, $size ); ?>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <p class="small info"><?php the_field( 'bottom_desc' ); ?></p>
    </div>
</section>