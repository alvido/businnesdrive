<section class="advisory">
    <div class="container">
        <span class="title"><?php the_field( 'title' ); ?></span>
        <h2>
            <?php the_field( 'description' ); ?>
        </h2>
        <ul class="advisory__list">
            <?php if ( have_rows( 'investors_block' ) ) : ?>
                <?php while ( have_rows( 'investors_block' ) ) : the_row(); ?>
                    <li>
                        <h4 class="large"><?php the_sub_field( 'title' ); ?></h4>
                        <p class="small">
                            <?php the_sub_field( 'desc' ); ?>
                        </p>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
</section>
