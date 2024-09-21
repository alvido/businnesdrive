<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package businnesdrive
 */

get_header();
?>

<?php
// Получаем тип поста из параметров запроса или задаем значение по умолчанию
// $post_type = isset($_GET['post_type']) ? sanitize_text_field($_GET['post_type']) : 'post';

// Устанавливаем параметры для запроса
$args = array(
	'post_type' => $post_type,
	's' => get_search_query(),
	'posts_per_page' => 6, // Количество постов на странице
	'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // Учет текущей страницы пагинации
);

// Создаем новый запрос
$query = new WP_Query($args);
?>

<main id="primary" class="main search site-main">
	<section class="blog interested">
		<div class="container">
			<?php if ($query->have_posts()): ?>
				<h1 class="decor-left">
					<?php
					printf(esc_html__(pll__('Пошук Результатів за:'), 'businnesdrive'));
					?>
					<?php
					printf('<span>' . get_search_query() . '</span>');
					?>
				</h1>
				<!-- Объединенная форма поиска для постов и новостей -->
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

				<ul class="blog__list">
					<?php
					/* Start the Loop */
					while ($query->have_posts()):
						$query->the_post();

						get_template_part('template-parts/content', 'search');

					endwhile;
					?>
				</ul>
				<!-- Пагинация -->

				<?php if ($query->max_num_pages > 1): ?>
					<div class="pagination">
						<!-- Предыдущая страница -->
						<button class="pagination__button">
							<?php
							// Получаем текущую страницу
							$paged = get_query_var('paged') ? get_query_var('paged') : 1;

							if ($paged > 1) {
								$prev_page = $paged - 1;
								$prev_link = get_pagenum_link($prev_page);
								echo '<a href="' . esc_url($prev_link) . '"><img src="' . get_stylesheet_directory_uri() . '/assets/images/icon/arrow-left.svg" alt="Previous" /></a>';
							} else {
								echo '<a href="#" class="disabled"><img src="' . get_stylesheet_directory_uri() . '/assets/images/icon/arrow-left.svg" alt="Previous" /></a>';
							}
							?>
							<span>Попередня</span>
						</button>
						<!-- Список страниц -->
						<?php
						$pagination_links = paginate_links(array(
							'total' => $query->max_num_pages,
							'current' => $paged,
							'type' => 'array',
							'show_all' => false,
							'end_size' => 1,
							'mid_size' => 2,
							'prev_next' => false,
						));

						if ($pagination_links) {
							echo '<ul class="pagination__list">';
							foreach ($pagination_links as $link) {
								echo '<li>' . $link . '</li>';
							}
							echo '</ul>';
						}
						?>
						<!-- Следующая страница -->
						<button class="pagination__button">
							<span>Наступна</span>
							<?php
							if ($paged < $query->max_num_pages) {
								$next_page = $paged + 1;
								$next_link = get_pagenum_link($next_page);
								echo '<a href="' . esc_url($next_link) . '"><img src="' . get_stylesheet_directory_uri() . '/assets/images/icon/arrow-right.svg" alt="Next" /></a>';
							} else {
								echo '<a href="#" class="disabled"><img src="' . get_stylesheet_directory_uri() . '/assets/images/icon/arrow-right.svg" alt="Next" /></a>';
							}
							?>
						</button>
					</div>
				<?php endif; ?>
				<?php
				the_posts_navigation(); // или the_posts_pagination();
				?>
				<?php
			else:
				get_template_part('template-parts/content', 'none');
			endif;
			?>
		</div>
	</section>

    <?php get_template_part('template-parts/content', 'feedback'); ?>
</main><!-- #main -->

<?php
// Сброс запросов после использования пользовательского WP_Query
wp_reset_postdata();
?>

<?php
// get_sidebar();
get_footer();
