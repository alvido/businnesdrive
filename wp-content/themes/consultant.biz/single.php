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
					<div class="content">
						<h4 class="decor-left">Команда</h4>
						<p>
							Існує багато варіацій уривків з Lorem Ipsum, але більшість з них зазнала певних змін
							на
							кшталт жартівливих вставок або змішування слів, які навіть не виглядають
							правдоподібно.
							Якщо ви збираєтесь використовувати Lorem Ipsum, ви маєте упевнитись в тому, що
							всередині
							тексту не приховано нічого, що могло б викликати у читача конфуз.
						</p>
						<p>
							Існує багато варіацій уривків з Lorem Ipsum, але більшість з них зазнала певних змін
							на
							кшталт жартівливих вставок або змішування слів, які навіть не виглядають
							правдоподібно.
							Якщо ви збираєтесь використовувати Lorem Ipsum, ви маєте упевнитись в тому, що
							всередині
							тексту не приховано нічого, що могло б викликати у читача конфуз.
						</p>
					</div>

					<div class="author">
						<div class="author__desc">
							<?php if (have_posts()):
								while (have_posts()):
									the_post(); ?>
									<?php
									// Получаем ID автора поста
									$author_id = get_the_author_meta('ID');
									// Получаем URL фото автора
									$author_photo_url = get_avatar_url($author_id, array('size' => 100));
									// Получаем имя автора
									$author_name = get_the_author_meta('display_name', $author_id);
									// Получаем описание автора
									$author_description = get_the_author_meta('description', $author_id);
									?>
								<?php endwhile; endif; ?>
							<img src="<?php echo esc_url($author_photo_url); ?>"
								alt="<?php echo esc_attr($author_name); ?>">
							<div class="autor__info">
								<p class="author__name"><?php echo esc_html($author_name); ?></p>
								<p class="author__work"><?php echo esc_html($author_description); ?></p>
								<div class="social">
									<a href="" class="" target="_blank">
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
									<a href="" class="" target="_blank">
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
									<a href="" class="" target="_blank">
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
									<a href="" class="" target="_blank">
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
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="blog interested">
		<div class="container">
			<div class="interested__inner">
				<h2 class="decor-left">
					Блог
				</h2>
				<button class="button">Дивитись усі новини</button>
				<ul class="blog__list">
					<li
						style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog.jpg');">
						<div class="top">
							<h4>Новина</h4>
							<div class="info">
								<span class="date">31 липня 2024</span>
								<span class="time">16:30</span>
							</div>
						</div>
						<div class="bottom">
							<a class="blog__link" href="#">
								<h5>Назва статті 1</h5>
							</a>
							<p>
								Більшість відомих генераторів Lorem Ipsum в Мережі генерують текст шляхом
								повторення
								наперед заданих послідовностей Lorem Ipsum. Принципова відмінність цього
								генератора
								робить його першим справжнім генератором Lorem Ipsum.
							</p>
						</div>
					</li>
					<li
						style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog.jpg');">
						<div class="top">
							<h4>Новина</h4>
							<div class="info">
								<span class="date">31 липня 2024</span>
								<span class="time">16:30</span>
							</div>
						</div>
						<div class="bottom">
							<a class="blog__link" href="#">
								<h5>Назва статті 1</h5>
							</a>
							<p>
								Більшість відомих генераторів Lorem Ipsum в Мережі генерують текст шляхом
								повторення
								наперед заданих послідовностей Lorem Ipsum. Принципова відмінність цього
								генератора
								робить його першим справжнім генератором Lorem Ipsum.
							</p>
						</div>
					</li>
					<li
						style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog.jpg');">
						<div class="top">
							<h4>Новина</h4>
							<div class="info">
								<span class="date">31 липня 2024</span>
								<span class="time">16:30</span>
							</div>
						</div>
						<div class="bottom">
							<a class="blog__link" href="#">
								<h5>Назва статті 1</h5>
							</a>
							<p>
								Більшість відомих генераторів Lorem Ipsum в Мережі генерують текст шляхом
								повторення
								наперед заданих послідовностей Lorem Ipsum. Принципова відмінність цього
								генератора
								робить його першим справжнім генератором Lorem Ipsum.
							</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="feedback">
		<div class="column">
			<h3>Зворотній зв'язок</h3>
			<form action="#" class="feedback__form">
				<label for="name">
					<input type="text" id="name" name="name" required placeholder="ім’я">
					<p>Ваше ім’я</p>
				</label>
				<label for="company">
					<input type="text" id="company" name="company" required placeholder="назва компанії">
					<p> назва компанії</p>
				</label>
				<label for="email">
					<input type="email" id="email" name="email" required placeholder="email">
					<p>email</p>
				</label>
				<label for="phone">
					<input type="tel" id="phone" name="phone" required placeholder="+380 00 000 00 00">
					<p>телефон</p>
				</label>
				<button class="open" id="openTextArea" type="button">
					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_181_1649)">
							<path d="M5.33325 6H10.6666" stroke="#1397D6" stroke-width="1.5" stroke-linecap="round"
								stroke-linejoin="round" />
							<path d="M5.33325 8.66675H9.33325" stroke="#1397D6" stroke-width="1.5"
								stroke-linecap="round" stroke-linejoin="round" />
							<path
								d="M12 2.66675C12.5304 2.66675 13.0391 2.87746 13.4142 3.25253C13.7893 3.62761 14 4.13631 14 4.66675V10.0001C14 10.5305 13.7893 11.0392 13.4142 11.4143C13.0391 11.7894 12.5304 12.0001 12 12.0001H8.66667L5.33333 14.0001V12.0001H4C3.46957 12.0001 2.96086 11.7894 2.58579 11.4143C2.21071 11.0392 2 10.5305 2 10.0001V4.66675C2 4.13631 2.21071 3.62761 2.58579 3.25253C2.96086 2.87746 3.46957 2.66675 4 2.66675H12Z"
								stroke="#1397D6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						</g>
						<defs>
							<clipPath id="clip0_181_1649">
								<rect width="16" height="16" fill="white" />
							</clipPath>
						</defs>
					</svg>
					Додати коментар
				</button>
				<label for="comments" id="hiddenArea">
					<textarea id="comments" name="comments" rows="4" placeholder="Коментар"></textarea>
					<p>Коментар</p>
				</label>
				<button class="button" type="submit">Надіслати</button>
			</form>
		</div>
		<div class="column dark">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/stars.svg" alt="">
			<h3>Це робить текст схожим на оповідний</h3>
			<p>Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює композицію
				сторінки. Сенс використання Lorem Ipsum.</p>
			<div class="social">
				<a href="" class="" target="_blank">
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_1_635)">
							<path
								d="M20 13.3335L14.6667 18.6668L22.6667 26.6668L28 5.3335L4 14.6668L9.33333 17.3335L12 25.3335L16 20.0002"
								stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						</g>
						<defs>
							<clipPath id="clip0_1_635">
								<rect width="32" height="32" fill="white" />
							</clipPath>
						</defs>
					</svg>
				</a>
				<a href="" class="" target="_blank">
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_1_638)">
							<path
								d="M5.33325 10.6668C5.33325 9.25234 5.89515 7.89579 6.89535 6.89559C7.89554 5.8954 9.2521 5.3335 10.6666 5.3335H21.3333C22.7477 5.3335 24.1043 5.8954 25.1045 6.89559C26.1047 7.89579 26.6666 9.25234 26.6666 10.6668V21.3335C26.6666 22.748 26.1047 24.1045 25.1045 25.1047C24.1043 26.1049 22.7477 26.6668 21.3333 26.6668H10.6666C9.2521 26.6668 7.89554 26.1049 6.89535 25.1047C5.89515 24.1045 5.33325 22.748 5.33325 21.3335V10.6668Z"
								stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path
								d="M12 16C12 17.0609 12.4214 18.0783 13.1716 18.8284C13.9217 19.5786 14.9391 20 16 20C17.0609 20 18.0783 19.5786 18.8284 18.8284C19.5786 18.0783 20 17.0609 20 16C20 14.9391 19.5786 13.9217 18.8284 13.1716C18.0783 12.4214 17.0609 12 16 12C14.9391 12 13.9217 12.4214 13.1716 13.1716C12.4214 13.9217 12 14.9391 12 16Z"
								stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M22 10V10.0133" stroke="white" stroke-width="1.5" stroke-linecap="round"
								stroke-linejoin="round" />
						</g>
						<defs>
							<clipPath id="clip0_1_638">
								<rect width="32" height="32" fill="white" />
							</clipPath>
						</defs>
					</svg>
				</a>
				<a href="" class="" target="_blank">
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_1_643)">
							<path
								d="M9.33325 13.3333V18.6667H13.3333V28H18.6666V18.6667H22.6666L23.9999 13.3333H18.6666V10.6667C18.6666 10.313 18.8071 9.97391 19.0571 9.72386C19.3072 9.47381 19.6463 9.33333 19.9999 9.33333H23.9999V4H19.9999C18.2318 4 16.5361 4.70238 15.2859 5.95262C14.0356 7.20286 13.3333 8.89856 13.3333 10.6667V13.3333H9.33325Z"
								stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						</g>
						<defs>
							<clipPath id="clip0_1_643">
								<rect width="32" height="32" fill="white" />
							</clipPath>
						</defs>
					</svg>
				</a>
				<a href="" class="" target="_blank">
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_1_646)">
							<path
								d="M2.66675 10.6668C2.66675 9.25234 3.22865 7.89579 4.22885 6.89559C5.22904 5.8954 6.58559 5.3335 8.00008 5.3335H24.0001C25.4146 5.3335 26.7711 5.8954 27.7713 6.89559C28.7715 7.89579 29.3334 9.25234 29.3334 10.6668V21.3335C29.3334 22.748 28.7715 24.1045 27.7713 25.1047C26.7711 26.1049 25.4146 26.6668 24.0001 26.6668H8.00008C6.58559 26.6668 5.22904 26.1049 4.22885 25.1047C3.22865 24.1045 2.66675 22.748 2.66675 21.3335V10.6668Z"
								stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M13.3333 12L19.9999 16L13.3333 20V12Z" stroke="white" stroke-width="1.5"
								stroke-linecap="round" stroke-linejoin="round" />
						</g>
						<defs>
							<clipPath id="clip0_1_646">
								<rect width="32" height="32" fill="white" />
							</clipPath>
						</defs>
					</svg>
				</a>
			</div>
		</div>
	</section>
</main><!-- #main -->

<?php
get_footer();
