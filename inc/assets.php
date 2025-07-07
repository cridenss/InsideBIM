<?php

function mon_theme_scripts() {

    wp_enqueue_style('mon-style', get_stylesheet_uri());

    wp_enqueue_style(
            'pattern-style',
            get_template_directory_uri() . '/assets/css/patterns.css',
            array(),
            filemtime(get_template_directory() . '/assets/css/patterns.css')
        );
    
}
add_action('wp_enqueue_scripts', 'mon_theme_scripts');
