<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Wua)9jW^t7Mhk9?vm-9%p1(*`Cw=^OPC#j`9V^ISk^F]S~4%aDK.gh $mQ<*mc*7' );
define( 'SECURE_AUTH_KEY',   'o1p+:qM>O:qfSS3ClY@B2xiXV+>ydf2E^CqQuJ<.n17Ax].RM[Td(n(bp|F0BVN6' );
define( 'LOGGED_IN_KEY',     '~-4EhRTNQ5vmzA>kXtX+m6*yg%:`I7Jwc[8J6}aX,mi*/wMX% *H>9K/[ZAZ{sTS' );
define( 'NONCE_KEY',         'S_:PqSa+dNq6l)c>E<C=5c;(y_^/=eeYB*oO>KrVe1snlTpORI;nGHr,D}2S@}p]' );
define( 'AUTH_SALT',         ')|NR^5/<_1=Na2s1`jh!2lcR`S7Lqq?%,(fmUxa*2M7]Oy^Hvs0t2UG|.G:VHMTU' );
define( 'SECURE_AUTH_SALT',  'N~l1|_.g946JD?X{+M+R` wt9fZyfWKC#/Job;wy>o2$)ZRV]CQ[ad9bW0{D~+.6' );
define( 'LOGGED_IN_SALT',    'ecR#[!SQ>NVOv7b$TRe=<S~,csf^tEmTnns(%[jZ){Dure&1]UfP`Yy8,IahG+t.' );
define( 'NONCE_SALT',        'lHNccZV!z#j9_N,s3v*:yR%+T-Bp)#BrD*FY6^qWvi$xl{!wcVL-!bz#Bt5C3wP5' );
define( 'WP_CACHE_KEY_SALT', 'T3]J2zu erymg,1XX,H4tK_$hWO>yxUAT*>9HqEn4FrHHw&am?v%sBwGzC36@HC&' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
