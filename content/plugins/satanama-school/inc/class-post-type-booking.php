<?php

class Post_Type_Booking
{
    const NAME = 'reservation';
    
    function __construct() {
        add_action(
            'init',
            [ $this,'register_post_type' ]
        );
    }

    public function register_post_type() {

        register_post_type(
            self::NAME,
            [
                'labels' => [
                    'name'               => 'Réservation',
                    'singular_name'      => 'Réservation',
                    'add_new_item'       => 'Ajouter un nouveau cours',
                    'edit_item'          => 'Editer la cours',
                    'new_item'           => 'Nouveau cours',
                    'view_item'          => 'Voir le cours',
                    'view_items'         => 'Voir les cours',
                    'search_items'       => 'Rechercher des cours',
                    'not_found'          => 'Aucun cours trouvé',
                    'not_found_in_trash' => 'Aucun cours trouvé dans la corbeille',
                    'all_items'          => 'Tous les cours',
                    'archives'           => 'Archives des cours'
                ],
                'public'        => true,
                'hierarchical'  => false,
                'menu_position' => 4,
                'menu_icon'     => 'dashicons-calendar-alt',
                'supports'      => [
                    'title',
                    'editor',
                    'author',
                    'thumbnail',
                    'excerpt',
                    'custom-fields',
                    'page-attributes'
                ],
                'has_archive'  => true,
                'can_export'   => true,
                'show_in_rest' => true 
            ]
        );
    }
}
