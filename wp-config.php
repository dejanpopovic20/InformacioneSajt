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
define( 'AUTH_KEY',         'X}lDTyN>qeN-D`ts|,!(dZpNB+Mzj+iegfS{yx&><hXCD|e[(3`:d3C1:m@tbdzo' );
define( 'SECURE_AUTH_KEY',  'na^m)8RM{S=&|*m2irX~Jy/KRE):qY4fm]TbhM{B:{|=$$Y<@1xuz4}$fH>F;S8?' );
define( 'LOGGED_IN_KEY',    'MMJF9rFCb0`h#QU `Muc)fsaXfFBW?45(yP]B{SeDvhIV)lfFgbG v`E>B ;&`$f' );
define( 'NONCE_KEY',        '.m!a&XT9O/N]Zl>h*;8Il2a*xUzPRxj0o$;3sNW&W$/nN>RwGQ>xg:uY8LpX?bby' );
define( 'AUTH_SALT',        'eTBP`ViE:qDq{$_ZrX`Vv*u:%t}{gqHxmX6^7tg?r6q%(&KWCv8Y@n}KchBeT/V$' );
define( 'SECURE_AUTH_SALT', 'DIfG=[:`<F4,X@w,c#$[BAy1SbKY4oOH`S<K;7_JKt+Q5AruGkS:&My5P0Jf$45^' );
define( 'LOGGED_IN_SALT',   '6#_Ke&<J*4p?}DfVWaoteE[o-]e`xoOvoE;t~2Z{p`fa#l*/J0H94li[P]|?]Xm6' );
define( 'NONCE_SALT',       'kUs~^9-,Oo0y#doBMv|[**0}K>cw]lx~h3w ad1mTtnv4!nbZ^S5dh5]R&bQ]VQP' );

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
