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
define( 'DB_NAME', 'great_db' );

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
define( 'AUTH_KEY',         '=~`/@k#lfI`7;!&k6u}w*;ud)LyRdN??I$^:XY7$FF3s.+/t>#~7JOipZry> z!Q' );
define( 'SECURE_AUTH_KEY',  '6M<Ycs[`iAC)Dm[b%irB`T4L#CkE+.1tQ{4k}kP_c[sIYx`J|:^vu_ {e!!Qek,,' );
define( 'LOGGED_IN_KEY',    '`p:?vldK!Z,[{B~4gpCe-#pwfi5!FiYWr~DK|vm~f;OS]f,sWaI_L9f>7B]/CS%X' );
define( 'NONCE_KEY',        'd#%VU;0f+CEU-@C7`d-aHsUQw]c(*WiBI&+/k:9x>5txo&[6fjsXkugpqw6dml%b' );
define( 'AUTH_SALT',        'whFaV_,T9Bx|9P#ug>KDt%B+<2>d}?=T}o04(!9SjvB!Fq);FjR]k:h==]^@/}IL' );
define( 'SECURE_AUTH_SALT', '3husnZ6oC+C(h9yYUlEHQn=od$po(N`izgQ)zqnRJG>#m>Xi =MZ^V %{oub&9GQ' );
define( 'LOGGED_IN_SALT',   ':pMAW*dk`$^G6GE?~U!=hQxfuDD7^~*7a#nenER}/?,bN/ -jozeGNxKwi9,+2/:' );
define( 'NONCE_SALT',       '`[rsqz]J||7t>7=2GTOM6?X| SA_iB_V0L({7DY-NbHWoCh8|R4_kH)6mGnF3tH?' );

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
