<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'p#J<>g]MH?chBKeo]+ U`]D9?Z@5*IlhSHTW#DC2>`?,~~A+x37*DIS-M@3WeXK%' );
define( 'SECURE_AUTH_KEY',  '>v/Y0PXM&zV@QY%%&f,hD(rBUW<H,g* ;4wMFHbH{hM8dNZkfO<cVd/55nq.eGrE' );
define( 'LOGGED_IN_KEY',    'Qw!CZ=eSbRbX[.:&sEkPs8TMv{@K5t/uCQ;E#889[@hEvO6[8eIW^^Na?*FBm};_' );
define( 'NONCE_KEY',        '6.3?E7F`OFP?= yLd?%[| 1@9* %b,,*$:n$ObxJ9om7P_^#24U`3O+wY}cEN~OV' );
define( 'AUTH_SALT',        '<*nVCzZATFR:@1?h-*,11hj.EcCAfnrN0jRtrUsCg:+0Xcq%/pOS<9uk6/ GZ:d|' );
define( 'SECURE_AUTH_SALT', 'v{2WQ]h~4< mguG_=.^;/6wCh1Ulk[!AC`t:X,jEW3rD+b1H_+;o(ph:3+O2I&hI' );
define( 'LOGGED_IN_SALT',   'dS+f]F(sI^6w=7w)68okiuY$YNZM|ZB5I!*F#T]*TUNA5<)r{9}A^;~:g&^gEaC>' );
define( 'NONCE_SALT',       '6>j9p V,uZLmE@CJ(CqR`boHeWXX=Z4&Uf9 hLAK:-Smm|%Nv7sxf>luD,+*mhf[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
