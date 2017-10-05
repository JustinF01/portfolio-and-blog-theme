<?php

show_admin_bar( false );

add_theme_support('post-thumbnails');
add_theme_support('menus');

function j_theme_styles() {
  wp_enqueue_style('main-stylesheet', get_template_directory_uri().'/css/app.css');
  wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.min.css');
}
add_action('wp_enqueue_scripts', 'j_theme_styles');


function j_theme_scripts() {
  wp_enqueue_script('main_app_js', get_template_directory_uri().'/js/app.min.js', array('jquery'), '', true);
  wp_enqueue_script('fontAwesome', 'https://use.fontawesome.com/f4f1ada6ad.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'j_theme_scripts');

function theme_sidebars() {
  register_sidebar( array(
        'name' => __( 'Blog Sidebar', 'Justin' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on blog page.', 'Blog Sidebar' ),
        'before_widget' => '<div id="sidebar-blog" class="sidebar-blog">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
        ) );
  register_sidebar( array(
        'name' => __( 'Website Sidebar', 'Justin' ),
        'id' => 'sidebar-2',
        'description' => __( 'Widgets in this area will be shown on website page.'),
        'before_widget' => '<div id="sidebar-website" class="website-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
        ) );
 register_sidebar( array(
        'name' => __( 'Nav Contact', 'Justin' ),
        'id' => 'nav-contact',
        'description' => __( 'Contact form in the navigation'),
        'before_widget' => '<div id="nav-contact-form" class="nav-contact">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
        ) );
 register_sidebar( array(
      'name' => __( 'Contact Sidebar', 'Justin' ),
      'id' => 'contact-sidebar',
      'description' => __( 'Contact page sidebar'),
      'before_widget' => '<div id="contact-sidebar" class="contact-sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>',
      ) );
}
add_action('init', 'theme_sidebars');

register_nav_menu('primary', __('Primary Menu', 'Justin'));




?>