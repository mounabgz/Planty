<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// MENU

add_action( 'after_setup_theme', 'planty_support');
function planty_support() {
    register_nav_menus( array(
        'Header' => 'En tête du menu',
        'Footer' => 'Pied De Page',
    ) );
}

// LE HOOK POUR ADMIN
add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {

    if (is_user_logged_in() && $args->theme_location == 'En tête du menu') { // si l'utilisateur est connecté, dans le header seulement
        $items .= '<li class="admin"><a href="'. get_permalink(get_option( 'admin_page_id' )) .'">Admin</a></li>'; // la page affiche le lien "Admin"   
    }

    elseif (!is_user_logged_in()) { // si l'utilisateur est déconnecté
        return $items;  // on retourne les items de base
    }
    return $items;
}

// END ENQUEUE PARENT ACTION
