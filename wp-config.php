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
define( 'DB_NAME', 'androxfy_db' );

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
define( 'AUTH_KEY',         '>7_r2]q`N7cs,sO l=J]ngrtV`8!;)u5D_,&n<5F9t9qaDeI3nfggZTr/QA)%oca' );
define( 'SECURE_AUTH_KEY',  '`H^/-wwEK;&[uPWaUl~AqR82ycLN;9rmOs!.L@my)cq-MO&u{6@^*PNb$KXwyAA#' );
define( 'LOGGED_IN_KEY',    '60#F)|;j8&0KxJ)UT`<cD7wBGC5T(en,i9G?s0T|Q8Go|h!d2Ikm;X#g]epsE3Kv' );
define( 'NONCE_KEY',        'hvUC!xFO`y[1s&/CogxCj;Ca0ec^k@`#cO;%o<t%(Rz*fFmK/}FuG GeL`YG~&>p' );
define( 'AUTH_SALT',        '4l[OR_K6EhPJdJD30FvK_C1vu$%b#^&Ox>gdla0NR]Ot93fP)P-%<C(I>t`(y?OJ' );
define( 'SECURE_AUTH_SALT', '6R+Vg8mSK*GOn&2XT/7#:LIXQx8/tS9W&Cu]{Ka[P?gz^W9T7]v$b=d~bYmpPtK]' );
define( 'LOGGED_IN_SALT',   '|]m+$2.fzd5h6QOs&6]>QIflC=iy&S?Xs[n  +u!P~XS++YGS DTul:r5ul!:EC9' );
define( 'NONCE_SALT',       ')?m>~!z<UZI)Zs WH ?,w#d}86:i7{A841G-#By|YWP3hVLM=gG=n4.Mb0o21_[I' );

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
