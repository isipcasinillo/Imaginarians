<?php
function theme_styles()
{
    wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/style.css' );
    wp_enqueue_script( 'jquery');

}

add_action('wp_enqueue_scripts', 'theme_styles');


function add_javascript() {
  wp_enqueue_script('add_javascript', get_stylesheet_directory_uri() . '/app/js/script.js');
};

add_action('wp_enqueue_scripts', 'add_javascript');
/* 
REGISTER MENUS 
*/
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

  /* 
  CREATE OPTIONS PAGE 
  */
  if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( array(
		'page_title'	=> 'Theme Options',
		'menu_title'	=> 'Options',
		'menu_slug' 	=> 'acf-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
	));
}

/* 
REGISTER FEATURED IMAGE COMPONENT 
*/
function register_featured_images() {
	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'register_featured_images' );

/* 
CREATE EXCERPT FROM ACF 
*/

function custom_field_excerpt() {
	global $post;
  if (have_rows('content_area')) {
    while( have_rows('content_area')) {
      the_row();
      $text = get_sub_field('content');
    }
  }
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$excerpt_length = 20; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}

/*
ADD CLASSES TO WP MENU
*/
function add_additional_class_on_li($classes, $item, $args) {
  if(isset($args->add_li_class)) {
      $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);