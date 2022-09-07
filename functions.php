<?php
// Ajoute le logo
add_theme_support( 'custom-logo', array(
    // 'height' => 480,
    // 'width'  => 720,
) );

// Ajouter les images en avant
add_theme_support( 'post-thumbnails' );


// Ajouter les images de catégorie (NE FONCTIONNE PAS)
	// add_theme_support('category-thumbnails');


// Création des emplacements de menus :
if(function_exists('register_nav_menus')){
    register_nav_menus(
        array(
            'principal' => 'Menu principal'
        )
    );
}


// Création des emplacements pour widgets
if (function_exists('register_sidebar')){
    // barre de recherche header
    register_sidebar(
        array(
            'id' => 'searchbar',
            'name' => 'Barre de recherche',
            'description' => "Emplacement de la barre de recherche dans l'entête",
            'before_widget' => '',
            'after_widget' => "",
            'before_title' => '',
            'after_title' => ''
        )
    );

    // icônes réseaux sociaux footer
    register_sidebar(
        array(
            'id' => 'social',
            'name' => 'Icônes des réseaux sociaux',
            'description' => "Emplacement des icônes des réseaux sociaux",
            'before_widget' => '',
            'after_widget' => "",
            'before_title' => '',
            'after_title' => ''
        )
    );
}

// Pagination
function your_themes_pagination(){
    global $wp_query; 
    echo paginate_links();}


// Custom post type Voyage
function wpm_custom_post_type() {
	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Voyages', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Voyage', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Voyage'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les voyages'),
		'view_item'           => __( 'Voir les voyages'),
		'add_new_item'        => __( 'Ajouter un nouveau voyage'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer le voyage'),
		'update_item'         => __( 'Modifier le voyage'),
		'search_items'        => __( 'Rechercher un voyage'),
		'not_found'           => __( 'Non trouvé'),
		'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	$args = array(
		'label'               => __( 'Voyage'),
		'description'         => __( 'Tous sur les voyages'),
		'labels'              => $labels,
        // Ajoute les catégories des articles à mes voyages
        'taxonomies'  => array( 'category', 'post-tag' ),
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'thumbnail', 'custom-fields'),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => false,
		'rewrite'			  => array( 'slug' => 'voyages'),
        'menu_icon'   => 'dashicons-tickets-alt'
	);
	// On enregistre notre custom post type qu'on nomme ici "voyage" et ses arguments
	register_post_type( 'voyage', $args );
}

add_action( 'init', 'wpm_custom_post_type', 0 );


// Pour que les Voyages s'affiche avec les articles quand je clique sur la catégorie :
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if(is_category() || is_tag()) {
    $post_type = get_query_var('post_type');
	if($post_type)
	    $post_type = $post_type;
	else
	    $post_type = array('nav_menu_item', 'post','voyage');
    $query->set('post_type',$post_type);
	return $query;
    }
}


// Mes scripts personnalisés :
function yulbaba_scripts(){
// script JS de la navigation
wp_enqueue_script( 'bpc_togglemenu', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20160909', true );

}
add_action('wp_enqueue_scripts', 'yulbaba_scripts');

