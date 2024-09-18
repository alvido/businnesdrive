<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package businnesdrive
 */

?>

<h1 class="decor-left page-title"><?php esc_html_e('Nothing Found', 'businnesdrive'); ?></h1>

<div class="page-content">
	<?php
	if (is_home() && current_user_can('publish_posts')):

		printf(
			'<p>' . wp_kses(
				/* translators: 1: link to WP admin new post page. */
				__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'businnesdrive'),
				array(
					'a' => array(
						'href' => array(),
					),
				)
			) . '</p>',
			esc_url(admin_url('post-new.php'))
		);

	elseif (is_search()):
		?>

		<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'businnesdrive'); ?>
		</p>
		<!-- Объединенная форма поиска для постов и новостей -->
		<form class="search__form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
			<input class="search__input" type="text" name="s" id="s" placeholder="Пошук" />
			<button class="search__btn" type="submit">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_181_1032)">
						<path
							d="M3 10C3 10.9193 3.18106 11.8295 3.53284 12.6788C3.88463 13.5281 4.40024 14.2997 5.05025 14.9497C5.70026 15.5998 6.47194 16.1154 7.32122 16.4672C8.1705 16.8189 9.08075 17 10 17C10.9193 17 11.8295 16.8189 12.6788 16.4672C13.5281 16.1154 14.2997 15.5998 14.9497 14.9497C15.5998 14.2997 16.1154 13.5281 16.4672 12.6788C16.8189 11.8295 17 10.9193 17 10C17 9.08075 16.8189 8.1705 16.4672 7.32122C16.1154 6.47194 15.5998 5.70026 14.9497 5.05025C14.2997 4.40024 13.5281 3.88463 12.6788 3.53284C11.8295 3.18106 10.9193 3 10 3C9.08075 3 8.1705 3.18106 7.32122 3.53284C6.47194 3.88463 5.70026 4.40024 5.05025 5.05025C4.40024 5.70026 3.88463 6.47194 3.53284 7.32122C3.18106 8.1705 3 9.08075 3 10Z"
							stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M21 21L15 15" stroke="black" stroke-width="1.5" stroke-linecap="round"
							stroke-linejoin="round" />
					</g>
					<defs>
						<clipPath id="clip0_181_1032">
							<rect width="24" height="24" fill="white" />
						</clipPath>
					</defs>
				</svg>
			</button>
		</form>
		<?php

	else:
		?>

		<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'businnesdrive'); ?>
		</p>
		<!-- Объединенная форма поиска для постов и новостей -->
		<form class="search__form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
			<input class="search__input" type="text" name="s" id="s" placeholder="Пошук" />
			<button class="search__btn" type="submit">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_181_1032)">
						<path
							d="M3 10C3 10.9193 3.18106 11.8295 3.53284 12.6788C3.88463 13.5281 4.40024 14.2997 5.05025 14.9497C5.70026 15.5998 6.47194 16.1154 7.32122 16.4672C8.1705 16.8189 9.08075 17 10 17C10.9193 17 11.8295 16.8189 12.6788 16.4672C13.5281 16.1154 14.2997 15.5998 14.9497 14.9497C15.5998 14.2997 16.1154 13.5281 16.4672 12.6788C16.8189 11.8295 17 10.9193 17 10C17 9.08075 16.8189 8.1705 16.4672 7.32122C16.1154 6.47194 15.5998 5.70026 14.9497 5.05025C14.2997 4.40024 13.5281 3.88463 12.6788 3.53284C11.8295 3.18106 10.9193 3 10 3C9.08075 3 8.1705 3.18106 7.32122 3.53284C6.47194 3.88463 5.70026 4.40024 5.05025 5.05025C4.40024 5.70026 3.88463 6.47194 3.53284 7.32122C3.18106 8.1705 3 9.08075 3 10Z"
							stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M21 21L15 15" stroke="black" stroke-width="1.5" stroke-linecap="round"
							stroke-linejoin="round" />
					</g>
					<defs>
						<clipPath id="clip0_181_1032">
							<rect width="24" height="24" fill="white" />
						</clipPath>
					</defs>
				</svg>
			</button>
		</form>
		<?php

	endif;
	?>
</div><!-- .page-content -->