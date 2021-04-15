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
define( 'DB_NAME', 'kidney_center' );

/** MySQL database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         ']hv3JVM>wC`uMM^93g!L1J9D}.umWI0vs,velW_wIUy~1*qavTG}VXJr=u;$8w*>' );
define( 'SECURE_AUTH_KEY',  'qh{WJ;y.Zu{ur`oAGa?Jw(AowN;)11v^<QCK21h7pq;n<ymbGMls b.4#i*R8DlC' );
define( 'LOGGED_IN_KEY',    'Q[:{$2!ak]4D0C[Iet2Z!#3=_L<78jWVg%:fTO`V`O]?/.BPoks>B:LuFTp;)sd`' );
define( 'NONCE_KEY',        'V9#p`hIBmf[MoOK9pb1_4Y]xOCwFEO{1Z?lFgQU?dE-T8M8!T1$*qI0YH KuZ{6K' );
define( 'AUTH_SALT',        'Ef,Msvv][OPQ`=q<YZuSJon_FRU=dwE)v4miP!- aV`rh_mc!6iO)e,uRCTF9ED+' );
define( 'SECURE_AUTH_SALT', '*2#K|X,4^ddRn US>-IP8R@,/)>c`hFZ65`h84Nx sEw##Y+h}C#Mh<c(?SO!zGT' );
define( 'LOGGED_IN_SALT',   'yR .udp8p^ v2x;f#z:j5OlW|7;+!7KRWP7W.2HBZmiU|^@yOk  Dy,iH;kUnF>5' );
define( 'NONCE_SALT',       ',E`CR$ 5e<H!xV1q(<:xpabA:|R^%-}4 @#p.xdPzASwp^;EPYFeNPl)vBIgV-wn' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hksc_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
