<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/css/style.css', /*array('parent-style')*/ );
    //wp_enqueue_script('animation', get_template_directory_uri() . 'js/animation.js', array('jquery'), null, true);
}


// functions.php du thème enfant
function enqueue_custom_animation_script() {
    wp_enqueue_script('custom-animation', get_stylesheet_directory_uri() . '/js/custom-animation.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_animation_script');



// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}