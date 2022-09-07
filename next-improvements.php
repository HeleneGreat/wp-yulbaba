<!-- 


mc.lorin@gmail.com

A FAIRE :
OK aligner slogan et menu
OK enlever bordure recherche
OK bug page mentions legales
OK rajouter prix safari Katmai + rando
OK search form lien englobe image
OK bouton commentaire surlignement
OK bouton contact envoyer bouge apres clic
OK lien réseaux sociaux dans un nouvel onglet









FACULTATIF / IDEES :
- ajouter category thumbnails sans passer par ACF (mais pour ça il faut désinstaller ACF)
- supprimer destination.php et regrouper la page Destinations dans category.php (cf 'attempt-category.php')


// Ajout des couleurs du thème à la palette :
function mytheme_setup_theme_supported_features() {

	add_theme_support( 'editor-color-palette',
		array(
			array( 'name' => 'categorie', 'slug'  => 'category', 'color' => '#f0e1d5' ),
			array( 'name' => 'rouge', 'slug'  => 'red', 'color' => '#ec4e3d' ),
            array( 'name' => 'bouton', 'slug'  => 'button', 'color' => '#e2bd9f' ),
			array( 'name' => 'piedpage', 'slug'  => 'footer', 'color' => '#bcaa9b' )			
		)
	);
    add_theme_support( 'disable-custom-colors' );
}
add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );







 -->

