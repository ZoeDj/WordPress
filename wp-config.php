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
define( 'DB_NAME', 'refineryhaus_2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'Au_d_GSz4NmHYobsP2l{)2|1v|XBQvNKdS/}9]6(|*3XJ|kd}Vbd.Sef[XFvmGO%' );
define( 'SECURE_AUTH_KEY',  'OwYHbgW5A(N*bC-j4Syj>oa5Do~P/C+/&7w@a&0EJL,7+crD8uvy,z_H^mmi~dC|' );
define( 'LOGGED_IN_KEY',    ']M?jsvu@W:[=$r}l?|H`FEO4JXu`.5Vps+2T}}CE]x{x= -o)TKf$M=y_=Me.Rc>' );
define( 'NONCE_KEY',        'eZFYAhp$~Dz9tR5I2K,X6&g8KL}bz[GuVFgL3uy?Nuv&5>(kvDdLP3z-Lv$[C+Hg' );
define( 'AUTH_SALT',        '@~D[5:Ed,x0|`(SO^8D`6TK-C7`i-I`8VC{3yz8[7i&O#U4!.b,EO_JpO@)D*kzn' );
define( 'SECURE_AUTH_SALT', ')46!c]D-;ey0@-XF4Fxu9/DKW4`r0%#`a15=L|lD/#$eK}x,Zb^-RaD^NE[WV 0V' );
define( 'LOGGED_IN_SALT',   '3YV>@Q@5;,utZI>%w_JZzsf<cb&zR>NlNQ9G;p%FqnwX+,cL9Pt/rWX31Iiw{~~Q' );
define( 'NONCE_SALT',       ';_vkv=>P&Mx!|G/cH1gp?IaY5R5dK,v&#lb3!L5Gi8oVgAP,}u.Y=@RrCcBfTW=L' );

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
