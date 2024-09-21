<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package businnesdrive
 */

get_header();
?>

<main id="primary" class="main site-main">

	<section class="single">
		<div class="single__top">
			<div class="container">
				<span class="subtitle">
					<?php
					echo pll__('Опубліковано') . ' ' . get_the_date('j F Y');
					?>
				</span>

				<h1 class="center"><?php the_title(); ?></h1>
				<div class="center"><?php the_excerpt(); ?></div>

				<ul class="categories__list">
					<?php
					// Выводим категории поста
					$categories = get_the_category();
					if (!empty($categories)):
						foreach ($categories as $category): ?>
							<li>
								<a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
									<?php echo esc_html($category->name); ?>
								</a>
							</li>
						<?php endforeach;
					else:
						echo '<li>' . pll__('Без категорії') . '</li>';
					endif;
					?>
				</ul>
				<?php $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
				<img src="<?php echo esc_url($thumbnail_url ? $thumbnail_url : ''); ?>" alt="">
			</div>
		</div>
		<div class="articles">
			<div class="container">
				<article>
					<?php the_content(); ?>
				</article>
				<div class="articles__bottom">
					<?php $article_bottom = get_field('article_bottom', $post_id); ?>

					<?php if (!empty($article_bottom['title'])): ?>
						<div class="content">

							<h4 class="decor-left"><?php echo $article_bottom['title'] ?></h4>
							<?php if (!empty($article_bottom['text'])): ?>
								<p><?php echo $article_bottom['text'] ?></p>
							<?php endif; ?>
						</div>
					<?php endif; ?>
					<div class="author">

						<?php $author = get_field('author', $post_id); ?>
						<div class="author__desc">
							<?php if (!empty($author['photo'])): ?>
								<img src="<?php echo $author['photo'] ?>" alt="<?php echo $author['name'] ?>">
							<?php endif; ?>
							<div class="autor__info">
								<?php if (!empty($author['name'])): ?>
									<p class="author__name"><?php echo $author['name'] ?></p>
								<?php endif; ?>
								<?php if (!empty($author['profession'])): ?>
									<p class="author__work"><?php echo $author['profession'] ?></p>
								<?php endif; ?>
								<div class="social">
									<?php if (!empty($author['telegram'])): ?>
										<a href="<?php echo $author['telegram'] ?>" class="telegram" target="_blank">
											<svg width="32" height="32" viewBox="0 0 32 32" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1_635)">
													<path
														d="M20 13.3335L14.6667 18.6668L22.6667 26.6668L28 5.3335L4 14.6668L9.33333 17.3335L12 25.3335L16 20.0002"
														stroke="white" stroke-width="1.5" stroke-linecap="round"
														stroke-linejoin="round" />
												</g>
												<defs>
													<clipPath id="clip0_1_635">
														<rect width="32" height="32" fill="white" />
													</clipPath>
												</defs>
											</svg>
										</a>
									<?php endif; ?>
									<?php if (!empty($author['instagram'])): ?>
										<a href="<?php echo $author['instagram'] ?>" class="instagram" target="_blank">
											<svg width="32" height="32" viewBox="0 0 32 32" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1_638)">
													<path
														d="M5.33325 10.6668C5.33325 9.25234 5.89515 7.89579 6.89535 6.89559C7.89554 5.8954 9.2521 5.3335 10.6666 5.3335H21.3333C22.7477 5.3335 24.1043 5.8954 25.1045 6.89559C26.1047 7.89579 26.6666 9.25234 26.6666 10.6668V21.3335C26.6666 22.748 26.1047 24.1045 25.1045 25.1047C24.1043 26.1049 22.7477 26.6668 21.3333 26.6668H10.6666C9.2521 26.6668 7.89554 26.1049 6.89535 25.1047C5.89515 24.1045 5.33325 22.748 5.33325 21.3335V10.6668Z"
														stroke="white" stroke-width="1.5" stroke-linecap="round"
														stroke-linejoin="round" />
													<path
														d="M12 16C12 17.0609 12.4214 18.0783 13.1716 18.8284C13.9217 19.5786 14.9391 20 16 20C17.0609 20 18.0783 19.5786 18.8284 18.8284C19.5786 18.0783 20 17.0609 20 16C20 14.9391 19.5786 13.9217 18.8284 13.1716C18.0783 12.4214 17.0609 12 16 12C14.9391 12 13.9217 12.4214 13.1716 13.1716C12.4214 13.9217 12 14.9391 12 16Z"
														stroke="white" stroke-width="1.5" stroke-linecap="round"
														stroke-linejoin="round" />
													<path d="M22 10V10.0133" stroke="white" stroke-width="1.5"
														stroke-linecap="round" stroke-linejoin="round" />
												</g>
												<defs>
													<clipPath id="clip0_1_638">
														<rect width="32" height="32" fill="white" />
													</clipPath>
												</defs>
											</svg>
										</a>
									<?php endif; ?>
									<?php if (!empty($author['facebook'])): ?>
										<a href="<?php echo $author['facebook'] ?>" class="facebook" target="_blank">
											<svg width="32" height="32" viewBox="0 0 32 32" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1_643)">
													<path
														d="M9.33325 13.3333V18.6667H13.3333V28H18.6666V18.6667H22.6666L23.9999 13.3333H18.6666V10.6667C18.6666 10.313 18.8071 9.97391 19.0571 9.72386C19.3072 9.47381 19.6463 9.33333 19.9999 9.33333H23.9999V4H19.9999C18.2318 4 16.5361 4.70238 15.2859 5.95262C14.0356 7.20286 13.3333 8.89856 13.3333 10.6667V13.3333H9.33325Z"
														stroke="white" stroke-width="1.5" stroke-linecap="round"
														stroke-linejoin="round" />
												</g>
												<defs>
													<clipPath id="clip0_1_643">
														<rect width="32" height="32" fill="white" />
													</clipPath>
												</defs>
											</svg>
										</a>
									<?php endif; ?>
									<?php if (!empty($author['youtube'])): ?>
										<a href="<?php echo $author['youtube'] ?>" class="youtube" target="_blank">
											<svg width="32" height="32" viewBox="0 0 32 32" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1_646)">
													<path
														d="M2.66675 10.6668C2.66675 9.25234 3.22865 7.89579 4.22885 6.89559C5.22904 5.8954 6.58559 5.3335 8.00008 5.3335H24.0001C25.4146 5.3335 26.7711 5.8954 27.7713 6.89559C28.7715 7.89579 29.3334 9.25234 29.3334 10.6668V21.3335C29.3334 22.748 28.7715 24.1045 27.7713 25.1047C26.7711 26.1049 25.4146 26.6668 24.0001 26.6668H8.00008C6.58559 26.6668 5.22904 26.1049 4.22885 25.1047C3.22865 24.1045 2.66675 22.748 2.66675 21.3335V10.6668Z"
														stroke="white" stroke-width="1.5" stroke-linecap="round"
														stroke-linejoin="round" />
													<path d="M13.3333 12L19.9999 16L13.3333 20V12Z" stroke="white"
														stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
												</g>
												<defs>
													<clipPath id="clip0_1_646">
														<rect width="32" height="32" fill="white" />
													</clipPath>
												</defs>
											</svg>
										</a>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/content', 'news'); ?>
	<?php get_template_part('template-parts/content', 'feedback'); ?>

</main><!-- #main -->

<?php
get_footer();
