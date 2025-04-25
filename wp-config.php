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
define( 'AUTH_KEY',         'A9g7AN0.ZyHV{=7r3HPcWkEQP3&g!pR4p|/5`IJPt6(d8x^`a#e3=vIb/a8lt>wj' );
define( 'SECURE_AUTH_KEY',  'C g>uG]q:_)96VDmqB2G4%.TJQ[!9sV`4L/k6ha,D#xloD9H$p[u/lj&ajyu$]cc' );
define( 'LOGGED_IN_KEY',    'EI>Mw!q<9P/;hBxTH4qE?;>m17W/.0>.|!<JP>2FF|hR/9[jS4mayY*jzpWGAm[J' );
define( 'NONCE_KEY',        'BuR&Qc6+B-PF8Ik_%LIS^:E)vj1p[,sDxllo3E)w}O6FbH-^L{|$YMKTByf%_ky:' );
define( 'AUTH_SALT',        '1XMlF4Pls%P4_WIX;Gm8@uPCy0!A8`v)C<1Nylf{/_#$* XHCltb-2gyX3BVoa)9' );
define( 'SECURE_AUTH_SALT', 'N0o^HZo6$Q4JmPiF<S#JYeh>5=%N%Ny@N:8fkcjYvMY[W)GNw99x#2hz[Qwi&|`T' );
define( 'LOGGED_IN_SALT',   'fGt7n[;;kI/`g}1t/]M`!$$t-l=`}eP;)G=.?ttj?KrE<|<BfCxBlkkV.W?FsxOd' );
define( 'NONCE_SALT',       '%sd^<JuitZDT[vHX-5 (%5zt><<FglB|NWMwex[Lc<}G78*iD_^|xnlG0JSK^-tq' );

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
