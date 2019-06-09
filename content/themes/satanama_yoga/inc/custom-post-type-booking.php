<?php 
/*
* On utilise une fonction pour créer notre custom post type 'Section Reservation'
*/

function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Cours', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Cour', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Cours'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les cours'),
		'view_item'           => __( 'Voir les cours'),
		'add_new_item'        => __( 'Ajouter un nouveau cours'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer le cours'),
		'update_item'         => __( 'Modifier le cours'),
		'search_items'        => __( 'Rechercher un cours'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Les Cours'),
		'description'         => __( 'Tous les cours'),
        'labels'              => $labels,
        'menu_icon'           => 'dashicons-calendar-alt',
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'cours'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "cours" et ses arguments
	register_post_type( 'cours', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );