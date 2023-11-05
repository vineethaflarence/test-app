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
define( 'DB_NAME', 'test-app' );

/** Database username */
define( 'DB_USER', 'test-app' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'KVxV(px=Pq.^+Gu<e#9-lUwt:0)_4x2*uKFN_n6oNhX3NSaw<Za.!OhP$l)&Z>F{' );
define( 'SECURE_AUTH_KEY',  'W3?fORysF_lUOdErRctW.qoVDZ`:~2!(<)EePJLm=-#$6i4{W]PK(k8LHno=t14x' );
define( 'LOGGED_IN_KEY',    'DD%0or+6(RiD k9kDCWzN;5Ld]VdW?|?kWZ>xv`8zZah{*[Z#.)}??=Hw|W:|%E!' );
define( 'NONCE_KEY',        '-c$nLqvw7v22G>TO&L6e)tpJlH26M%EJ<x[TFjmlu6d&3IT6_ac-m~?_eAD. A:8' );
define( 'AUTH_SALT',        'LvzQH*/b(Ge-z|xuZZx~Y%xZ778vWOhM+Zc?I=+2xvS.z$_NXDfkB0$|#K4a#jw%' );
define( 'SECURE_AUTH_SALT', 'NmV=;{B}s,N>rirdVdNa.sK_v9s^>:+e/pLcsw)8> iIeWTR.pOpunon.[7j&Q s' );
define( 'LOGGED_IN_SALT',   '<n Kfxp~ra3;~Y+k55]#_L&>4L^z}} ^fn4,z.!htS*Y<x1y6Z4Fwy&6Jc>V($xM' );
define( 'NONCE_SALT',       'wcMgO:{2pR<os&d$[z`gbx2^x}WR9$soQb181VvX$.x2C;AZ}7y7s{h8<k;9|<mP' );

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
