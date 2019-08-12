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
define( 'DB_NAME', 'wordpressdev' );

/** MySQL database username */
define( 'DB_USER', 'ryan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '.Aiw3p%kV!?@e84w%i NQ]Qx:BH#Q`!XihK#M_.Uw06h8lGQBs/78{bIl:.baS.o' );
define( 'SECURE_AUTH_KEY',  'D:8qs%u!Jmvt<1Qw71m6_^b2jcGoia#N;8)Q*yK:w3sm=-A.LvW#cJQAP:xzb5PA' );
define( 'LOGGED_IN_KEY',    '~QjOwak(%pERC2=oUyoN_xUlx}bi;KtAn*VMu)N]m+CuWy%n9lv`l8ui^TFpF5i&' );
define( 'NONCE_KEY',        '3cl:.EjX@LQxN#1<EX=7W[%up~:o.:8 o07KkF}9nUj9CWncr|<G>7]UF;?6@~]5' );
define( 'AUTH_SALT',        'Pu}K(C/-K?7qGW=rZ3br(;mnx=#? B|y]=+0te;L Ey~7=a?Q_n-}ZS]z<zb?q`E' );
define( 'SECURE_AUTH_SALT', 't4S`NXm9E+PHflK;3aJ[6a!3i> 3ED>lUu%!JU|Mi~*3|@P6X%(E{xx?VR$l]G9k' );
define( 'LOGGED_IN_SALT',   'Vjr_#,vi^4y(0`ejQDON-!$#qF,uq:Ks@ci[!%Ur%Wu/_OKTVT3=Do&m1/<nqGQZ' );
define( 'NONCE_SALT',       'NIkwv8Es0O24V>A^=q36.#7 wEvIXX+[jG~kp^P!~p0 2hJBrJy:*U/;2>O(vf|p' );

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
