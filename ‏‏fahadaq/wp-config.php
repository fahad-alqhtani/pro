<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fahadaq' );

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
define( 'AUTH_KEY',         ',Sx4xW]u$0i:dAm:<@8:-JY[=& QzO;1-3aU4yQa l]iPw=4,[b:{4PpEqr`ISf$' );
define( 'SECURE_AUTH_KEY',  'E/+jXRqWPp>t%S(nd#=^5}W=8k3h$!6Hbyr#HTaknPtJ9Uz07t.{9k!C-3}r[g H' );
define( 'LOGGED_IN_KEY',    '}njK5eqNNLw.-dY<>`=&^U ?~}0ZE~U%wf?:mY#X?in=:`cbC8Whfl%|{3s%eRzy' );
define( 'NONCE_KEY',        '}k1gS;iV.hQ=?&fYj=k>/9ti3.@%JG$:-)Fi(64c]F9A:@f!f7scavXe}6cC/S{J' );
define( 'AUTH_SALT',        'JdrVH}6 s3U<PHskVK:#Y_=1ii~^?Vp7sxIxOb/9NlZ}pbtH4bWYk!p~^y+l)&14' );
define( 'SECURE_AUTH_SALT', '.JB5$Sv_MXAV)EyujarVs7;&-v8ZgHYzoV2n_d `h%rmXXG.8/[C2,rMDQ E`QR^' );
define( 'LOGGED_IN_SALT',   'Hi:LG&lu-keA0RrNx }DRHs{^oVLy>3>toed.xu<O.3N5,ex8eE~{vzlli+?6a^w' );
define( 'NONCE_SALT',       ']`yZNiW,4gbA$>]]}]`UlY#ydEffaIE@QARhdGnZ}f@~kmkM._9wRYC J]Y;A|1i' );

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
