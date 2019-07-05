<?php
add_action('wp_enqueue_scripts', 'script_and_styles');
function script_and_styles() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js');

    wp_enqueue_script('iscroll', 'https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.js');
    wp_enqueue_script('drawer', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js');

    // owl carousel
    wp_enqueue_script('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');
    wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style('owl-carousel-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');


    wp_enqueue_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js');
    wp_enqueue_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css');
    wp_enqueue_style('fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('drawer', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.css');

    // custom style and script
    wp_enqueue_style('css', get_template_directory_uri(). '/css/main.css');
    wp_enqueue_style('my-media', get_template_directory_uri(). '/css/media.css');
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1', true);

}

// Carbon Fields
add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    require_once __DIR__ . '/inc/post-meta.php';
    require_once __DIR__ . '/inc/main-page__meta.php';
    require_once __DIR__ . '/inc/country__meta.php';
    require_once __DIR__ . '/inc/country-work-page__meta.php';
    require_once __DIR__ . '/inc/about-us-page__meta.php';
    require_once __DIR__ . '/inc/answers-page__meta.php';
    require_once __DIR__ . '/inc/partners-page__meta.php';
    require_once __DIR__ . '/inc/contact-page__meta.php';
}


add_filter('show_admin_bar', '__return_false'); // отключить
//add_filter('show_admin_bar', '__return_true'); // включить

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
    add_theme_support('widgets');
}

function wpb_custom_new_menu() {
    register_nav_menu('main-menu',__( 'Главное меню' ));
    register_nav_menu('soc-menu',__( 'Контакты и соц. сети' ));
    register_nav_menu('mob-menu',__( 'Мобильное меню' ));
}
add_action( 'init', 'wpb_custom_new_menu' );


add_action('init', 'register_country_post_type');
function register_country_post_type(){
    register_post_type( 'country', array(
        'labels'             => array(
            'name'               => 'Страны', // Основное название типа записи
            'singular_name'      => 'Страна', // отдельное название записи типа Book
            'add_new'            => 'Добавить новую',
            'add_new_item'       => 'Добавить новую страну',
            'edit_item'          => 'Редактировать страну',
            'new_item'           => 'Новая страна',
            'view_item'          => 'Посмотреть страну',
            'search_items'       => 'Найти страну',
            'not_found'          => 'Стран не найдено',
            'not_found_in_trash' => 'В корзине стран не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Страны'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'       => 0,
        'menu_icon'           => 'dashicons-translation',
    ) );
}

function my_get_posts($post_type) {
    // параметры по умолчанию
    $posts = get_posts( array(
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => $post_type,
    ) );

    return $posts;
}

add_filter( 'carbon_fields_map_field_api_key', 'crb_get_gmaps_api_key' );
function crb_get_gmaps_api_key( $current_key ) {
    return 'AIzaSyC2PXMX7wfMxaDhRTK9kTycpYJBNvWi4Gc';
}