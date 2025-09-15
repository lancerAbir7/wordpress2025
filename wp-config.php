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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lessonDB' );

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
define( 'AUTH_KEY',         'O(oD&V>(f&v3$;];w wIz>7FzHPQx>t/$9S*-0%^?.fJeb~_[53gy0:|Gtj!ssKz' );
define( 'SECURE_AUTH_KEY',  '<?wIGiK~uM&EMGDJY>8-*ivsA!-)XMF:s3TB~ZT|bvAJ<hiwuit0?W}Kh+;4[UYk' );
define( 'LOGGED_IN_KEY',    '_xC0gsC!>e?pO[h44~48iflGC+1m7:R`TMo>on+FaC]?U,14J[$wgYF;dO`{e1YN' );
define( 'NONCE_KEY',        'TU{(9iVS5L)R*v9Bf6uzViN/dU]Tl9&Lp18mvX3[p9|.vqM}1I8A> 7sK#HYR?5$' );
define( 'AUTH_SALT',        '4VsCb.kQ1SSO_[84~{-vzir?!-^hi_w1(a8)1=,8qoX@0PWDyZ9QHOsAI]Tlb+}l' );
define( 'SECURE_AUTH_SALT', '3~=;fkYm]R0tDN-S6:#`Q]gA7Y:URLbEDt1/@)K|{jrT*i-l#IKEdn)I%XFQB?#j' );
define( 'LOGGED_IN_SALT',   'uY{ImLZHM-9Wl.ZlX4C+Xel%HpK_5VGkr5qfr. ~}oXm<b.hx>U+J 77dV95xzy1' );
define( 'NONCE_SALT',       'j4X_B&#s-}8Q&W PdT8TX4IxSC@7(`Je.yW.5caNUOOGw4cJs9ROWCZ4pb[rtA[r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'less_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
