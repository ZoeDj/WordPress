<?php
/**
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Twentynineteen Theme Child
* @since Twentynineteen Theme Child 2.0
*/

// Enqueue scripts and styles
function twentynineteen_child_scripts(){
	wp_enqueue_style( 'twentynineteen-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'twentynineteen-style' ));
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_child_scripts' );
	
get_field('custom_field_name');

// This theme uses wp_nav_menu() in two locations.
register_nav_menus(
	array(
		'menu-1' => __( 'Primary', 'twentynineteen-child' ),
		'footer' => __( 'Footer Menu', 'twentynineteen-child' ),
		'social' => __( 'Social Links Menu', 'twentynineteen-child' ),
	)
);

