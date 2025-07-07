<?php


function mon_theme_register_pattern_categories() {
    
    register_block_pattern_category('main-theme-headers', [
        'label' => __('Headers', 'main-theme'),
    ]);

    register_block_pattern_category('main-theme-services', [
        'label' => __('Services', 'main-theme'),
    ]);

        register_block_pattern_category('main-theme-hero', [
        'label' => __('Services', 'main-theme'),
    ]);
}
add_action('init', 'mon_theme_register_pattern_categories');

function mon_theme_register_patterns() {

    register_block_pattern(
        'main-theme/service-card', 
        array(
            'title'       => __( 'Service Card', 'main-theme' ),
            'description' => _x( 'Une carte service avec icône, titre, description et lien.', 'Block pattern description', 'main-theme' ),
            'content'     => file_get_contents( get_template_directory() . '/patterns/service-card.php' ),
            'categories'  => array( 'main-theme-services' ), 
        )
    );

    register_block_pattern(
        'main-theme/hero', 
        array(
            'title'       => __( 'Hero', 'main-theme' ),
            'content'     => file_get_contents( get_template_directory() . '/patterns/hero.php' ),
            'categories'  => array( 'main-theme-hero' ), 
        )
    );

    register_block_pattern(
        'main-theme/call-to-action', 
        array(
            'title'       => __( 'Call to action', 'main-theme' ),
            'content'     => file_get_contents( get_template_directory() . '/patterns/call-to-action.php' ),
        )
    );

    register_block_pattern(
        'main-theme/testimonials', 
        array(
            'title'       => __( 'Testimonials', 'main-theme' ),
            'content'     => file_get_contents( get_template_directory() . '/patterns/testimonials.php' ),
        )
    );

    register_block_pattern(
        'main-theme/option-card', 
        array(
            'title'       => __( 'Option Card', 'main-theme' ),
            'content'     => file_get_contents( get_template_directory() . '/patterns/option-card.php' ),
        )
    );

    register_block_pattern(
        'main-theme/media-and-cta', 
        array(
            'title'       => __( 'Media & Call To Action', 'main-theme' ),
            'content'     => file_get_contents( get_template_directory() . '/patterns/media-and-cta.php' ),
        )
    );

}
add_action( 'init', 'mon_theme_register_patterns' );
