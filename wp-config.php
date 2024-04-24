<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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

 define('FS_METHOD', 'direct');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_REDIS_HOST', 'redis_server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );

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
define( 'AUTH_KEY',         'HA`q6>H@=OoTa=CbAOic#+a<^lPvu5$_Qx1VJ;8;<~rr/_,1W/Pz+L~!_R15CXe:' );
define( 'SECURE_AUTH_KEY',  'B]fJ#!wmTdH12?V!Ia[CZhPMdT!+#dMp=$L&bi$e-]:#)nF[eQ~)xr?{/At8x7uH' );
define( 'LOGGED_IN_KEY',    's-?Le$_QV^&x>zXeCs:+?e.w%0-6A;@.m)r~9{lm%|;LZ3>Mx]:[FhI,c5~25]2|' );
define( 'NONCE_KEY',        ':D92(K:}J7xmd)R),kk:f`P^LCeW6MOxWt`6;*nD$N:cW_? IOSu.Sc:_`UE0Ktr' );
define( 'AUTH_SALT',        '.#uQgO4YJ3U](V9|W%BVnsP$^n.h1AjpLZdG:*m@4KE?C=nlMfuBBSB*0>VM35wJ' );
define( 'SECURE_AUTH_SALT', '@]A!jtcIW16++aPy06[+,06RSP*X|-;%,v){7-O7d!=@;bI5/|Z`]I!:tSEH+>rX' );
define( 'LOGGED_IN_SALT',   'rf7337#~12MYprF4LleqAsmuJuwbZat,p?M2n*D1/h*!,+of-yg`Pl@N~:%s^Z{D' );
define( 'NONCE_SALT',       'tIn ueGY2q(.fg+lbN8C%EuSgDsX4E,swP)+$&xf7zB4;%:;p`131W9T*!+Jgc:j' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
