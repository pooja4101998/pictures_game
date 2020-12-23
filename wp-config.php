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
define( 'DB_NAME', 'yaas_db' );

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
define( 'AUTH_KEY',         '`5qeK*?qL3.^:qw9%1|Uz<DIDi`mJ%KD#XS:w{>SYYG*#7frU0D|1SW;P7,/i9pR' );
define( 'SECURE_AUTH_KEY',  'gMtDn {Il;S]B~R$I94PPVP,Z`/+hz6u>w.0B{*<azR^]!n6LKg4TK]T;i4_AdPe' );
define( 'LOGGED_IN_KEY',    '1 oae/~9Pevz&Imjqm/X6u:$G;0hEY4*E#[Ew?`6L^xK<;&/b{fzw2v7Qj6JXd+#' );
define( 'NONCE_KEY',        '(ve#atwH3`5G]dG9(Q(^sLQjF#``7mSkAr0n6w^3]d9Ie5+~aPb.9a!bPuV{oJao' );
define( 'AUTH_SALT',        '/>93|w)d+9<l:4lLdK|owy;T/0_Ol?9l&@Q8BTW:@=X;S,^FeigE-.ZVU9@O+v.q' );
define( 'SECURE_AUTH_SALT', '@[zro_3 cI eN#3-Oq&:c6Wa^fQK5N?P=:|;o[}<jbJlvNd8^y8=wi~[Uxx= _wl' );
define( 'LOGGED_IN_SALT',   'Isc4sStgzSyQkL)qWLGLM$T n A];ln.E^7>)#G=wH1#5JWGt*j@dQ)oYmX+_eok' );
define( 'NONCE_SALT',       '%;-cFL!}F4;1X9a*a&J[AzHhb@,XUK-t`96H|e-4haT+Wc}:L1L=[Sgi jM ~E3C' );

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
