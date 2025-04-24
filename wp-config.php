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
define( 'DB_NAME', 'fresh_blog_2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '#Test123@@#' );

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
define( 'AUTH_KEY',         'SsE?u{VsS_.-dHlkXKSWsoEJk 8TN&(@]wtoAOlhd`pdxiA<Y0V.dWx*!3]~YbzE' );
define( 'SECURE_AUTH_KEY',  'W+nw,f(NdWwPS6lc#:fks3b<:4`s!gc&cX4>nr$!]H-0H@Zw%u2(,AYdN:5iR7%G' );
define( 'LOGGED_IN_KEY',    'ft`oF$2&;[Owh*D7Aj6&Y0+*/*at[^5;9zo.Ll?yW#Gfh,VTzF)nC79<&m3nEduz' );
define( 'NONCE_KEY',        '_bA`xoQ ~IG7%cbdu#MV/{~N3]Byc}94BY0c==M&zx!SWaA@jrLkncnlqijW! Ar' );
define( 'AUTH_SALT',        '7W2c:SZbjR+_8]A9)ZuRADlhLR{]pjZ0$sMjR)~t!49D&NM.Yv:TZ%m]yE1Lf^Y|' );
define( 'SECURE_AUTH_SALT', '5Q6yzu5;t?S3r^ :>fo7,(kGK.Jvpgc^RnSk`H{gh/e<791#&yJh/>~V2mA)fI7_' );
define( 'LOGGED_IN_SALT',   '9}2vvmi@-)lZ1tc5/!f5$l rcjW}F:h/V-jy8QDbHaIm1IW` j?tq{Y*MEC+1=|~' );
define( 'NONCE_SALT',       '`GR)^}SZb97K</P%y6ln~n;B{_ZPkV8N Mg8ExjS`JMlXKF2lG=/E>i@sS,pA xf' );

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
