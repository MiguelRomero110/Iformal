<?php
//cargamos librerias de terceros
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

function iformal_config(){

    register_nav_menus(  
        array(
            'iformal_main_menu' => 'iformal menú principal',
            'iformal_footer_interno' => 'ifromal menú footer interno'
        )
    );

}
add_action( 'after_setup_theme', 'iformal_config', 0 );

function iformal_scripts(){
    wp_enqueue_script( "bootstrap_js", get_theme_file_uri("inc/js/bootstrap.min.js"), array("jquery"),"4.5", true );
    wp_enqueue_style( "bootstrap_css", get_theme_file_uri("inc/css/bootstrap.min.css"),array(), "4.5","all" );
    wp_enqueue_style( "compra_js", get_theme_file_uri("inc/js/compra.js"),array(), "4.5","all" );
    wp_enqueue_style( "style_css", get_theme_file_uri("style.css"),array(), "1.0","all" );
}
add_action( 'wp_enqueue_scripts', 'iformal_scripts' );