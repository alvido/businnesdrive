<section class="partner">
    <div class="container">
        <h2 class="visually-hidden"><?php the_field( 'title' ); ?></h2>
        <div class="wrapper">
            <p class="title">
                <?php the_field( 'title' ); ?>
            </p>

            <?php the_field( 'description' ); ?>
        </div>

        <?php if (get_field('blockquote_desc')): ?>
            <blockquote>
                <?php the_field( 'blockquote_desc' ); ?>
            </blockquote>
        <?php endif; ?>

    </div>
</section>