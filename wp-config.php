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
define( 'DB_NAME', 'wpdatabase' );

/** Database username */
define( 'DB_USER', 'almir' );

/** Database password */
define( 'DB_PASSWORD', 'almir' );

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
define( 'AUTH_KEY',         'wK%r>?5jWRVzCfe4;Kdi9}#D}.V#=`ITs9Rx tz0Ve,*m8e+GIa=fF[8|%kt(0=L' );
define( 'SECURE_AUTH_KEY',  '*giF.u~>oz)Y~NK82|DtkRZq;$hsq?X~.&j~yc3uc*^^|Txci:GR=^pL;=isD#/b' );
define( 'LOGGED_IN_KEY',    'L}n-^WaLy=cZ:Z||~5q4w<%K:B64nBx4r6y}dUK?wTA.vvX7]b2NbkyhqnNXUGnk' );
define( 'NONCE_KEY',        'S$$H9>7Fz1n<#4=_@Q;@C|*)>9[8fx&G-],o~WoNnp^)M5K&.Z(/OVgr>BJ/{H}$' );
define( 'AUTH_SALT',        '}>q|#g2?RWbO{fk{(JsQcc<^*J/O*]Yal,}@NS]Aiv=`JooB0CIlgd~a]ZH2a9um' );
define( 'SECURE_AUTH_SALT', 'cyqV3IToSbw)w@#ub>Vd^)r:0|Z9-{WakB<aE>gU?)z6YQws*q@,|/yKm7_H$|{A' );
define( 'LOGGED_IN_SALT',   '6Mwf3j{w35N}@#yx*#x!Z1iKy <)YI=4}V2B|tFC*7V}|%zOodR7/t*G3]@!P@d?' );
define( 'NONCE_SALT',       'IY2]F@H]UM&d|s-CjYORnR2n7pd+UT7qg`ZfgELv{QNcwAoy~!8PIDt<u#Do)^9B' );

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
