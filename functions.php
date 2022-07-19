<?php
/* 

Les HOOKS sont de sfonctions déclarées par le développeur de thème ou d'extensions. Ils permettent d'interagir avec le coeur de Wordpress 

    IL existe deux types de hooks =>

    Les actions : qui s'éxécute à des moments clés (on peut lancer notre propre fonctions pour faire des choses supplémentaires dans Wordpress)

    Les filtres : qui permettent d'intercepter une valeur afin de la modifier
    
Exemples :

Un développeur peut insérer une fonction qui calcule le nombre de mots d’un article au moment où WordPress l’enregistre, via une action ;
Une extension de SEO comme Yoast intercepte le Title de la page via un filtre afin d’en écrire une version plus adaptée pour le référencement naturel.

*/

// J'indique à wordpress qu'avant de générer le menu de l'admin je veux langer ma propre fonction. Cette fonction permets de retirer des éléments inutiles de l'admin wordpress afin de l'alléger. 
// Penser à toujours préfixées les fonctions pour eviter les noms de fponctions trop générique qui pourrait rentrer en conflit avec Wordpress
function promo122_remove_menu_pages() {
	remove_menu_page( 'tools.php' );
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'promo122_remove_menu_pages' );

// Déclarer 2 emplacements dans notre thème (un menu principal et un autre en pied de page)
register_nav_menus( array(
    // Le premier paramètre est le slug du menu le deuxième est le nom qui apparaitra dans l'administration Wordpress
	'main-left' => esc_html__('Menu left', 'bmb'),
	'main-right' => esc_html__('Menu right', 'bmb'),
	'mobile-menu' => esc_html__('Mobile', 'bmb'),
));

// On active la fonction d'image mise en avant 
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site (l'onglet)
add_theme_support('title-tag');

// Sécurité wordpress => Lors d'un mauvaise connection du mot de passe ou du login aucune informations n'est divulger ni l'indication du mot de passe ni celui du login erroné
add_filter('login_errors', function () {
    return 'error';
});

// Savoir si l'internaute est connecter ou non. Si ou on affiche le nom en haiut à droite du site
// if (is_user_logged_in()) :
//     $current_user = wp_get_current_user();
//     echo "Bonjour, " . $current_user->user_firstname;
// else :
//     echo "Bonjour, visiteur !";
// endif;




// Créer une fonction qui appelle notre css et js (hook)
function myThemeName_script() {
    // Déclarer le JS
	wp_enqueue_script( 
        'main_style', 
        get_template_directory_uri() . '/inc/js/app.js', 
        array(), 
        '1.0', 
        true
    );
    
    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style( 
        'main_style',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
}
// J'utilise un hook d'actions pour préciser quand est ce qu'il lancera l'action 
add_action( 'wp_enqueue_scripts', 'myThemeName_script' );
// Fonction faites par cédric
// function myThemeName_script()
// {
//     // je créer une file d'attente des fichiers css
//     wp_enqueue_style('main_style', get_theme_file_uri('style.css'));

// }
// add_action('wp_enqueue_scripts', 'myThemeName_script');



//  custom post type avec cedric
add_action('init', 'register_student_post_types');
function register_student_post_types(){
	$labels = array(
		'name' => 'Détenus',
		'all_items' => 'Tous les Détenus',
		'view_item' => 'Voir les Détenus',
		'singular_name' => 'Détenu',
		'add_new' => 'Ajouter un Détenu',
		'edit_item' => 'Modifier un Détenu',
		'manu_name' => 'Détenu',
	);
	$args = array(
		'labels'              => $labels,
		'public'              => true,
		// Il demande si le custom post sera utiliser comme une api ou pas
		'show_in_rest'   	  => true,
		'has_archive'         => false,
		'supports'            => array('title', 'editor', 'thumbnail'),
		'taxonomies'          => array('post_tag'),
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-users',
	);
	register_post_type('detenu', $args);
}
add_image_size('photo', 650, 650, TRUE);
add_image_size('photo_simple', 650, 650, TRUE);


// Dans le fichier functions.php on ne referme pas la balise php à la fin
