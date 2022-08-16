<?php

//Add menu
add_action('init', 'register_my_menus');

function register_my_menus() {
    register_nav_menus(array (
        'main-menu' => 'Top menu'
    ));
    
}

//Activate featured image
add_theme_support('post-thumbnails');

//Custom sizes
add_image_size('medium', 640, 640, array('center', 'center'));
add_image_size('small', 256, 9999, array('center', 'center'));
add_image_size('singlepageimage', 9999, 500);
add_image_size('headerimage', 1600, 750, array('center', 'center'));

//Activate header image
$args = array(
    'default-image' => get_template_directory_uri() . '/images/headerimage.jpg',
    'width' => 1920,
    'height' => 600,
    'uploads' => true, 
);
add_theme_support('custom-header', $args);

//Activate widget-area
add_action('widgets_init', 'pals_widget_init');

//Initiationg widgets
function pals_widget_init() {
    register_sidebar(array(
        'name'              => 'footer-content-phonenumber',
        'id'                => 'footer-content-phonenumber',
        'before-widget'     => '<div>',
        'after-widget'      => '</div>',
        'before-content'    => '<p>',
        'after-content'     => '<p>'
    ));

    register_sidebar(array(
        'name'              => 'footer-content-email',
        'id'                => 'footer-content-email',
        'before-widget'     => '<div>',
        'after-widget'      => '</div>',
        'before-content'    => '<p>',
        'after-content'     => '<p>'
    ));

    register_sidebar(array(
        'name'              => 'site-review',
        'id'                => 'site-review',
        'before-widget'     => '<div>',
        'after-widget'      => '</div>'
    ));

    register_sidebar(array(
        'name'              => 'site-review-summary',
        'id'                => 'site-review-summary',
        'before-widget'     => '<div>',
        'after-widget'      => '</div>'
    ));
    register_sidebar(array(
        'name'              => 'cf-activities',
        'id'                => 'cf-activities',
        'before-widget'     => '<div>',
        'after-widget'      => '</div>'
    ));
    register_sidebar(array(
        'name'              => 'rental-search',
        'id'                => 'rental-search',
        'before-widget'     => '<div>',
        'after-widget'      => '</div>'
    ));
    register_sidebar(array(
        'name'              => 'front-page-puff',
        'id'                => 'front-page-puff',
        'before-widget'     => '<div>',
        'after-widget'      => '</div>',
        'before-title'      => '<h2>',
        'after-title'       => '</h2>'
    ));
    register_sidebar(array(
        'name'              => 'sub-page-puff',
        'id'                => 'sub-page-puff',
        'before-widget'     => '<div>',
        'after-widget'      => '</div>',
        'before-title'      => '<h2>',
        'after-title'       => '</h2>'
    ));
    register_sidebar(array(
        'name'              => 'breadcrumbs',
        'id'                => 'breadcrumbs',
        'before-widget'     => '<div>',
        'after-widget'      => '</div>'
    ));
}




