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
define( 'DB_NAME', 'smilekyosei_wphome' );
//define( 'DB_NAME', 'smile_wphome' );

/** Database username */
define( 'DB_USER', 'smileshika' );

/** Database password */
define( 'DB_PASSWORD', 'c3wRSM_MKxt9yfb5' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );
//define( 'DB_HOST', 'mysql742.db.sakura.ne.jp' );

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
define( 'AUTH_KEY',         'qO1e;:^@wt{!}j4f?[=G{8Td5Ec1Jz?5Zrw^>Q*HnsUhGagymR=SBM[0/8naA1%|' );
define( 'SECURE_AUTH_KEY',  'r^X&;|!V1Tp|!ndUk u:U}EfK<+6brNQ(6J!ogU(di5n+i?($Wep7lmAAz d8Kq1' );
define( 'LOGGED_IN_KEY',    '%b(},1WqUdPv?JWKrRK9: I/_ 51]#Dw,!y<qowVq1]|&VZCeyEqmdt_d379pR/0' );
define( 'NONCE_KEY',        'O/|zp;~4cOjh!%n} *nZ0Ju(63A;yV66IAjT|y=!k+T`Rpu__Om-vcc&@/xNn>`+' );
define( 'AUTH_SALT',        '%T%3+]w4MZ,_|[Nb*E-/?pt2Le2=g%Qp}w72fDZB|{}0z&@;<%g_O1Y/v7AG6+g7' );
define( 'SECURE_AUTH_SALT', '9{|(YF!H.Y8az:g:?@j=7UyfQl0L>I^a[GuVwLq@ZmHNC5uN!y%=g2bpFi~ymg2B' );
define( 'LOGGED_IN_SALT',   'D3k`KS}~&1 (:]2/YBZ(:ZGnJrnDY<QbE0LCk3]Sh9;U~mJ%.YDIoge{aGI w/is' );
define( 'NONCE_SALT',       'lX%^V4%ks_}JK),<$3xNxj%@AsZ?VWgE_iO=- K)H:/OVlU9i2C7WV~`w,6GuOwp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_column_';

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

/** 自動更新を停止 */
define( 'WP_AUTO_UPDATE_CORE', false );

/** wp-cronを停止 */
define( 'DISABLE_WP_CRON', true );

/** リビジョンの回数制限 */
define( 'WP_POST_REVISIONS', 5 );

/** 自動保存の間隔（秒） */
define( 'AUTOSAVE_INTERVAL', 1800 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
