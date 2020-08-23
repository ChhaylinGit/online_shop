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
define( 'DB_NAME', 'saledb' );

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
define( 'AUTH_KEY',         'mA_}>;pPpZL1stnKB[5ynD5Z?}KH%6-/Wg-R|kqVf%W|PPxQYSN]y.3nk>[YfoW7' );
define( 'SECURE_AUTH_KEY',  'MJ![wK}r2XQ96<o5(k!:OQ]0}F_u)8JQ,TdA_%0|l 2~VcJvL^z@neKBn=G=yqXW' );
define( 'LOGGED_IN_KEY',    '(*o)BfY-QbA|is_J 32z%,ml6(7.ZH>c x9os[?SaFl`MdC5fK<]|IZT55O(itbN' );
define( 'NONCE_KEY',        'CXPoD*&b(KwGl8eF_(h!OhM+X[D5{J>r4}$kD bL }FIINBV;6,r.@HZBkOUDK[I' );
define( 'AUTH_SALT',        'urhw`rwk1.s*k)R8wjHX34HhZKND <Q,[&yXx;ub}iU]Zkto3vzJ_!H+k{[~uDbK' );
define( 'SECURE_AUTH_SALT', 'M[qKNFg3-ejv>;k0 1`%BB8;5!Nf)BJq*n%vz}Mj@|UR+x|oY%AvBI`w vc5wbA ' );
define( 'LOGGED_IN_SALT',   ':E/f] rm03g|l.=8fz2=/h[ytP$R9;0P4n1{12u|4^@>bMu_|12|(lR C1f{;x^@' );
define( 'NONCE_SALT',       'DJ2?Ghq)1;@s?Nn}cDcIr5ZvB4Xrt(TNp^r0*CsBNE3KmrR67brf29fJ7u&B[M28' );

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
