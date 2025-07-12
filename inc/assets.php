<?php

function mon_theme_scripts()
{

    // Police Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', array(), null);

    wp_enqueue_style('mon-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mon_theme_scripts');
