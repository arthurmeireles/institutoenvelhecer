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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'instituto_envelhecer' );

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
define( 'AUTH_KEY',         '#$:,#?V->,kT<{LO4;f>A3|7mKfU7FqM*e_/~WOu3zx,xaJK6^K.<aaH#r7*s.?k' );
define( 'SECURE_AUTH_KEY',  'N)z7;NC-(yc1~4EYa9.A@C1sNro.Ofi|m}F!U^?bX*g$@=w(X1#r=Od@F;vz)-rB' );
define( 'LOGGED_IN_KEY',    '/o~y:cPVRc}yCZ$]]=<@cfj9^Wk_,XEP2 4ILFT>xy^sR/{E/0Ex}/E,6Bj.k#]J' );
define( 'NONCE_KEY',        '&F,Usj_SG#&1xGIs#G1QLd=47ChJL2Eg_!y`bP &sm |}i@0.:0%$x|SKVkK>Ijh' );
define( 'AUTH_SALT',        ',uQ+r7Ai03`h:Q,AU1h|w[tx!Pw3Gn1YAF`=0fB-d^5;l<xSDbFn3tIE$Ov#|@O4' );
define( 'SECURE_AUTH_SALT', 'A-T1F6{COdX$:1E2E+6yAVTFE3X0nz8_>.&i+A@~@&|(lc#-[WK8D[]Gm^w<i~q#' );
define( 'LOGGED_IN_SALT',   'T!TW.Wjaw)T$(rpY&>3|q6%wc%H5/vHk#HtNH2XNIV-QLa`Mcj|(ZE0A?IZ^mJ,d' );
define( 'NONCE_SALT',       'IQ 1(~NFPZj3E470-!84K*<vWEPbnQ*CUW3QxDNS56>[EMt+4R<9(3y<x|1=-OZ/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'instevn_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
