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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tecnologia' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         'p1P}`vCKy#[Y.Y!hKe)#[}km!J*g3-^gu1t{@tQfbCH/X%ls0&T#bC]oZgOt(Uli' );
define( 'SECURE_AUTH_KEY',  'YSwC]d+T[N1_LH%Ya+i1y}d/PTN( .!i}1VRff~TJFMqquChf6<4TrGn24@GyXan' );
define( 'LOGGED_IN_KEY',    '5Alo3)u}B-Xn)Y+U:(rzIB%?A5[`D,5h{O)^NY3CSYEb?a;}W:o9^$.OzEW{|z7-' );
define( 'NONCE_KEY',        'o(_|neH-gGM$!jIV2Fw@fxBU$wI*(gm+vMgw+u8Rnx5,V*ko5>|qiP<uMNTAhy+/' );
define( 'AUTH_SALT',        'f;Wn9fR5}(ozqS+pLqEuH3{LsOP0c%kq;,;fY.d0%1d.2_t{)Fy7{<jXzbl!;7_l' );
define( 'SECURE_AUTH_SALT', '8]|XCWDLEem;(|{rtN|nfF8+L-d{M+Tz-qLzQ=4SXD?0pr%s)8tNN/3|)Q.464^P' );
define( 'LOGGED_IN_SALT',   '.TDYqJ#/wtYQoc/HNNs%:Ot=l;Apm%Ej5MMqgAc!mMzcl}&tupp+?2&9d3{V4E2p' );
define( 'NONCE_SALT',       '~>H>5bR#N-8^4D{D)z=iBDe8reMMt;s)ze~o}z_6T:YI2$Ps*f(eWE8,O+Zi&Qm7' );

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
