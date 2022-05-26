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
define( 'AUTH_KEY',         'X-CFvnqbP<1G_qn+CwhdM}PiOf9AeL!u>_3^Bq|r0U-oTt|A@=+<l0&-_XC<nyVD' );
define( 'SECURE_AUTH_KEY',  'G9BOif JH5dS{yo#QxIOaKm{3,.;G,wYkD B{{!V7%M./BeZwHS|+1?cUznw,^z8' );
define( 'LOGGED_IN_KEY',    'Vf:n~.6SJLTqAhhd?Cu|T=x2$ WQuKNqi|EnfEYy|D LinOefkyb$2KhSinsO#VL' );
define( 'NONCE_KEY',        'TmEL{RB;u1X=a$W.s0H$Tfrniu9Rsoc7-dc$c4;)50`_CM9|94[~N:n}#:77Y~lG' );
define( 'AUTH_SALT',        'qt)A)w.26!2&wg(8Z~$1F`qsRyjx{n3]iMKXs+;-:Z<<b{NE`n_VO$[59KJ$4al{' );
define( 'SECURE_AUTH_SALT', '{:oS+0?RqX/jr!%^4@-^]QdMQ,z~~DR_6zVC^C <Udl[!w; $<,Si6&c:t1[J0Jm' );
define( 'LOGGED_IN_SALT',   '_(|~%][#G>Z?LN^voXYH^8e3MBid@%_)1dulG7@=DdKwhaldr[+bL0gVnYTH^OcY' );
define( 'NONCE_SALT',       '{gW3mpAL= H_/ BRp%rM/10y[7~I1K/[Qv3xJ9U4Jo|~wEo!zx A:X:A&qCD-P4t' );

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
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
