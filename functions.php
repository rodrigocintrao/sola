<?php

// menu personalizado
add_theme_support('nav-menus');

// Registrar áreas de widgets
function theme_widgets_init() {
 // Área 1
 register_sidebar( array (
 'name' => 'Widgets da esquerda',
 'id' => 'widgets_da_esquerda',
 'before_widget' => '<div class="widget">',
 'after_widget' => '</div>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
  ) );
 
 // Área 2
 register_sidebar( array (
 'name' => 'Widgets da direita',
 'id' => 'widgets_da_direita',
 'before_widget' => '<div class="widget">',
 'after_widget' => '</div>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
  ) );
}
 
add_action( 'init', 'theme_widgets_init' );

// Verificar widgets nas áreas de widgets
function is_sidebar_active( $index ){
  global $wp_registered_sidebars;
  $widgetcolums = wp_get_sidebars_widgets();
  if ($widgetcolums[$index]) return true;
  return false;
}
