<?php
/**
 * Go functions and definitions
 *
 * @package Go
 */

 // Enqueue styles
function enqueue_child_styles() {
    // Importa los estilos del tema principal (padre)
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Agrega los estilos del tema hijo
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'enqueue_child_styles');