<?php


function mon_theme_register_pattern_categories()
{

    register_block_pattern_category('main-theme-commun', [
        'label' => __('Communs', 'main-theme'),
    ]);

    // HERO //

    register_block_pattern_category('main-theme-accueil', [
        'label' => __('Accueil', 'main-theme'),
    ]);

    // SERViCES //

    register_block_pattern_category('main-theme-services', [
        'label' => __('Services', 'main-theme'),
    ]);

    // PORTFOLiO //

    register_block_pattern_category('main-theme-portfolio', [
        'label' => __('Portfolio', 'main-theme'),
    ]);

    // ACTUALiTES //

    register_block_pattern_category('main-theme-actualites', [
        'label' => __('Actualités', 'main-theme'),
    ]);

    // CONTACT //

    register_block_pattern_category('main-theme-contact', [
        'label' => __('Contact', 'main-theme'),
    ]);
}


add_action('init', 'mon_theme_register_pattern_categories');

function mon_theme_register_patterns()
{

    register_block_pattern(
        'main-theme/service-card',
        array(
            'title'       => __('Service Card', 'main-theme'),
            'content'     => file_get_contents(get_template_directory() . '/patterns/accueil/service-card.php'),
            'categories'  => array('main-theme-accueil'),
        )
    );

    register_block_pattern(
        'main-theme/hero',
        array(
            'title'       => __('Hero', 'main-theme'),
            'content'     => file_get_contents(get_template_directory() . '/patterns/accueil/hero.php'),
            'categories'  => array('main-theme-accueil'),
        )
    );

    register_block_pattern(
        'main-theme/call-to-action',
        array(
            'title'       => __('Call to action', 'main-theme'),
            'content'     => file_get_contents(get_template_directory() . '/patterns/commun/call-to-action.php'),
            'categories'  => array('main-theme-commun')
        )
    );

    register_block_pattern(
        'main-theme/buttons',
        array(
            'title'       => __('Buttons', 'main-theme'),
            'categories'  => array('main-theme-commun'),
            'content'     => file_get_contents(get_template_directory() . '/patterns/commun/buttons.php'),
        )
    );

    register_block_pattern(
        'main-theme/banner',
        array(
            'title'       => __('Banner', 'main-theme'),
            'categories'  => array('main-theme-commun'),
            'content'     => file_get_contents(get_template_directory() . '/patterns/commun/banner.php'),
        )
    );

    register_block_pattern(
        'main-theme/testimonials',
        array(
            'title'       => __('Testimonials', 'main-theme'),
            'categories'  => array('main-theme-accueil'),
            'content'     => file_get_contents(get_template_directory() . '/patterns/accueil/testimonials.php'),
        )
    );

    register_block_pattern(
        'main-theme/option-card',
        array(
            'title'       => __('Option Card', 'main-theme-services'),
            'categories'  => array('main-theme-services'),
            'content'     => file_get_contents(get_template_directory() . '/patterns/services/option-card.php'),
        )
    );

    register_block_pattern(
        'main-theme/steps',
        array(
            'title'       => __('Steps', 'main-theme'),
            'categories'  => array('main-theme-services'),
            'content'     => file_get_contents(get_template_directory() . '/patterns/services/steps.php'),
        )
    );

    register_block_pattern(
        'main-theme/commitment',
        array(
            'title'       => __('Modalités', 'main-theme'),
            'content'     => file_get_contents(get_template_directory() . '/patterns/services/commitment.php'),
            'categories'  => array('main-theme-services'),
        )
    );

    register_block_pattern(
        'main-theme/why-us',
        array(
            'title'       => __('Notre Mission', 'main-theme'),
            'categories'  => array('main-theme-accueil'),
            'content'     => file_get_contents(get_template_directory() . '/patterns/accueil/why-us.php'),
        )
    );

    register_block_pattern(
        'main-theme/project-card',
        array(
            'title'       => __('Project card', 'main-theme'),
            'categories'  => array('main-theme-portfolio'),
            'content'     => file_get_contents(get_template_directory() . '/patterns/portfolio/project-card.php'),
        )
    );

    register_block_pattern(
        'main-theme/article',
        array(
            'title'       => __('Carte article', 'main-theme'),
            'categories'  => array('main-theme-actualites'),
            'content'     => file_get_contents(get_template_directory() . '/patterns/actualites/article.php'),
        )
    );
}
add_action('init', 'mon_theme_register_patterns');
