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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'new' );

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
define( 'AUTH_KEY',         '`&3uE;GWk+LxNrXpTn2N^CuvG$T4?[w5PCD:qn4(kqjVR`25n!BW}yPyprxLHE$T' );
define( 'SECURE_AUTH_KEY',  'U${R@Y,!maUYKf0kvC4ui3B6.X=||E)u`.JrbxR|#7rDgoZw$2*L5`,a>yo_M-g_' );
define( 'LOGGED_IN_KEY',    'oAL]~~2%DL*+Kx=;;8FkH=;$n&{kP?z@LHmZGMlznU`BPd;h!$uUj5^_M]:?6#yZ' );
define( 'NONCE_KEY',        '.31`i![@`{_1%IQg8#O9B`]egml=q$%&)6_qngg~|n2wden8};en~E.d0Wt%1}LR' );
define( 'AUTH_SALT',        'E#_)$l}Q38+p4,09!]7Tk!kpRq/{AAJ2Lka0kF?!a|E4VX7t+CA)P<]~It#{=[Il' );
define( 'SECURE_AUTH_SALT', 'e!;*IYf(&e*}Yw]7_rq!U:S./Q;@_{ZA3PWwyZjns$e_ OYiG $qT/e6v^WzIQBl' );
define( 'LOGGED_IN_SALT',   '(5t0R$bo]gP;EGTc?3 sLF_-D=g4S,p-S/5Q<oB= *s;l u{m?l!r42c.G+s(z<0' );
define( 'NONCE_SALT',       'Z$oaE=T,5bs:B>n3H!a/5x-wCXTVpH@o-cq=c1%+XzU^>iDvP,(KVk$>t4QSO: ;' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
