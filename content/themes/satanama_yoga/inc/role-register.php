<?php 
// Création des droits utilisateurs customs

add_role( 'professeur', 'Professeur' , [
    'read' => true
]);

function register_role_cap() {
    add_role( 'professeur', 'Professeur' , [
        'read' => true
    ]);

    $role = get_role('professeur');

    // section equivalent en droit au : SA, Admin, Editeur, Auteur, Contributeur
    $role->add_cap ('delete_posts');
    $role->add_cap ('edit_posts');
    $role->add_cap ('delete_published_posts');
    $role->add_cap ('publish_posts');
    $role->add_cap ('create_product');
    $role->add_cap ('upload_files');
    $role->add_cap ('edit_published_posts');

    // section correspondante en droit aux : SA, Admin, Editeur
    $role->add_cap ('read_private_pages');
    $role->add_cap ('edit_private_pages');
    $role->add_cap ('delete_private_pages');
    $role->add_cap ('read_private_posts');
    $role->add_cap ('edit_private_posts');
    $role->add_cap ('delete_private_posts');
    $role->add_cap ('delete_others_posts');
    $role->add_cap ('delete_published_pages');
    $role->add_cap ('delete_others_pages');
    $role->add_cap ('delete_pages');
    $role->add_cap ('publish_pages');
    $role->add_cap ('edit_published_pages');
    $role->add_cap ('edit_others_pages');
    $role->add_cap ('edit_pages');
    $role->add_cap ('edit_others_posts');
    
    $role->add_cap ('manage_links');
    $role->add_cap ('manage_categories');
    $role->add_cap ('moderate_comments');
    

    // section permettant de créer des cours
    $role->add_cap ('update_plugins');
    $role->add_cap ('manage_options');
    $role->add_cap ('activate_plugins');


}

add_action( 'init', 'register_role_cap' );