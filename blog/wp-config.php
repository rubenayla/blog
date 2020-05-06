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
define( 'DB_NAME', 'blog_db' );

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
define( 'AUTH_KEY',         'oRi&4Nw:57`_j%OFs^ywY[+w86:U=OYm#~EOMP#IHd7AEBrt.M%U**DN!Zxy1z3V' );
define( 'SECURE_AUTH_KEY',  'Zaf=^DpcX{V> bfP-+q2^OZaNGPZNmqM?16^Jf6.BpvxvVf}!P;Ni_|M|S(:ebhl' );
define( 'LOGGED_IN_KEY',    'mQ1CF$+.KEPi!2K_^j4u4R~]{!4cT@QKD#ykWbz@Htb;Xn:)/n2ap.It~GT#K_be' );
define( 'NONCE_KEY',        'y-mr6rF_45i%>AeH[8KnuiEb>9|q/^YeJZU>cj.x`_|;ZUbK$8!>L_mC!e6aJw]T' );
define( 'AUTH_SALT',        '6(Ov_?Pm&{3KNt/AoaB&T,1(3=e= ^XCf4U_nrZYsSs?}FN*@9~`~R`~7(If]Ey{' );
define( 'SECURE_AUTH_SALT', '?QD$?n2GD`BHmKWF+LGSia;n<(LZ900><^,w{*#h[yx>L>47{n9Wa0^/Uu]8YSWm' );
define( 'LOGGED_IN_SALT',   'a4S]!P}u&)kk_vm?C2F&tz1K%-#1WV[{_xnZ)u:H4-|KZ^qoND($Y(Jer)Tb&WhB' );
define( 'NONCE_SALT',       'j84gXPCL6Aff!xn/aCh.d3@w4`}[l.J>eMl5Fn3HCW*`(cMEawG|r%pN92`DGvU&' );

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
