<?php
// Enqueue parent theme styles
function astra_child_enqueue_styles() {
    // Enqueue the parent theme's stylesheet
    wp_enqueue_style('astra-style', get_template_directory_uri() . '/style.css');
    
    // Enqueue the child theme's stylesheet
    wp_enqueue_style('astra-child-style', get_stylesheet_uri(), array('astra-style'), wp_get_theme()->get('Version'));
}

?>