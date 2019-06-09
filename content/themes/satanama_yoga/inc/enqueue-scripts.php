<?php 

// Configuration des scripts et styles

function satanama_enqueue_scripts() {
    wp_enqueue_style(
        'satanama-style',
        get_theme_file_uri( 'public/css/style.css' ),
        [],
        SATANAMA_YOGA_THEME_VERSION 
    );

    wp_enqueue_script(
        'satanama-script',
        get_theme_file_uri( 'public/js/app.js' ),
        [],
        SATANAMA_YOGA_THEME_VERSION, 
        true

    );
}

add_action( 'wp_enqueue_scripts', 'satanama_enqueue_scripts' );