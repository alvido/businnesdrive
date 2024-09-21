<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<main id="primary" class="main site-main">
    <section class="about about-top">
        <div class="container">
            <div class="wrapper">
                <h1 class="center"><?php the_title(); ?></h1>
                <div class="center decor-bottom"><?php the_excerpt(); ?></div>
            </div>
            <?php $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
            <img src="<?php echo esc_url($thumbnail_url ? $thumbnail_url : ''); ?>" alt="">
        </div>
    </section>
    <?php the_content(); ?>
    <?php get_template_part('template-parts/content', 'feedback'); ?>

</main><!-- #main -->

<?php get_footer(); ?>