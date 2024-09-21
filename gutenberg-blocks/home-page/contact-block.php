<section class="contact">
    <div class="container">
        <div class="wrapper">
            <div class="contact__info">
                <p class="title"><?php the_field( 'contact_title' ); ?></p>
                <h2><?php the_field( 'big_title' ); ?></h2>
                <div class="contact__links">
                    <?php if (get_field( 'email' )): ?>
                        <a href="mailto:<?php the_field( 'email' ); ?>"><?php the_field( 'email' ); ?></a>
                    <?php endif; ?>

                    <?php if (get_field( 'phone_number' )): ?>
                        <a href="tel:<?php the_field( 'phone_number' ); ?>"><?php the_field( 'phone_number' ); ?></a>
                    <?php endif; ?>
                </div>
            </div>

            <?php echo do_shortcode('[contact-form-7 id="1234" title="Contact form"]'); ?>

        </div>
    </div>
</section>