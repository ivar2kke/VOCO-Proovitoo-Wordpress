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
define( 'DB_NAME', 'proovitoo_wordpress' );

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
define( 'AUTH_KEY',         'wtqt(BqjD r7c6s(b3&?xwriY]sY4:6k!P!VEHyoB:96Y~pmCO<Ozm}6YOL:3 4X' );
define( 'SECURE_AUTH_KEY',  'DO<kcRAi5O)Y]*0*b4.:Q~v%7DRb0-nb>RnFP`X$TpQZ(YCtzkyGqyW/9uh]dAzC' );
define( 'LOGGED_IN_KEY',    '%4VxOjSAd+LAv@._brBa&Mt48mpZ9O=.$TP,yb(-?s<UD*aP u|KSI{BXM:G={6U' );
define( 'NONCE_KEY',        '5Pmo><_Y938:)<iF-],Wef,+,!>bwJnP,;n7?g)*_d14xcbJX0W?@m:(=C~GxQk*' );
define( 'AUTH_SALT',        'ukC8.vfTy&$zek=,0`9g,j;8h7twsrF$_{Cr$I0vU1*9#a=@uJzcU]&1QyB)O fd' );
define( 'SECURE_AUTH_SALT', 'qn9>SvS&2`KTaoD<[4L[T)/wQ2/T[Ms0W565IazabbK)Y:#Tz%!(2^[KBMk;[Qbj' );
define( 'LOGGED_IN_SALT',   ']0,0Vz81g[%H7xa/~@W9)R>iGv_?8FvBM{)y~,tJMM>U}(((h@8n4}.xlE9/Bd=.' );
define( 'NONCE_SALT',       'g]kPFf6fQStH lc/qq@ GIX4Mx5SOh&BV|<=nh%<1sv_z,!!WqgK V7vvc]vc<LV' );

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
