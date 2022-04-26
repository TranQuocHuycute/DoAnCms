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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'a^{d`%]}}cQGSQJat1So8E[-5x(&Dt n8E`7h)g*^4(l07mO##k4VdBS@7xKDf}X' );
define( 'SECURE_AUTH_KEY',  'r/5qNz`Hu_-MqjjS$hmD`:%HhhZJJQy_7:ovudB4J>^^S@nev{^B,nu40){Di`9Q' );
define( 'LOGGED_IN_KEY',    'hN>{ E81oWDsW Vk}g>tdD[n#X!*%n#8NJYJF(u`sU>5SarI?3@lxpoL?`TXe_<3' );
define( 'NONCE_KEY',        'j{X>j@_&2ZlJ(KZ+?uD}`A5A3KdoHJfP}K7C9KCtF5m6Vnn<7HOVmG![qh^y!&`m' );
define( 'AUTH_SALT',        'G_0{nf#WWXND%&=&23jO?Vol?DD$C*DLSPQL#3G-{^loOmO8#_B^`wJ)$PO&|{2G' );
define( 'SECURE_AUTH_SALT', 'ruy72);t_sYkX A]YX)3WJHO>#YN]M24J0mmlL~A4niL!T I.:r0rEw{*+R8g)+d' );
define( 'LOGGED_IN_SALT',   'vT:Qt2Yw82q(Ci9r7(1&pTXFvMRPi5;Pn*x{DiL8KA8ehQu2$geu>)M(ps6>WC8*' );
define( 'NONCE_SALT',       '?[>m4BxDzNd,2! hJgcB0!A$l9/>,gthJjJ_5n<sC9T=3EdGI+)7uAr&b5xzJm@O' );

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
