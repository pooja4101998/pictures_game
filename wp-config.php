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
define( 'DB_NAME', 'last_db' );

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
define( 'AUTH_KEY',         'q3`~reR5)r]D|P cTze(;~rd5-8x1x.fhr8?`.d<R|&(*/.n6DEL+2DKmj$BMzJX' );
define( 'SECURE_AUTH_KEY',  'XqFns=[]tlA(Q:{A*Wq?ZE2}u,.tp{@a r3=8KNL8wE%]KTg F8eqwoZMCy4ELBo' );
define( 'LOGGED_IN_KEY',    'lz!_<JbOq8-%)fB2qIjSB0~9/-|wfe41CgK,hLo(uYI%gt{C8hVK6lq>2q0zK%QM' );
define( 'NONCE_KEY',        '!h$.vSXgIGpN*wUC|eW`!MTwG)AXcF#0<>B);mw|=fNl7ZD:9s u`{X/X<XjpHLE' );
define( 'AUTH_SALT',        '/XlSjzfa[=0P?3b]yp&XE>kT|t/=}57CP-$q IX0)nEwB}7{jGG*;HyjU?U}J>{M' );
define( 'SECURE_AUTH_SALT', 'qFv,&}N0!C#5kjY c4Bkq`p3<K5MUDlA_pRu)U%}J-A)+zleDi7)S%N_F?U1%;^<' );
define( 'LOGGED_IN_SALT',   'q.(y5crO7EiEIsNvH]5+%*?[1df8[n<{k{-=_nG6)DFUv#Yn4y:imV)3;pr|rvSX' );
define( 'NONCE_SALT',       'iuN&7aMpbn[b%~NYbJgeu<tIxghn{R$U[i6MFuoAH3]n-Rn&^UBtxtNWdaSvv=W:' );

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
