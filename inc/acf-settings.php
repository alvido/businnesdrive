<?php

// Добавление опций для украинского языка
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Feedback Settings',
        'menu_title' => 'Feedback Settings',
        'menu_slug' => 'feedback-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
        // 'position' => 10, // Позиция в меню
        'icon_url' => 'dashicons-feedback', // Иконка Dashicons
        'lang' => 'uk' // Язык страницы, если используется Polylang
    ));
}


function custom_block_categories($categories, $post)
{

    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'gutenberg-blocks',
                'title' => __('Gutenberg Blocks', 'your-text-domain'),
                'icon' => 'admin-site',
            ),
        )
    );
}
add_filter('block_categories_all', 'custom_block_categories', 10, 2);


function custom_acf_init()
{

    if (function_exists('acf_register_block_type')) {

        acf_register_block_type(array(
            'name' => 'feedback',
            'title' => __('Feedback Block'),
            'description' => __('Feedback Block'),
            'render_template' => get_stylesheet_directory() . '/gutenberg-blocks/feedback.php',
            'category' => 'gutenberg-blocks',
            'icon' => 'admin-comments',
            'keywords' => array('custom', 'block'),
            'supports' => array(
                'align' => true,
                'align_text' => true,
                'align_content' => true,
            ),
            'mode' => 'edit',
        ));

        acf_register_block_type(array(
            'name' => 'home-hero',
            'title' => __('(Home) Hero Block'),
            'description' => __('(Home) Hero Block'),
            'render_template' => get_stylesheet_directory() . '/gutenberg-blocks/home-page/hero-block.php',
            'category' => 'gutenberg-blocks',
            'icon' => 'admin-comments',
            'keywords' => array('custom', 'block'),
            'supports' => array(
                'align' => true,
                'align_text' => true,
                'align_content' => true,
            ),
            'mode' => 'edit',
        ));

        acf_register_block_type(array(
            'name' => 'home-advantages',
            'title' => __('(Home) Advantages Block'),
            'description' => __('(Home) Advantages Block'),
            'render_template' => get_stylesheet_directory() . '/gutenberg-blocks/home-page/advantages-block.php',
            'category' => 'gutenberg-blocks',
            'icon' => 'admin-comments',
            'keywords' => array('custom', 'block'),
            'supports' => array(
                'align' => true,
                'align_text' => true,
                'align_content' => true,
            ),
            'mode' => 'edit',
        ));

        acf_register_block_type(array(
            'name' => 'home-created',
            'title' => __('(Home) Created Block'),
            'description' => __('(Home) Created Block'),
            'render_template' => get_stylesheet_directory() . '/gutenberg-blocks/home-page/created-block.php',
            'category' => 'gutenberg-blocks',
            'icon' => 'admin-comments',
            'keywords' => array('custom', 'block'),
            'supports' => array(
                'align' => true,
                'align_text' => true,
                'align_content' => true,
            ),
            'mode' => 'edit',
        ));

        acf_register_block_type(array(
            'name' => 'home-consist',
            'title' => __('(Home) Consist Block'),
            'description' => __('(Home) Consist Block'),
            'render_template' => get_stylesheet_directory() . '/gutenberg-blocks/home-page/consist-block.php',
            'category' => 'gutenberg-blocks',
            'icon' => 'admin-comments',
            'keywords' => array('custom', 'block'),
            'supports' => array(
                'align' => true,
                'align_text' => true,
                'align_content' => true,
            ),
            'mode' => 'edit',
        ));

        acf_register_block_type(array(
            'name' => 'home-about',
            'title' => __('(Home) About Block'),
            'description' => __('(Home) About Block'),
            'render_template' => get_stylesheet_directory() . '/gutenberg-blocks/home-page/about-block.php',
            'category' => 'gutenberg-blocks',
            'icon' => 'admin-comments',
            'keywords' => array('custom', 'block'),
            'supports' => array(
                'align' => true,
                'align_text' => true,
                'align_content' => true,
            ),
            'mode' => 'edit',
        ));

        acf_register_block_type(array(
            'name' => 'home-survey',
            'title' => __('(Home) Survey Block'),
            'description' => __('(Home) Survey Block'),
            'render_template' => get_stylesheet_directory() . '/gutenberg-blocks/home-page/survey-block.php',
            'category' => 'gutenberg-blocks',
            'icon' => 'admin-comments',
            'keywords' => array('custom', 'block'),
            'supports' => array(
                'align' => true,
                'align_text' => true,
                'align_content' => true,
            ),
            'mode' => 'edit',
        ));

        acf_register_block_type(array(
            'name' => 'home-prices',
            'title' => __('(Home) Prices Block'),
            'description' => __('(Home) Prices Block'),
            'render_template' => get_stylesheet_directory() . '/gutenberg-blocks/home-page/prices-block.php',
            'category' => 'gutenberg-blocks',
            'icon' => 'admin-comments',
            'keywords' => array('custom', 'block'),
            'supports' => array(
                'align' => true,
                'align_text' => true,
                'align_content' => true,
            ),
            'mode' => 'edit',
        ));

        acf_register_block_type(array(
            'name' => 'home-partners',
            'title' => __('(Home) Partners Block'),
            'description' => __('(Home) Partners Block'),
            'render_template' => get_stylesheet_directory() . '/gutenberg-blocks/home-page/partners-block.php',
            'category' => 'gutenberg-blocks',
            'icon' => 'admin-comments',
            'keywords' => array('custom', 'block'),
            'supports' => array(
                'align' => true,
                'align_text' => true,
                'align_content' => true,
            ),
            'mode' => 'edit',
        ));


        acf_register_block_type(array(
            'name' => 'about-company-light',
            'title' => __('(About) About Company Block'),
            'description' => __('(About) About Company Block'),
            'render_template' => get_stylesheet_directory() . '/gutenberg-blocks/about-page/about-company-light.php',
            'category' => 'gutenberg-blocks',
            'icon' => 'admin-comments',
            'keywords' => array('custom', 'block'),
            'supports' => array(
                'align' => true,
                'align_text' => true,
                'align_content' => true,
            ),
            'mode' => 'edit',
        ));

        acf_register_block_type(array(
            'name' => 'about-company-dark',
            'title' => __('(About) About Company Dark Block'),
            'description' => __('(About) About Company Dark Block'),
            'render_template' => get_stylesheet_directory() . '/gutenberg-blocks/about-page/about-company-dark.php',
            'category' => 'gutenberg-blocks',
            'icon' => 'admin-comments',
            'keywords' => array('custom', 'block'),
            'supports' => array(
                'align' => true,
                'align_text' => true,
                'align_content' => true,
            ),
            'mode' => 'edit',
        ));

        acf_register_block_type(array(
            'name' => 'about-team',
            'title' => __('(About) About Team Block'),
            'description' => __('(About) About Team Block'),
            'render_template' => get_stylesheet_directory() . '/gutenberg-blocks/about-page/about-team.php',
            'category' => 'gutenberg-blocks',
            'icon' => 'admin-comments',
            'keywords' => array('custom', 'block'),
            'supports' => array(
                'align' => true,
                'align_text' => true,
                'align_content' => true,
            ),
            'mode' => 'edit',
        ));



    }
}
add_action('acf/init', 'custom_acf_init');
