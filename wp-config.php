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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'C,sHRV`dTn gOahS<}T9)O)r:^~mQ+xQ1iM^PXI/yn^{Qg$i;@XUx2]2T07EohzP' );
define( 'SECURE_AUTH_KEY',  'eUr:stwaYz;Jav8vaz0Z;iuIKN9513O:U:tVn]2(0821[lQ?qFpH}/QIXYefmY/<' );
define( 'LOGGED_IN_KEY',    '1j,f%CBm@n]QDWdb9~17Fu,>~!cde3(mMkHS3TTzp0]>j-eya=WZ2[(?X?N[i<*q' );
define( 'NONCE_KEY',        'f9 %s#[P-Q5CZjdTQ&h(@d{Z6-g4Vtut0-x6eq+2l|7s[KkE[t{a^^M^gHA-sF;q' );
define( 'AUTH_SALT',        'ubbn9./iva6m5y[7&T/,4-Nc0zOsL[Nk< I#~wnBEp4q$yDiT_Jo9kZ-bR4U;#KP' );
define( 'SECURE_AUTH_SALT', '?F#KiGzig4mWaF{4^)^Des{e)6-12xg=jN Dml3,HL/M#6|.u?GteF0_7R[!d]{k' );
define( 'LOGGED_IN_SALT',   'sckLG$x>7.K)Hd:7`)y2^/P2f-,Xv[ iyV [2F_3`D3#]&vZdA.G%vrK[R*eJ8>~' );
define( 'NONCE_SALT',       'U5( C9$I@<Wk@4+bDQ3{cH7]R2Bt^3gN!|f/Y<*G[?+;^HOg[s0@<,ewnJ4$Xm9d' );

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
