<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package businnesdrive
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="error-404 not-found coinsist">
		<div class="container">
			<h1 class="decor-left page-title">
				<?php esc_html_e('Oops! That page can&rsquo;t be found.', 'businnesdrive'); ?>
			</h1>

			<form class="search__form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
				<input class="search__input" type="text" name="s" id="s" placeholder="<?php echo pll__('Пошук') ?>" />
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

		</div>
	</section>
	<?php get_template_part('template-parts/content', 'news'); ?>
	<?php get_template_part('template-parts/content', 'feedback'); ?>
</main><!-- #main -->

<?php
get_footer();
