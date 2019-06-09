<?php 
/*
* On utilise une fonction pour créer notre custom post type 'Section Pratiquer'
*/

function postures_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Les Postures', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Posture', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Posture'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les postures'),
		'view_item'           => __( 'Voir les postures'),
		'add_new_item'        => __( 'Ajouter une nouvelle posture'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la posture'),
		'update_item'         => __( 'Modifier la posture'),
		'search_items'        => __( 'Rechercher une posture'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Les Postures'),
		'description'         => __( 'Toutes les postures'),
        'labels'              => $labels,
        'menu_icon'           => 'dashicons-lightbulb',
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'les-postures'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "postures" et ses arguments
	register_post_type( 'postures', $args );

}

add_action( 'init', 'postures_custom_post_type', 0 );