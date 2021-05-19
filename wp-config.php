<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'w2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b~.lq5 /IV|ijKI],Z7#|jx[m:ok,y[Oy7;&4Ze5`>N.ocBuMZv4=oLry$qPfrQt' );
define( 'SECURE_AUTH_KEY',  '%e|{:J|OlY <;0<9@47:? rBsLwyiA;?!fLq]BnpW.qC<zI+|KTXJ|]nkb`1Djo}' );
define( 'LOGGED_IN_KEY',    'Jb*=!|F[A?/HJh.a+,eIX,V_=Qh.I)%RB~@U2cb],5_q,v,N$Vu$:b&<d}Ljk[t+' );
define( 'NONCE_KEY',        'UdzoQkcs7)!n%jvjogJvQ<,#2H.0`8-+K.[hS,f6d<h5[NlEX$UR6n02=a~8PFU}' );
define( 'AUTH_SALT',        '4yf?YR/A`P:<^]2c.y1oR),HrsWCw^j[!tYZ9_DTFS3W%eo`B |&cZ!G#`cTr|?U' );
define( 'SECURE_AUTH_SALT', 'E)!8[eo-6YtHm*B#+g/pxANMnC*le2N5i;r:c5B;sO0/t7[?Inc|7=I%y.hp*LWg' );
define( 'LOGGED_IN_SALT',   '*DxqKX@Fj-h)54HNqIe7aw_HvxA)JyOtQ;?yb.;Z 9wp`e!|k!bjQZ4pi*.U`oh3' );
define( 'NONCE_SALT',       '|b1G PD^Fn1#H-fZ3/BCa]H6Vow#Cp23Fxs1VC*&|0H6Qe*vCstN!Fw{0IIF#Ze)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
