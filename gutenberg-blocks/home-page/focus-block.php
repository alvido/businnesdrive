<section class="focus">
    <div class="container">
        <p class="title"><?php the_field( 'title' ); ?></p>
        <h2><?php the_field( 'models_title' ); ?></h2>

        <div class="wrapper">
            <div class="column">

                <?php if ( have_rows( 'models_items' ) ) : ?>
                    <ul>
                        <?php while ( have_rows( 'models_items' ) ) : the_row(); ?>
                            <li> <?php the_sub_field( 'item_title' ); ?> </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

                <blockquote class="blockquote--light">
                    <?php the_field( 'blockquote_desc' ); ?>
                </blockquote>
            </div>
            <div class="column">
                <?php if ( have_rows( 'services_list' ) ) : ?>
                    <ul class="services__list">
                        <?php while ( have_rows( 'services_list' ) ) : the_row(); ?>
                            <li>
                                <h3><?php the_sub_field( 'title' ); ?></h3>
                                <p><?php the_sub_field( 'desc' ); ?></p>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

                <?php if ( have_rows( 'icons_list' ) ) : ?>
                    <ul class="icons__list">
                        <?php while ( have_rows( 'icons_list' ) ) : the_row(); ?>
                            <?php $icon = get_sub_field( 'icon' ); ?>
                            <?php $size = 'full'; ?>

                            <li>
                                <?php if ( $icon ) : ?>
                                    <?php echo wp_get_attachment_image( $icon, $size ); ?>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

            </div>
        </div>

        <h2><?php the_field( 'criteria_title' ); ?></h2>

        <?php if ( have_rows( 'criteria_list' ) ) : ?>
            <ul class="investment__list">
                <?php while ( have_rows( 'criteria_list' ) ) : the_row(); ?>
                    <li>
                        <h4><?php the_sub_field( 'title' ); ?></h4>
                        <p><?php the_sub_field( 'desc' ); ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

    </div>
</section>
