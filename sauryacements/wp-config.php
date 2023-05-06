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
define( 'DB_NAME', 'scpl_webdb' );

/** MySQL database username */
define( 'DB_USER', 'scpl_dbuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p@ssw0rd' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'SRkiH8sff1X4dC;XyI_mcafp;|!}I*O.S>z0^hgqlFm|S|O2O9?*LvtX 2i;R)H&' );
define( 'SECURE_AUTH_KEY',  '{SeItO5&oj.@TYrWAr;gmTCS^|d194pY.K#-_rfG}9}pCzDNB(T8OA8!pEqc<`tj' );
define( 'LOGGED_IN_KEY',    'd5id2bt>7}K:7-yeahKb-,12O]H6ofQG?wK5hn0J3a ,|0k^T06KYPe!Tbe*zB/`' );
define( 'NONCE_KEY',        '%~KXZb%(vb;bJ_!1RH.z6EmiGf*.6yFknQb|OacY=b[oBTgnx+tWGehPwCP#*Mz7' );
define( 'AUTH_SALT',        'AF+W_):i%WMk jF/3XDEW?kdq#%^a;#C#sRSD*-&xnV69_T~9YkNQ0Xed#bYoO63' );
define( 'SECURE_AUTH_SALT', 'iH1=pij<ti09mvu<_x(FDXwFvQOzA)VhRkU.}@|T)H%~074o0+~G9?r_rj%`[syj' );
define( 'LOGGED_IN_SALT',   '*H I`lQCS%44z-Uw>s|(<puU3]b,VxPrG!6qTwcYSSa>n@mO#+|Oj,ot%j$I$^J8' );
define( 'NONCE_SALT',       '?(x-P}f_?]xw%D?S)!4!0N;i*Wt70z7V*lV{qC~kF 9n] Qf]f/nRHZ-~*z4Yzc=' );

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
