<?php
/*
 Plugin Name: proNitu Custom Widgets
 Description: Common Custom Widgets For proNitu Theme
 Plugin URI: https://www.nitu121.com/proNitu-cpt
 Author: Nitu Barmon
 Author URI:  https://www.nitu121.com/proNitu-cpt
 Text Domain: proNitu
*/

/*===========================================
   ====== Siderbar Register FUnction =====
 ============================================*/

function proNitu_widgets_register(){
  register_sidebar(array(
    'name' =>__('Main Widget Area', 'proNitu'),
    'id' => 'sidebar-1',
    'description' =>__('Apperas in the sidebar in blog page and other page', 'proNitu'),
    'before_widget' => '<div class="child-sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
  ));
/*==============================
 ====== Footer Widgets =======
===============================*/ 
  register_sidebar(array(
    'name' =>__('Footer 1', 'proNitu'),
    'id' => 'footer-1',
    'description' =>__('Apperas in the sidebar in blog page and other page', 'proNitu'),
    'before_widget' => '<div class="child-sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
  ));
  register_sidebar(array(
    'name' =>__('Footer 2', 'proNitu'),
    'id' => 'footer-2',
    'description' =>__('Apperas in the sidebar in blog page and other page', 'proNitu'),
    'before_widget' => '<div class="child-sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
  ));
  register_sidebar(array(
    'name' =>__('Footer 3', 'proNitu'),
    'id' => 'footer-3',
    'description' =>__('Apperas in the sidebar in blog page and other page', 'proNitu'),
    'before_widget' => '<div class="child-sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
  ));
  
/*=================================
 ====== Home Page Widgets =======
==================================*/ 
  register_sidebar(array(
    'name' =>__('Home Page', 'proNitu'),
    'id' => 'homepage-1',
    'description' =>__('Apperas in the homepage in blog page and other page', 'proNitu'),
    'before_widget' => '<div class="child-home">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
  ));
}
add_action('widgets_init', 'proNitu_widgets_register');