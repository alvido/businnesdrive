<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package businnesdrive
 */

get_header();
?>

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
	<section class="about__information">
		<div class="about__information-inner container">
			<?php the_content(); ?>
		</div>
	</section>

	<?php get_template_part('template-parts/content', 'news'); ?>
    <?php get_template_part('template-parts/content', 'feedback'); ?>

</main><!-- #main -->

<?php
get_footer();
