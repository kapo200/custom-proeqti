<?php
/**
 * Theme Functions
 */

// Load scripts & styles
function nexcent_enqueue_assets() {
    wp_enqueue_style( 'nexcent-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'nexcent_enqueue_assets' );

// Load init.php from inc folder
require_once get_template_directory() . '/inc/init.php';
