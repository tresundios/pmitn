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
define( 'DB_NAME', 'pmitnorg_wp' );

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
define( 'AUTH_KEY',         '.?S.l_}3MS}+[(ny(`VXu7=RWaAEJ`~&fWBV&k|v rR#r2l |Sz*mZ<cbT7|9AO#' );
define( 'SECURE_AUTH_KEY',  '[@v~$4~A$*h_z^DE]4:7Ug)V :{k&@/^>dsY~^,jyW0HQ,((?rZZX!3ai%;4;pxQ' );
define( 'LOGGED_IN_KEY',    'R[ru/*Qjy&/p,PiMaJb)icj!FA{V_GW3uv=$FlM07`p6wBtII|;7AJzYwC$I.b|[' );
define( 'NONCE_KEY',        '=h68;BKjiP8~a^+wEsc&(]Rx=@]V8Z:Y..]bEgb<JYXOw9h8]RTD6 Ip`x^ bW0q' );
define( 'AUTH_SALT',        's:,b+>t6 ~IFM+ja4~0Z~vG7*kxm&Mv!)GxqM cy^yEV$[{g:gS@|E,35-^stinR' );
define( 'SECURE_AUTH_SALT', 'A:D(u*aNSM$fS+&-wO@[^g_Y0o:vgfS4,Q;R>+_+A-Z$d[1xTu2!iGicz2MK%rmj' );
define( 'LOGGED_IN_SALT',   'Ii)|J<^(WOh(k2GR3>)B*M4 2S#@/.4oQtQi7I`+G-ok6kodC-YLXTg(`nHA.~K*' );
define( 'NONCE_SALT',       'H`G5x$,L5W0BMs$[Mv54mNgsR)mJfIyIwOH1?Ox%rr<G9SH~_Lx;,4(KYXQm;<W/' );

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
