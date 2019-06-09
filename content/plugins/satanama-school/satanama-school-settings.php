<?php
/*
Plugin Name: Satanama School Plugin
Author: Satanama Team 
Author URI: https://github.com/O-clock-Orion/Ecole-de-Yoga
Version: 1.0.0
Description: Le plugin permettant la réservation de cours (via un CPT)
*/

if ( ! defined( 'WPINC' ) ) {
    http_response_code( 404 );
    exit;
}

$plugin_dir_path = plugin_dir_path( __FILE__ );

require $plugin_dir_path . 'inc/class-post-type-booking.php';

$post_type_booking = new Post_Type_Booking;

register_activation_hook(
    __FILE__,
    function() use ( $post_type_booking ) {
        $post_type_booking->register_post_type();

        flush_rewrite_rules( false );
    }
);

register_deactivation_hook(
    __FILE__,
    'booking_settings_deactivation'
);

function booking_settings_deactivation() {
    unregister_post_type( Post_Type_Booking::NAME );

    flush_rewrite_rules( false );
}