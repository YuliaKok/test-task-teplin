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
define( 'DB_NAME', 'test1' );

/** Database username */
define( 'DB_USER', 'test1' );

/** Database password */
define( 'DB_PASSWORD', 'test12345' );

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
define( 'AUTH_KEY',         'xdIfNp%no]_9ss{f<S@:H-,t~QnM+k$K9nwUeDgDqz_C!,9truPts%0KhN^p=,f@' );
define( 'SECURE_AUTH_KEY',  'ZM,qNZP<uUf4S)xj^{~r4K0v}+itCi:h ,X CWLnwN/{@]Iu3?1X/SUmb~@uz)5y' );
define( 'LOGGED_IN_KEY',    'jH#1_SCO(J7u*BTMroS2jw3g+.F23z5s!wNAN],n<~Ug72Llx_dAUa=H[VVNZ!I}' );
define( 'NONCE_KEY',        '{J?^Mi3$QOjd4[q)>X}ERy{r&S6%Pd-*pI0e3u7 YwLJ,][F|/Cai9I:qHw>MHsm' );
define( 'AUTH_SALT',        'y<r:mz!F;Z6T]93A/)UvNg=1FV=_.H~vj@M!qe c_UEQT>Dv9ntN-ea+%johR^/u' );
define( 'SECURE_AUTH_SALT', 'lmj:dc9Xp?^k@B4aGhM(*!.w>1[`t)H`_:lEe}x2V>7~R.a^KsR)UL(^Y31C^3qO' );
define( 'LOGGED_IN_SALT',   'edU7TFdx{Ft_}HTP;6sz<OC>,[BWW:T)rV.mAY2;Q~yA<rLw92c[ N3};mIb6bEO' );
define( 'NONCE_SALT',       'z:2Z15OF24wAIetN=<l$cw>+s/5dbiziaW`<Rm[?f5 )jsE^hJ9~Hf9cv]c..n>u' );

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

define('DISABLE_WP_CRON', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
