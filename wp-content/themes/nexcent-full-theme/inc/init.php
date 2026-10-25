<?php
/**
 * Init File - Automatically includes all PHP files in the inc directory
 */

foreach ( glob( get_template_directory() . '/inc/*.php' ) as $file ) {
    if ( basename( $file ) !== 'init.php' ) {
        require_once $file;
    }
}
