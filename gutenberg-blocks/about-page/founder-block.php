<section class="founder">
    <div class="container">
        <p class="title"><?php the_field( 'founder_title' ); ?></p>
        <div class="wrapper">
            <div class="column">
                <?php the_field( 'founder_desc' ); ?>

                <?php $linkedin_link = get_field( 'linkedin_link' ); ?>
                <?php if ( $linkedin_link ) : ?>
                    <a class="button" href="<?php echo esc_url( $linkedin_link['url'] ); ?>" target="_blank"><?php echo esc_html( $linkedin_link['title'] ); ?></a>
                <?php endif; ?>
            </div>
            <blockquote class="blockquote--light">
                <?php the_field( 'founder_blockquote_text' ); ?>
            </blockquote>
        </div>
    </div>
</section>