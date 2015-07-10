<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function Mamas_resources() {

    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'Mamas_resources');

//Add navigation menu's

/* register_nav_menus(array(

  'mamasheader_nav' => __('Header Menu'),
  'mamasfooter_nav' => __('Footer Menu')

  )); */

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
register_nav_menus(array(
    'mamasheader_nav' => __('Header Menu', 'Header Menu'),
    'mamasfooter_nav' => __('Footer Menu', 'Footer Menu')
));


/* Register wiget content */
//function Mamas_widget(){
//    
//    register_sidebar(array(
//        'name' => 'Sidebar',
//        'id' => 'Sidebar1'
//    ));
//    
//}
//
//add_action('widgets_init','Mamas_widget');

add_action('widgets_init', 'theme_slug_widgets_init');

function theme_slug_widgets_init() {
    register_sidebar(array(
        'name' => __('Main Sidebar', 'theme-slug'),
        'id' => 'sidebar-1',
//        'description' => __('Widgets in this area will be shown on all posts and pages.', 'theme-slug'),
       'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
//        'before_title' => '<h2 class="widgettitle">',
//        'after_title' => '</h2>',
    ));
    
    register_sidebar(array(
        'name' => __('Address', 'theme-slug'),
        'id' => 'sidebar-2',
//        'description' => __('Widgets in this area will be shown on all posts and pages.', 'theme-slug'),
       'before_widget' => '<div id="%1$s" class="widget widget_contact_details_widget">',
        'after_widget' => '</div>',
//        'before_title' => '<h2 class="widgettitle">',
//        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Phone', 'theme-slug'),
        'id' => 'sidebar-3',
//        'description' => __('Widgets in this area will be shown on all posts and pages.', 'theme-slug'),
       'before_widget' => '<div id="%1$s" class="widget widget_contact_details_widget">',
        'after_widget' => '</div>',
//        'before_title' => '<h2 class="widgettitle">',
//        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('E-mail', 'theme-slug'),
        'id' => 'sidebar-4',
//        'description' => __('Widgets in this area will be shown on all posts and pages.', 'theme-slug'),
       'before_widget' => '<div id="%1$s" class="widget widget_contact_details_widget">',
        'after_widget' => '</div>',
//        'before_title' => '<h2 class="widgettitle">',
//        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Nelson Dias', 'theme-slug'),
        'id' => 'sidebar-5',
//        'description' => __('Widgets in this area will be shown on all posts and pages.', 'theme-slug'),
       'before_widget' => '<div id="%1$s" class="widget widget_contact_details_widget">',
        'after_widget' => '</div>',
//        'before_title' => '<h2 class="widgettitle">',
//        'after_title' => '</h2>',
    ));
}

function MamasTheme_setup() {

    /* Add Featured image support */
    add_theme_support('post-thumbnails');
}

add_filter('post_thumbnail_html', 'add_class_to_thumbnail');

function add_class_to_thumbnail($thumb) {
    if (is_single())
        $thumb = str_replace('attachment-', 'img-circle', $thumb);
    return $thumb;
}

add_action('after_setup_theme', 'MamasTheme_setup');

function add_post_formats() {
    add_theme_support('post-formats', array('gallery', 'quote', 'video', 'aside', 'image', 'link'));
}

add_action('after_setup_theme', 'add_post_formats', 20);
?>




