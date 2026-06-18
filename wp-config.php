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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'crazy_grill_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '@t]n?vl@;!f4SpK<+&YROBpbW2#T{1M 6ZQd(D[#uuudM1K]!ZgDO#2U{8t45KJq' );
define( 'SECURE_AUTH_KEY',  'Ub5J1q3U>uz<3%`~kvbQo9ixh$4Qh9@$O9KrX9~m4aS|$X1`.HweqX$t=/:@%y[s' );
define( 'LOGGED_IN_KEY',    '`J]],73Qb:e70L#E0kgvo@d|;1}/+a{Zhf!%_/*2Umayb7E:R3{|-sQ} ec~*R)J' );
define( 'NONCE_KEY',        'qvpurV!nJ*[P!.jRN@)UqaWY*CuR@u-/om~]f+(fziG2D+u|cA/=AoEt;e*2&+{H' );
define( 'AUTH_SALT',        'rp-fWfnAjT?l=NstIkJMzHBuEj SyzT6loI<C;I*yZ($0vZ9%BRC6$>}FjVf<IGx' );
define( 'SECURE_AUTH_SALT', 'g`<&uc$pKo 0cmEgE%GY B,nb(2,N+X3J/$tgHcG#+EBw(M=+Rl.)9!WbGK#r<[*' );
define( 'LOGGED_IN_SALT',   '4/}}e :S}ML2pne(1_=Kr 4fx3xN+b38Lsm 8<.+Oe|<.-g{GhHO&1/r{n~}xqaC' );
define( 'NONCE_SALT',       'n%U;k@]#TR`uizaKz}^Rga8PlRpE#]`7PqmUm^OO}dkFBF,v^#~K_XHdR2xpm3:I' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
