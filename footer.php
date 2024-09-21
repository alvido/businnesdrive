<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package businnesdrive
 */

?>

<footer id="colophon" class="footer site-footer">
    <div class="container site-info">
        <div class="wrapper">
            <div class="column">
                <?php if (get_theme_mod('footer_logo')): ?>
                    <a class="footer__logo logo" href="<?php echo esc_url(home_url('/')); ?>"
                        title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                        <img class="logo__image" src="<?php echo esc_url(get_theme_mod('footer_logo')); ?>"
                            alt="<?php bloginfo('name'); ?>">
                    </a>
                <?php else:
                    if (function_exists('the_custom_logo')):
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                        if ($logo): ?>
                            <a class="footer__logo logo" href="<?php echo esc_url(home_url('/')); ?>"
                                title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                                <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                            </a>
                        <?php endif;
                    endif;
                endif; ?>

                <div class="widget">
                    <?php dynamic_sidebar('footer-1'); ?>
                </div>
            </div>
            <div class="column info">
                <nav class="footer__nav">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'menu_id' => 'footer-menu',
                            'container' => 'ul',
                            'menu_class' => 'footer__nav-list',
                        )
                    );
                    ?>
                </nav>
                <div class="footer__social social">
                    <?php get_template_part('template-parts/content', 'social'); ?>
                </div><!-- .social -->
            </div>
        </div>

        <div class="footer__bottom">
            <p>
                <?php pll_e('Політика конфіденційності:'); ?>
                <a href="<?php echo esc_url(get_permalink(pll_get_post(3))); ?>" target="_blank"
                    rel="noopener noreferrer">
                    <?php pll_e('Юридичний документ'); ?>
                </a>
            </p>
            <p>
                <?php pll_e('Умови використання:'); ?>
                <a href="<?php echo esc_url(get_permalink(pll_get_post(51))); ?>" target="_blank"
                    rel="noopener noreferrer">
                    <?php pll_e('Юридичний документ'); ?>
                </a>
            </p>
        </div>

    </div><!-- .site-info -->
</footer><!-- #colophon -->

<!-- <button class="button button-chat" id="liveChat">
    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_1_651)">
            <path
                d="M24 5.3335C25.0609 5.3335 26.0783 5.75492 26.8284 6.50507C27.5786 7.25521 28 8.27263 28 9.3335V20.0002C28 21.061 27.5786 22.0784 26.8284 22.8286C26.0783 23.5787 25.0609 24.0002 24 24.0002H17.3333L10.6667 28.0002V24.0002H8C6.93913 24.0002 5.92172 23.5787 5.17157 22.8286C4.42143 22.0784 4 21.061 4 20.0002V9.3335C4 8.27263 4.42143 7.25521 5.17157 6.50507C5.92172 5.75492 6.93913 5.3335 8 5.3335H24Z"
                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M12.6666 12H12.68" stroke="white" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M19.3334 12H19.3467" stroke="white" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
            <path
                d="M12.6666 17.3335C13.1011 17.777 13.6198 18.1293 14.1921 18.3698C14.7645 18.6103 15.3791 18.7342 16 18.7342C16.6208 18.7342 17.2354 18.6103 17.8078 18.3698C18.3802 18.1293 18.8988 17.777 19.3333 17.3335"
                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </g>
        <defs>
            <clipPath id="clip0_1_651">
                <rect width="32" height="32" fill="white" />
            </clipPath>
        </defs>
    </svg>
</button> -->

</div><!-- #page -->
<?php wp_footer(); ?>
</body>

</html>