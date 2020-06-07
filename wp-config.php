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
define( 'AUTH_KEY',         'AU;>2Ce,qjnId bL{H!05{NTCv791rW*Y}.SLVwV9a<:U(?g<Dp&qirs!9!2C lZ' );
define( 'SECURE_AUTH_KEY',  '}(+[@oYU.! /15r9(#H0KB5TCp}kK{q&R3iQ-% Czja|3N%2Nunn[J5aUwu]WAop' );
define( 'LOGGED_IN_KEY',    'X_ndW4>`D.iEl_=r?fdw<*%BoFTtp_e~GjmSPvxE,i=gvYU%xn>bv>DU[CaA lO&' );
define( 'NONCE_KEY',        'tF)R=7ESFiMZ1NsKDAhZjtaA[-=1AoS=b%{s)N9^A$kMWKU}Kht|In;+sGo,`p,2' );
define( 'AUTH_SALT',        '830vw4mnm(9Lm/Bs|dxa-fsDf|pR5NlRmbYYyBPm|kCRLX`y4baen!vmR! t84!]' );
define( 'SECURE_AUTH_SALT', ',*>I{?e*>-8ZAQ?HYsU[CV&&K6C!lPVm5IWYTGR6zlBj:ZHcy~dY1k$V_CaxshMn' );
define( 'LOGGED_IN_SALT',   '=[CU4eLJTp*fEoyIXIM8!=n[Cxu-T#j^k4ke!C)(Lc]+z1wIRrF#}pk)6Sb^kY[v' );
define( 'NONCE_SALT',       'aJ/u1zzz7a_@xgy6^I$7V`8N$nl9Y$Y!6gdufMlZ2|k{&SGLgTV)<I1no3N|r>i)' );

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
