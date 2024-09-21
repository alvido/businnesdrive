<section class="hero"
        <?php if ( get_field( 'background_image' ) ) : ?>
            style="background-image: url(<?php the_field( 'background_image' ); ?>);"
        <?php endif ?>
>
    <div class="container">
        <h1><?php the_field( 'hero_title' ); ?></h1>
    </div>
</section>