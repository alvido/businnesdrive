<?php if (have_rows('advantages_list')): ?>
    <section class="advantages">
        <div class="container">
            <h2 class="center decor-bottom"><?php the_field('advantages_title'); ?></h2>
            <ul class="advantages__list">
                <?php while (have_rows('advantages_list')):
                    the_row(); ?>
                    <li>
                        <h5><?php the_sub_field('title'); ?></h5>
                        <p><?php the_sub_field('text'); ?></p>
                    </li>
                <?php endwhile; ?>

            </ul>
        </div>
    </section>
<?php endif; ?>