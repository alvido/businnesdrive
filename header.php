<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package businnesdrive
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text"
			href="#primary"><?php esc_html_e('Skip to content', 'businnesdrive'); ?></a>

		<header id="masthead" class="header site-header <?php if (is_front_page())
			echo 'home'; ?>">
			<div class="header__branding site-branding container">
				<?php if (get_theme_mod('header_logo')): ?>
					<a class="header__logo logo" href="<?php echo esc_url(home_url('/')); ?>"
						title="<?php echo esc_attr(get_bloginfo('name')); ?>">

						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/header/logo-min.svg"
								media="(max-width: 560px)">
							<img class="logo__image" src="<?php echo esc_url(get_theme_mod('header_logo')); ?>"
								alt="<?php bloginfo('name'); ?>">
						</picture>

					</a>
				<?php else:
					if (function_exists('the_custom_logo')):
						$custom_logo_id = get_theme_mod('custom_logo');
						$logo = wp_get_attachment_image_src($custom_logo_id, 'full');

						if ($logo): ?>
							<a class="header__logo logo" href="<?php echo esc_url(home_url('/')); ?>"
								title="<?php echo esc_attr(get_bloginfo('name')); ?>">
								<picture>
									<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/header/logo-min.svg"
										media="(max-width: 560px)">
									<img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
								</picture>
							</a>
						<?php endif;
					endif;
				endif; ?>

				<div class="header__social social">
					<?php get_template_part('template-parts/content', 'social'); ?>
				</div><!-- .header__social -->
				<button class="burger" id="burgerButton" aria-controls="primary-menu" aria-expanded="false">
					<span><?php esc_html_e('Primary Menu', 'businnesdrive'); ?></span>
				</button>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="header__navigation navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'header-menu',
						'menu_id' => 'primary-menu',
						'container' => 'ul',
						'menu_class' => 'navigation__list',
					)
				);
				?>

				<ul id="language-menu" class="lang">
					<?php
					// Получаем языки через функцию pll_the_languages()
					$languages = pll_the_languages(array(
						'raw' => 1 // Вернёт массив языков
					));

					// Проходим по каждому языку
					foreach ($languages as $lang) {
						// Проверяем, является ли текущий язык активным
						$class = $lang['current_lang'] ? 'current-lang' : '';

						echo '<li class="lang-item ' . esc_attr($class) . '">';
						// Выводим ссылку с слагом языка
						echo '<a href="' . esc_url($lang['url']) . '">' . esc_html($lang['slug']) . '</a>';
						echo '</li>';
					}
					?>
				</ul>


			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->