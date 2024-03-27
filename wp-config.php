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
define( 'DB_NAME', 'nathalie-mota' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'c,LmQg{GaTnrGQ)kkFhWPDH<t7zIr!QGP8#tiwM8_M4N2?_DuuVRqnlW[:xE?(`U' );
define( 'SECURE_AUTH_KEY',  ';e}lVCn+0Mb.5p+XbhiE$]TvqP/i4U7=z>KQf32hlp>(]FSya7*[NHg5@Ax(;C`5' );
define( 'LOGGED_IN_KEY',    '#S+4R:Sd3.+r7[2SYqn{6T`nJ{A1j7sJYKk~t6F;uHq+xhVgY%d)-3m5_l8aP(C,' );
define( 'NONCE_KEY',        '^&j*~5h+OSHH)lKFhh0-GCVmN47n>LMJfKyX;8po6c)0I+[,CG``vm.}-j4X5o)y' );
define( 'AUTH_SALT',        '@zM2|3p)+.@E.>/%Zz!fm^[|*:U6V)WSUl$t%^}d{]qNZjm~D3Toq(DWpQ~m)YVm' );
define( 'SECURE_AUTH_SALT', 'te$*#I?BfG>C:e0z^zr%58<!7VbzJIkfE&vr/_051cD9FEqO<,70Xw-4Bn3tL~k+' );
define( 'LOGGED_IN_SALT',   'bLmsg1)OGaYXJu5WjB+%OZ8z3uS?x|N_MHhQ=n6_rrf^ls![An2Ipye/^/G^]V2K' );
define( 'NONCE_SALT',       '<2t=LRoG|]>iFOR+.6nh#oiVP_XN}>zCj:gK6Zhs|]@F p0$}>.?s==*.m5^jWU ' );

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
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
