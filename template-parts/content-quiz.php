<?php
$quiz_shortcode = get_field('quiz_shortcode'); // Получаем форму

if (!empty($quiz_shortcode)): ?>

    <section class="quiz">
        <div class="quiz__wrapper">
            <header class="quiz__header">
                <button class="min prevBtn" type="button">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_181_637)">
                            <path d="M5 12H19" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M5 12L11 18" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M5 12L11 6" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_181_637">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
                <h4><?php $quiz_title = get_field('quiz_title');
                echo (esc_html($quiz_title)); ?></h4>
                <button class="min close"><span>close</span></button>
            </header>
            <div class="quiz__content">
                <div class="quiz__progress">
                    <p class="decor-left"><?php
                    $step_text = get_field('step_text');
                    echo (esc_html($step_text)); ?> <span
                            id="currentStep">1</span> з <span id="totalSteps"></span>
                    </p>
                    <span class="quiz__progress-bar" id="progressBar"></span>
                </div>
                <div class="quiz__name">
                    <span id="stepNumber">1</span>
                    <h5 id="stepTitle"><?php echo (esc_html()); ?></h5>
                </div>

                <div class="quiz__form">
                    <?php echo do_shortcode(esc_html($quiz_shortcode)); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>