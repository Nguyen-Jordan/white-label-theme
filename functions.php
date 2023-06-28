<?php
function montheme_supports () 
{
    add_theme_support( 'custom-logo', array(
        'height'      => 200,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support('title-tag'); // Ajout le support du title tag
    add_theme_support('post-thumbnails'); // Ajout le support post-thumbnails qui permet afficher une image mis en avant
    add_theme_support('menus'); // ajoute le menus dans apparence
    register_nav_menu('header', 'En tête du menu'); // je crée une nav bar avec l'id 'header' et la description qui sera afficher dans le backoffice
    register_nav_menu('footer', 'Pied de page'); // je crée un footer avec l'id 'footer' et la description qui sera afficher dans le backoffice
    if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
        // File does not exist... return an error.
        return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
    } else {
        // File exists... require it.
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }
}

function montheme_register_assets () 
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    wp_register_style('css', get_template_directory_uri().'/assets/css/styles.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', [], false, true);
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', [], false, true);
    wp_register_script('js', get_template_directory_uri().'/assets/js/index.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('css');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('jquery');
    wp_enqueue_script('js');
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

function montheme_init() {
    // Remplacez "post" par le type de publication pour lequel vous souhaitez désactiver l'éditeur de blocs.
    $post_types = array( 'post', 'page', 'custom_post_type' );

    foreach ( $post_types as $post_type ) {
        // Désactive l'éditeur de blocs pour le type de publication spécifié.
        remove_post_type_support( $post_type, 'editor' );
    }

    register_post_type('Services', [
        'label' => 'Services',
        'public' => true,
        'menu_position' =>4,
        'menu_icon' => 'dashicons-superhero-alt',
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true
    ]);
}

function prefix_modify_nav_menu_args( $args ) {
    return array_merge( $args, array(
        'walker' => new WP_Bootstrap_Navwalker(),
    ) );
}

function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
add_filter( 'wp_nav_menu_args', 'prefix_modify_nav_menu_args' );
add_action( 'init', 'montheme_init' );
add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('document_title_separator', 'montheme_title_separator');
add_filter('document_title_parts', 'montheme_document_title_parts');
add_filter('nav_menu_css_class', 'montheme_menu_class');;
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');

function theme_name_widgets_init() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here.', 'theme-name' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'theme_name_widgets_init' );
