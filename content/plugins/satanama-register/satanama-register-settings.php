<?php
/*
Plugin Name: Satanama Register Plugin
Author: Satanama Team 
Author URI: https://github.com/O-clock-Orion/Ecole-de-Yoga
Version: 1.0.0
Description: Le plugin permettant la réservation de cours (via un CPT)

@package satanama_register_settings
*/

if ( ! defined( 'WPINC' ) ) {
    http_response_code( 404 );
    exit;
}
// Création de la page cours dans le menu du BO
add_action( 'admin_menu', 'satanama_register_page' );

function satanama_register_page() {
    add_menu_page( 'Register Page', 'Cours Page', 'manage_options', 'register-page', 'register_page' );
}


function register_page() {

    global $wpdb;

    ?>
    <h1>Hello</h1>
      
    <form action="" method="post">
        <p>Titre du cours <input type="text" name="title" /></p>
        <p>Description <input type="text" name="description" /></p>
        <p>Date <input type="date" name="date" /></p>
        <p><input type="submit" value="Ajouter"></p>
        
    </form>
    <?php 

        if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['date']) ) {

            $title = $_POST['title'];
            $type = $_POST['description'];
            $date = $_POST['date'];

            $wpdb->insert(
                'wp_event',
                array(
                    'title' => $title,
                    'description' => $type,
                    'date' => $date,
                )
            );
        }

        
    ?>


  <?php 
    

    if(!empty($_POST['Action']) && $_POST['Action'] == 'Supprimer' && !empty($_POST['id']) ) {
        $delete_event = $wpdb->delete( 'wp_event', array( 'id' => $_POST['id'] ) );
        // print_r($delete_event);
    
    }

    $myevents = $wpdb->get_results( "SELECT * FROM wp_event" );
    // print_r($myevents);
    $mydates = $wpdb->get_results( "SELECT date FROM wp_event" );
    // print_r($mydates);

    foreach ($myevents as $event ) {
        // print_r($event->date);
             
        ?> 
        <form action="" method="post">
        <h1> Le cours de : <?= $event->title ?></h1>
        <h2>La description du cours : <?= $event->description ?></h2>
        <h2> La date du cours : <?= date('d m Y', strtotime($event->date)); ?></h2>
        <p><input type="submit" value="Supprimer"></p>
        <input type="hidden" value="Supprimer" name="Action">
        <input type="hidden" value="<?= $event->id ?>" name="id">
        </form>
        </br> 

        <?php 
                   
        } 
    }