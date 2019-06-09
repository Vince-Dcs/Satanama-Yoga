<?php
/*
Plugin Name: Ecole Plugin
Author: Satanama Team 
Author URI: https://github.com/O-clock-Orion/Ecole-de-Yoga
Version: 1.0.0
Description: Le plugin permettant d'ajouter des Professeurs au sein de l'école (via un CPT)
*/

if ( ! defined( 'WPINC' ) ) {
    http_response_code( 404 );
    exit;
}

$plugin_dir_path = plugin_dir_path( __FILE__ );

require $plugin_dir_path . 'inc/class-post-type-ecole.php';

$post_type_ecole = new Post_Type_Ecole;

register_activation_hook(
    __FILE__,
    function() use ( $post_type_ecole ) {
        $post_type_ecole->register_post_type();

        flush_rewrite_rules( false );
    }
);

register_deactivation_hook(
    __FILE__,
    'ecole_settings_deactivation'
);

function ecole_settings_deactivation() {
    unregister_post_type( Post_Type_Ecole::NAME );

    flush_rewrite_rules( false );
}