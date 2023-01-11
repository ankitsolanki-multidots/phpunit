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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'phpunit' );

/** Database username */
define( 'DB_USER', 'ankit' );

/** Database password */
define( 'DB_PASSWORD', 'Ankit@123' );

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
define( 'AUTH_KEY',         'L7-NAojMzJq+xCQ@NutTtq337JJBH-_<d!X|tXqNaU8BO&;ICp;.XS@t.-7)@$~#' );
define( 'SECURE_AUTH_KEY',  'ry[5`st%BBk#2!b{8OhG0lvf8r&ms>PzRj.#x8{gpu[NS!O!1jVl,s>z8l(Oy1{@' );
define( 'LOGGED_IN_KEY',    'DKGhvfu7dDReH6+9I/I6Vq=l8R(nyMBPVr%QE]kS,?%F^V:rQhJ>XzmLGP2qXoY}' );
define( 'NONCE_KEY',        ' `8~7GNscL!s}zmlA;#4!T+T/&y|> 30W5C1jhqgx>nyZqliQV<X3O~p{k8;oj}v' );
define( 'AUTH_SALT',        'K3#pp$?z0-#.%zP#r*(lD0IRH?l99~@Q.zl{al_wgj/]P(]I1IM5hR-hCq&!MPgZ' );
define( 'SECURE_AUTH_SALT', '=u0 qsFmDMK`w](M4O#wZHs7R@tvdj5:E6lDDab;>N3Vo1vXIBcoGilk.]sgGVFu' );
define( 'LOGGED_IN_SALT',   '^8B8nt<1F}/fnwCotsbG}6n,o1GuW1i{yvIVvrWPquo{&u Of^@6AH-F=@4oUYZo' );
define( 'NONCE_SALT',       '(E1Maq}iVG l8.,,D_]CB2S[k8IM^zhws~EC_]bVnvKOsaD95+vCdiYv_=k_^Edi' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
