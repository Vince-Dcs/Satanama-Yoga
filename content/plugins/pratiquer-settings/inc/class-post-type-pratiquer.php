<?php

class Post_Type_Pratiquer
{
    const NAME = 'pratiquer';
    
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
                    'name'               => 'Pratiquer',
                    'singular_name'      => 'Pratiquer',
                    'add_new_item'       => 'Ajouter une nouvelle pratique',
                    'edit_item'          => 'Editer la pratique',
                    'new_item'           => 'Nouvelle pratique',
                    'view_item'          => 'Voir la pratique',
                    'view_items'         => 'Voir les pratiques',
                    'search_items'       => 'Rechercher des pratiques',
                    'not_found'          => 'Aucune pratique trouvée',
                    'not_found_in_trash' => 'Aucune pratique trouvée dans la corbeille',
                    'all_items'          => 'Toutes les pratiques',
                    'archives'           => 'Archives des pratiques'
                ],
                'public'        => true,
                'hierarchical'  => false,
                'menu_position' => 4,
                'menu_icon'     => 'dashicons-lightbulb',
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
