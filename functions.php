<?php 


/*
    Agregar CMB2
*/

    require_once dirname(__FILE__) . '/cmb2.php';

    /*
    Carga campos personalizados.
    */
    require_once dirname(__FILE__) . '/inc/custom-fields.php';

/*
    Funciones que se cargan al activar el tema.
*/

function amu_setup(){
    //Menú de navegación.
    register_nav_menus( array(
        'menu_principal'=> esc_html__( 'Menú principal','tema-nuevo')
    ) );

}

add_action('after_setup_theme','amu_setup');

/*
    Agregar la clase nav-link de bootstrap al menu principal.
*/
function amu_enlace_class($atts, $item, $args){
    if($args->theme_location == 'menu_principal'){
        $atts['class'] = 'nav-link';
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'amu_enlace_class', 10, 3);

/*
    Cargar scripts y css del tema.
*/

function amu_scripts(){
    /** Styles */
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() .'/css/bootstrap.css', '4.5.0',false);
    wp_enqueue_style( 'style', get_stylesheet_uri(), array('bootstrap-css'));
    /** JQuery */
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', get_template_directory_uri(  ).'/js/popper.js', array('jquery'),'1.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri(  ).'/js/bootstrap.js', array('popper'),'1.0', true);

}

add_action( 'wp_enqueue_scripts', 'amu_scripts' );

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
 }

?>