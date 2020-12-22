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
define( 'DB_NAME', 'pictures_game_db' );

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
define( 'AUTH_KEY',         '#0(y@qt,7C@Q5nnqyCrKvI,Agr){1j}FFR_j)6.a:N^eXUzhYNCDnQzs!>5~QMW%' );
define( 'SECURE_AUTH_KEY',  'BP(l1.%;s0|LB[~ctp^j@E)RR^40ok}b&3Fa;I/xfFHWua!se3d[>mw!oIb5[5xh' );
define( 'LOGGED_IN_KEY',    'q}h|Kdx[mvLvU]FV^=hU!w{I~.nsxdEp!eljRU)ECcwUX2-bKbkyens<r;,]Y9bC' );
define( 'NONCE_KEY',        'K5Stfl |7?1$/=|Uf3XvOY=T|(xhhC=yn(u#N3hgE*U2H1-<{Xb-,a3H9VS)vt_*' );
define( 'AUTH_SALT',        '35yLS|&Q=; Sz35kc46+ zcoglGI?$FUeiB+Vi5jshwZlf0`hWgpeRO80gks1X>5' );
define( 'SECURE_AUTH_SALT', '#@ ~kawuI.TW=K6PurWXc$BK|VG%t[N{Y>ZML!h[H3fa-UU4zv;DPf~%vu +V,Wj' );
define( 'LOGGED_IN_SALT',   '/}zLf2=g[CFR<wrRk$}[P+7wXrz-U3PHNZY!B=ju^INWm](dlz`G[t4b86M?.n_`' );
define( 'NONCE_SALT',       'FS,U*d|M%*RGX2]Zm Bp!+Jc@ySib?3tfhHf7yRKyt2<-mlNg7{R_dOeZ[ta#GC`' );

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

$_SERVER['HTTPS'] = 'on';