<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/css/style.css', /*array('parent-style')*/ );
    wp_enqueue_script('custom-animation', get_stylesheet_directory_uri() . '/js/custom-animation.js', array('jquery')/*, null, true*/);
    //wp_enqueue_script('jquery');
}

//Navigation.js
function enqueue_child_theme_scripts() {
    wp_enqueue_script( 'child-theme-script', get_stylesheet_directory_uri() . '/js/navigation.js', array( 'jquery' ), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_scripts' );

//Swiper code
function enqueue_custom_script() {
    // Enregistrement de Swiper depuis le site npm
    wp_enqueue_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array('jquery'), null, true);

    // Enregistrement du fichier JavaScript personnalisé
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/swiper-carrousel.js', array('swiper'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');


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