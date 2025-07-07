<?php

function main_theme_setup() {
    add_theme_support( 'block-patterns' );
}
add_action( 'after_setup_theme', 'main_theme_setup' );
