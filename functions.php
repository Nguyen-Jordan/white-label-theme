<?php
function montheme_supports () 
{
    add_theme_support('title-tag'); // Ajout le support du title tag
    add_theme_support('post-thumbnails'); // Ajout le support post-thumbnails qui permet afficher une image mis en avant
    add_theme_support('menus'); // ajoute le menus dans apparence
    register_nav_menu('header', 'En tête du menu'); // je crée une nav bar avec l'id 'header' et la description qui sera afficher dans le backoffice
    register_nav_menu('footer', 'Pied de page'); // je crée un footer avec l'id 'footer' et la description qui sera afficher dans le backoffice
}

function montheme_register_assets () 
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    wp_register_style('css', get_template_directory_uri().'/assets/css/styles.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('css');
    wp_enqueue_script('bootstrap');
}

function montheme_title_separator () 
{
    return '|';
}

function montheme_document_title_parts ($title)
{
    return $title;
}

function montheme_menu_class ($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

function montheme_menu_link_class ($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}

function montheme_disable_block_editor_for_post_types() {
    // Remplacez "post" par le type de publication pour lequel vous souhaitez désactiver l'éditeur de blocs.
    $post_types = array( 'post', 'page', 'custom_post_type' );

    foreach ( $post_types as $post_type ) {
        // Désactive l'éditeur de blocs pour le type de publication spécifié.
        remove_post_type_support( $post_type, 'editor' );
    }
}

add_action( 'init', 'montheme_disable_block_editor_for_post_types' );
add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('document_title_separator', 'montheme_title_separator');
add_filter('document_title_parts', 'montheme_document_title_parts');
add_filter('nav_menu_css_class', 'montheme_menu_class');;
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');