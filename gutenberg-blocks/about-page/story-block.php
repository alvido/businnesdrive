<section class="story">
    <div class="container">
        <h2 class="visually-hidden"><?php the_field( 'story_title' ); ?></h2>
        <div class="wrapper">
                    <span class="title">
                        <?php the_field( 'story_title' ); ?>
                    </span>
            <p>
                <?php the_field( 'description' ); ?>
            </p>
        </div>
    </div>
</section>