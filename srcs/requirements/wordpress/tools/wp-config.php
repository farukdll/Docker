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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'fpektas');

/** Database password */
define( 'DB_PASSWORD', '12345');

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

//** Redis cache settings. */
define('WP_CACHE', true);
define('WP_CACHE_KEY_SALT', 'fpektas@farukdll.com');

//** Try Redis container */
define('WP_REDIS_HOST', 'redis');
define('WP_REDIS_PORT', 6379);
// define( 'WP_REDIS_PASSWORD', '$REDIS_PWD' );
define('WP_REDIS_TIMEOUT', 1);
define('WP_REDIS_READ_TIMEOUT', 1);
define('WP_REDIS_DATABASE', 0);

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
define('AUTH_KEY',         'yf2k[~%6Y-H}Nl>2ZD4t<+Rp#dD~ rO|sWl`Qal_m-APzz:-o{,G^/muMhCWF A;');
define('SECURE_AUTH_KEY',  'LP~SrjDmZ,u_-DJqV/l|iJC%PSsy)IkVK ETuVu&pn`AX%y]&UA38s0_5oTsAL C');
define('LOGGED_IN_KEY',    '0,5Mb_F%S=O~,N6-)-FirWRI vjc?eZ`kT5bA9|NE w0i.:k=ZPV5dl2~1#aj>xL');
define('NONCE_KEY',        'VUn1nnaf|=!7e{CpDi1=Lit8lNXlf#alX2q:G:xx0R|L04Jwy]6OXw7:||SkO#o=');
define('AUTH_SALT',        '8MULg1pe<5Wa^$?#G&7uw+Xr+:D4@M+|.eomTZ:jc+MHNI5c<H:+Ktk!1I36R#m*');
define('SECURE_AUTH_SALT', '3)kzM#]DGH(1<-Bx}Nl-#ry^dBfZuC=aV7NwC]y _8b:IsH3`2~[or%k d##@+5N');
define('LOGGED_IN_SALT',   '_ueBzx7hTm[O4a[cXWhy!_5K(Cv<*p&|(3UAA~+^m!!HB+^Y]]hHwVi]`$8EXA7h');
define('NONCE_SALT',       '?o2j|kHH.-tqJHIp00GYb#Rf.lA*^Q[+~0}/+j>1(&||>ST)o~+w,h=S/3;a.+n4');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
