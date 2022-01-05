<?php 
    /* ---------------------------------------
* 基本機能
* -------------------------------------- */
function my_setup()
{
  // アイキャッチ
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    ));
}

function my_script_init()
//css,jsの読み込み
{
    wp_register_style( 'ress', get_template_directory_uri().'/assets/css/ress.css' );
    wp_register_style( 'slick', get_template_directory_uri().'/assets/css/slick.css' );
    wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.min.css',array('ress','slick'), false);
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', "", "",true);
    wp_enqueue_script( 'slick', get_template_directory_uri().'/assets/js/slick.min.js',"", "", true);
    wp_enqueue_script( 'plugin', get_template_directory_uri().'/assets/js/plugin.js', "", "", true );
    wp_enqueue_script( 'script', get_template_directory_uri().'/assets/js/bundle.js', "", "", true );
}
add_action( 'wp_enqueue_scripts', 'my_script_init' );

function my_menu_init()
{
    register_nav_menus( array(
    'global' => 'global',
    'utility' => 'utility',
    'drawer' => 'drawer',
    ) );
}
add_action( 'init', 'my_menu_init' );

?>