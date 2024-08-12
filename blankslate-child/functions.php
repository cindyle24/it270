<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// >>> Unregister the original blankslate sidebar 

add_action( 'widgets_init', 'remove_my_widgets', 11 );

function remove_my_widgets()
{
   unregister_sidebar( 'primary-widget-area' );
}



// register MY sidebar

add_action( 'widgets_init', 'new_blankslate_widgets_init' );


function new_blankslate_widgets_init() {
   register_sidebar( array(
   'name' => esc_html__( 'Sidebar Blog', 'blankslate' ),
   'id' => 'sidebar-blog',
   'before_widget' => '<div class="inner-widget">',
   'after_widget' => '</div>',
   'before_title' => '<h3>',
   'after_title' => '</h3>'
   ));


   register_sidebar( array(
      'name' => esc_html__( 'Sidebar Seattle', 'blankslate' ),
      'id' => 'sidebar-seattle',
      'before_widget' => '<div class="inner-widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
      ));
   }

   register_sidebar( array(
      'name' => esc_html__( 'Sidebar Denver', 'blankslate' ),
      'id' => 'sidebar-denver',
      'before_widget' => '<div class="inner-widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
      ));
   

// add a body class
function customBodyClass( $classes ) {
global $current_blog;
$classes[] = 'website-'.$current_blog->blog_id;
return $classes;
}
add_filter( 'body_class', 'customBodyClass' );