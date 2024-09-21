<section class="feedback" id="feedback">
	<div class="column">
		<?php if (get_field('form_title', 'option')): ?>
			<h3><?php echo esc_html(get_field('form_title', 'option')); ?></h3>
		<?php endif; ?>
		<div class="feedback__form">
			<?php
			if (get_field('form_shortcode', 'option')): ?>
				<?php echo do_shortcode(get_field('form_shortcode', 'option')); ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="column dark">
		<?php
		$feedback_image = get_field('feedback_image', 'option');
		if (!empty($feedback_image)): ?>
			<img src="<?php echo esc_url($feedback_image['url']); ?>" alt="<?php echo esc_attr($feedback_image['alt']); ?>">
		<?php endif; ?>
		<?php if (get_field('feedback_title', 'option')): ?>
			<h3><?php echo esc_html(get_field('feedback_title', 'option')); ?></h3>
		<?php endif; ?>

		<?php if (get_field('feedback_text', 'option')): ?>
			<p><?php echo esc_html(get_field('feedback_text', 'option')); ?></p>
		<?php endif; ?>

		<div class="header__social social">
			<?php get_template_part('template-parts/content', 'social'); ?>
		</div>
	</div>
</section>