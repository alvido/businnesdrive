<?php
$survey_title = get_field('survey_title');
if (!empty($survey_title)): ?>
    <section class="survey" id="survey">
        <div class="container">
            <div class="dark">
                <h2><?php echo esc_html($survey_title); ?></h2>
                <p><?php echo esc_html(get_field('survey_text')); ?></p>
                <button class="button" id="openQuiz">
                    <?php echo esc_html(get_field('survey_button')); ?>
                </button>
            </div>
        </div>
    </section>
<?php endif; ?>