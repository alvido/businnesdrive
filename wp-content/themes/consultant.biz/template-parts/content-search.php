<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package businnesdrive
 */

?>


<?php

$thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
<li style="<?php echo $thumbnail_url ? 'background-image: url(' . esc_url($thumbnail_url) . ');' : ''; ?>">
	<div class="top">
		<h4><?php echo esc_html(get_post_type() == 'news' ? pll__('Новина') : pll__('Стаття')); ?>
		</h4>
		<div class="info">
			<span class="date"><?php the_modified_date('F j Y'); ?></span>
			<span class="time"><?php the_modified_date('H:i'); ?></span>
		</div>
	</div>
	<div class="bottom">
		<a class="blog__link" href="<?php the_permalink(); ?>">
			<h5><?php the_title(); ?></h5>
		</a>
		<div><?php the_excerpt(); ?></div>
	</div>
</li>