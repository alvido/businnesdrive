<?php
// Получаем код текущего языка
$current_language = pll_current_language();

echo $current_language;

// Определяем слуг для страницы опций на основе текущего языка
switch ($current_language) {
	case 'uk':
		$options_page_slug = 'feedback-settings-ua';
		break;
	case 'en':
		$options_page_slug = 'feedback-settings-en';
		break;
	default:
		$options_page_slug = 'feedback-settings'; // Значение по умолчанию
}

// Получаем поля ACF для текущего языка
$form_title = get_field('form_title', 'option');
$form_shortcode = get_field('form_shortcode', 'option');
$feedback_image = get_field('feedback_image', 'option');
$feedback_title = get_field('feedback_title', 'option');
$feedback_text = get_field('feedback_text', 'option');

// Отображаем секцию с данными
?>
<section class="feedback" id="feedback">
	<div class="column">
		<h3><?php echo esc_html($form_title); ?></h3>
		<div class="feedback__form">
			<?php
			if (!empty($form_shortcode)): ?>
				<?php echo do_shortcode($form_shortcode); ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="column dark">
		<?php if (!empty($feedback_image)): ?>
			<img src="<?php echo esc_url($feedback_image['url']); ?>" alt="<?php echo esc_attr($feedback_image['alt']); ?>">
		<?php endif; ?>

		<?php if (!empty($feedback_title)): ?>
			<h3><?php echo esc_html($feedback_title); ?></h3>
		<?php endif; ?>

		<?php if (!empty($feedback_text)): ?>
			<p><?php echo esc_html($feedback_text); ?></p>
		<?php endif; ?>

		<div class="header__social social">
			<?php get_template_part('template-parts/content', 'social'); ?>
		</div>
	</div>
</section>