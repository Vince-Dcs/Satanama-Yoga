<?php

class Post_Type_Ecole
{
    const NAME = 'ecole';
    
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
                    'name'               => 'Ecoles',
                    'singular_name'      => 'Ecole',
                    'add_new_item'       => 'Ajouter un nouveau professeur',
                    'edit_item'          => 'Editer le professeur',
                    'new_item'           => 'Nouveau professeur',
                    'view_item'          => 'Voir le professeur',
                    'view_items'         => 'Voir les professeurs',
                    'search_items'       => 'Rechercher des professeurs',
                    'not_found'          => 'Aucun professeur trouvé',
                    'not_found_in_trash' => 'Aucun professeur trouvé dans la corbeille',
                    'all_items'          => 'Tous les professeurs',
                    'archives'           => 'Archives des professeurs'
                ],
                'public'        => true,
                'hierarchical'  => false,
                'menu_position' => 4,
                'menu_icon'     => 'dashicons-buddicons-activity',
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
