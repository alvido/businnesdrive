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
$post_type = isset($_GET['post_type']) ? sanitize_text_field($_GET['post_type']) : 'post';

// Устанавливаем параметры для запроса
$args = array(
	'post_type' => $post_type,
	's' => get_search_query(),
);

// Создаем новый запрос
$query = new WP_Query($args);
?>

<main id="primary" class="main site-main">

	<?php if ($query->have_posts()): ?>

		<header class="page-header">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf(esc_html__('Search Results for: %s', 'businnesdrive'), '<span>' . get_search_query() . '</span>');
				?>
			</h1>
		</header><!-- .page-header -->

		<?php
		/* Start the Loop */
		while ($query->have_posts()):
			$query->the_post();

			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part('template-parts/content', 'search');

		endwhile;

		the_posts_navigation();

	else:

		get_template_part('template-parts/content', 'none');

	endif;
	?>

</main><!-- #main -->

<?php
// Сброс запросов после использования пользовательского WP_Query
wp_reset_postdata();
?>


<?php
get_sidebar();
get_footer();
