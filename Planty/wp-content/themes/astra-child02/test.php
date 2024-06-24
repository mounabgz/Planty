<?php
// LOGO
<header>
<img src="Logo.png" alt="logo">

//  dans le fichier function.php :
add_filter('wp_nav_menu_items','add_new_menu_item', 10, 2);
function add_new_menu_item( $nav, $args ) {
    $newmenuitem = "<li class='home-link'><img src='Logo.jpg' alt='logo'></li>";
    $nav = $newmenuitem.$nav;
    return $nav;
}


//  pour le hook
// Assurez-vous de bien démarrer la session utilisateur si ce n'est pas déjà fait
if (!session_id()) {
    session_start();
}

// Récupérer l'ID de la page d'administration
$admin_page_id = get_option('admin_page_id');

// Vérifier si l'ID est valide
if ($admin_page_id) {
    // Obtenir le lien permanent de la page d'administration
    $admin_page_permalink = get_permalink($admin_page_id);

    // Vérifier si l'utilisateur est connecté
    if (is_user_logged_in()) {
        echo '<li><a href="' . esc_url($admin_page_permalink) . '">Admin</a></li>';
    }
} else {
    // Optionnel : message d'erreur si l'ID n'est pas défini
    echo '<li>L\'ID de la page d\'administration n\'est pas défini.</li>';
}

 // Fonctionne
add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {

    $admin_page_id = 77; // identifiant de page
    $id_permalink = get_permalink($admin_id);  

    if (is_user_logged_in()) {
        echo '<li><a href="' . esc_url($admin_page_permalink) . '">Admin</a></li>';
    }

    elseif (!is_user_logged_in() && $args->menu == 5) { // si l'utilisateur est déconnecté, on vérifie que l'id de menu est bien 5
        return $items;  // si on est pas connecté la pagre n'affiche pas le lien "Admin
    }
    return $items;
}