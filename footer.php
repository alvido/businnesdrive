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

				<p>
					Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює
					композицію
					сторінки. Сенс використання Lorem Ipsum.
				</p>
			</div>
			<div class="column info">
				<nav class="footer__nav">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-footer',
							'menu_id' => 'footer-menu',
							'container' => 'ul',
							'menu_class' => 'footer__nav-list',
						)
					);
					?>
				</nav>
				<div class="footer__social social">
					<?php
					global $dorobalo_theme_options;
					$dorobalo_theme_options = dorobalo_theme_options();
					?>
					<?php if (!empty($dorobalo_theme_options['telegram'])): ?>
						<a href="<?php echo $dorobalo_theme_options['telegram'] ?>" class="telegram" target="_blank">
							<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_1_635)">
									<path
										d="M20 13.3335L14.6667 18.6668L22.6667 26.6668L28 5.3335L4 14.6668L9.33333 17.3335L12 25.3335L16 20.0002"
										stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</g>
								<defs>
									<clipPath id="clip0_1_635">
										<rect width="32" height="32" fill="white" />
									</clipPath>
								</defs>
							</svg>
							Telegram
						</a>
					<?php endif; ?>
					<?php if (!empty($dorobalo_theme_options['facebook'])): ?>
						<a href="<?php echo $dorobalo_theme_options['facebook'] ?>" class="facebook" target="_blank">
							<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_1_643)">
									<path
										d="M9.33325 13.3333V18.6667H13.3333V28H18.6666V18.6667H22.6666L23.9999 13.3333H18.6666V10.6667C18.6666 10.313 18.8071 9.97391 19.0571 9.72386C19.3072 9.47381 19.6463 9.33333 19.9999 9.33333H23.9999V4H19.9999C18.2318 4 16.5361 4.70238 15.2859 5.95262C14.0356 7.20286 13.3333 8.89856 13.3333 10.6667V13.3333H9.33325Z"
										stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</g>
								<defs>
									<clipPath id="clip0_1_643">
										<rect width="32" height="32" fill="white" />
									</clipPath>
								</defs>
							</svg>
							Facebook
						</a>
					<?php endif; ?>
					<?php if (!empty($dorobalo_theme_options['instagram'])): ?>
						<a href="<?php echo $dorobalo_theme_options['instagram'] ?>" class="instagram" target="_blank">
							<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_1_638)">
									<path
										d="M5.33325 10.6668C5.33325 9.25234 5.89515 7.89579 6.89535 6.89559C7.89554 5.8954 9.2521 5.3335 10.6666 5.3335H21.3333C22.7477 5.3335 24.1043 5.8954 25.1045 6.89559C26.1047 7.89579 26.6666 9.25234 26.6666 10.6668V21.3335C26.6666 22.748 26.1047 24.1045 25.1045 25.1047C24.1043 26.1049 22.7477 26.6668 21.3333 26.6668H10.6666C9.2521 26.6668 7.89554 26.1049 6.89535 25.1047C5.89515 24.1045 5.33325 22.748 5.33325 21.3335V10.6668Z"
										stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path
										d="M12 16C12 17.0609 12.4214 18.0783 13.1716 18.8284C13.9217 19.5786 14.9391 20 16 20C17.0609 20 18.0783 19.5786 18.8284 18.8284C19.5786 18.0783 20 17.0609 20 16C20 14.9391 19.5786 13.9217 18.8284 13.1716C18.0783 12.4214 17.0609 12 16 12C14.9391 12 13.9217 12.4214 13.1716 13.1716C12.4214 13.9217 12 14.9391 12 16Z"
										stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M22 10V10.0133" stroke="white" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round" />
								</g>
								<defs>
									<clipPath id="clip0_1_638">
										<rect width="32" height="32" fill="white" />
									</clipPath>
								</defs>
							</svg>
							Instagram
						</a>
					<?php endif; ?>
					<?php if (!empty($dorobalo_theme_options['youtube'])): ?>
						<a href="<?php echo $dorobalo_theme_options['youtube'] ?>" class="youtube" target="_blank">
							<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_1_646)">
									<path
										d="M2.66675 10.6668C2.66675 9.25234 3.22865 7.89579 4.22885 6.89559C5.22904 5.8954 6.58559 5.3335 8.00008 5.3335H24.0001C25.4146 5.3335 26.7711 5.8954 27.7713 6.89559C28.7715 7.89579 29.3334 9.25234 29.3334 10.6668V21.3335C29.3334 22.748 28.7715 24.1045 27.7713 25.1047C26.7711 26.1049 25.4146 26.6668 24.0001 26.6668H8.00008C6.58559 26.6668 5.22904 26.1049 4.22885 25.1047C3.22865 24.1045 2.66675 22.748 2.66675 21.3335V10.6668Z"
										stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M13.3333 12L19.9999 16L13.3333 20V12Z" stroke="white" stroke-width="1.5"
										stroke-linecap="round" stroke-linejoin="round" />
								</g>
								<defs>
									<clipPath id="clip0_1_646">
										<rect width="32" height="32" fill="white" />
									</clipPath>
								</defs>
							</svg>
							YouTube
						</a>
					<?php endif; ?>
				</div><!-- .social -->
			</div>
		</div>
		<div class="footer__bottom">
			<p>
				Політика конфіденційності:
				<a href="#" target="_blank" rel="noopener noreferrer">Юридичний документ</a>
			</p>
			<p>
				Умови використання:
				<a href="#" target="_blank" rel="noopener noreferrer">Юридичний документ</a>
			</p>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>