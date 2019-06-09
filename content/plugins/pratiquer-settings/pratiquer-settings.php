<?php
/*
Plugin Name: Pratiquer CPT
Author: Satanama Team 
Author URI: https://github.com/O-clock-Orion/Ecole-de-Yoga
Version: 1.0.0
Description: Le plugin de configuration du site Sataname Yoga qui crée les CPT (Custom Post Type)
*/

if ( ! defined( 'WPINC' ) ) {
    http_response_code( 404 );
    exit;
}

$plugin_dir_path = plugin_dir_path( __FILE__ );

require $plugin_dir_path . 'inc/class-post-type-pratiquer.php';

$post_type_pratiquer = new Post_Type_Pratiquer;

register_activation_hook(
    __FILE__,
    function() use ( $post_type_pratiquer ) {
        $post_type_pratiquer->register_post_type();

        flush_rewrite_rules( false );
    }
);

register_deactivation_hook(
    __FILE__,
    'pratiquer_settings_deactivation'
);

function pratiquer_settings_deactivation() {
    unregister_post_type( Post_Type_Pratiquer::NAME );

    flush_rewrite_rules( false );
}