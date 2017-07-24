<?php
require_once('wp-bootstrap-navwalker.php');

function add_my_stylesheet()
{
    wp_register_style('bootstrap-min-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null, 'all');
    wp_register_style('custom-style', get_template_directory_uri() . '/css/main-min.css', array(), null, 'all');
    wp_register_style('flex_slider-style', get_template_directory_uri() . '/css/flexslider.css', array(), null, 'all');
    wp_register_style('font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css', array(), null, 'all');

    wp_enqueue_style('bootstrap-min-css');
    wp_enqueue_style('flex_slider-style');
    wp_enqueue_style('font-awesome-style');
    wp_enqueue_style('custom-style');

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', false, false, false);
    wp_register_script('bootstrap-min-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', false);

    wp_register_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array(), '', true);
    wp_register_script('common_script', get_template_directory_uri() . '/js/common.js', array(), '', true);
    wp_enqueue_script('jquery');

    wp_enqueue_script('bootstrap-min-js');
    wp_enqueue_script('flexslider');
    wp_enqueue_script('common_script');

    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
}


function theme_register_nav_menu()
{
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'gallery'));
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}

add_action('wp_enqueue_scripts', 'add_my_stylesheet');
add_action('after_setup_theme', 'theme_register_nav_menu');
show_admin_bar(false);

add_action('widgets_init', 'wp_init_widgets');

//widgets
function wp_init_widgets($id)
{
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

function remove_more_link()
{
    return '';
}

add_filter('the_content_more_link', 'remove_more_link');

add_filter('excerpt_more', function($more) {
    return '';
});

function my_menu_notitle( $menu ){
    return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );

}
add_filter( 'wp_nav_menu', 'my_menu_notitle' );
add_filter( 'wp_page_menu', 'my_menu_notitle' );

?>