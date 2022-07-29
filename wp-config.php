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
define( 'DB_NAME', 'wordpress-task' );

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
define( 'AUTH_KEY',         'mNZzC+sEq-hXG6%lda5k&6<G_.hH2z),dVYev+}{BmTpa&_Pk6k/TNW,%SO&vQs1' );
define( 'SECURE_AUTH_KEY',  '*X56K#8<?cOh!)ng]_.QXg<WAx@f58!24G,15s%=l;~Efu}/SF/gnVDVn+7X$Mxp' );
define( 'LOGGED_IN_KEY',    'pL9CW62TmyHn7V,E-D%y`J h0E/dJRri!<GgD;(bN|KE+3LWPK!V;DSI}WGKL~@W' );
define( 'NONCE_KEY',        'KqY[|%p1!,wIQ:(;uxnwqO7>@sm2}Ck:p3y[+|Fj|o._ERLE+dPwIbdJWJx|5wen' );
define( 'AUTH_SALT',        'bHPl/;$=y0.XueY!~~h~@cuqQBAGs0R>duBueok/hlNt^[V}OG%(G4XM}o Sc8Wx' );
define( 'SECURE_AUTH_SALT', '_o KR]IO&p3.tWr;MX@$+]|TX|uL><zZK|))lX8}W_QTo:7ns=O0}0,hL-n^C09O' );
define( 'LOGGED_IN_SALT',   '(;/VZd<Y?JBM05M#a9/N64jm;^Kl[mq<E/YK+ukv:/Dz_v<`B@{o8(HZ 4kz`w>d' );
define( 'NONCE_SALT',       '^M]&}lVjg?b41/Va^x6JpTjr2O$5+zi5{m,Y>r;)A--Q-78jTHqy(I?_eRwg_)Op' );

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
