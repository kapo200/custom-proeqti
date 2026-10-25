<?php
/**
 * Register Navigation Menus
 */

function nexcent_register_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'nexcent' ),
        'footer'  => __( 'Footer Menu', 'nexcent' ),
    ) );
}
add_action( 'init', 'nexcent_register_menus' );
