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
define( 'DB_NAME', 'Database' );

/** Database username */
define( 'DB_USER', 'JJkasim' );

/** Database password */
define( 'DB_PASSWORD', 'Micromax' );

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
define( 'AUTH_KEY',         '/JT]uR|:mE>gAyTO-71W9/izW4U)R.EJP[8|7tr#%.R]5At-gP1BY7O <)cw8ex_' );
define( 'SECURE_AUTH_KEY',  'ZK6L@{ArT>K0&;>J)yX!xg?PDSx;~=z|<]D!PrD1%m0kErq$J0<SYTCy<,jkgID:' );
define( 'LOGGED_IN_KEY',    'bU&|lwb9]M|Y_X:}lObaOH:P0BzH.#n7~_I!@690W-Ce#4`W+>phOd2vRQ|yIyok' );
define( 'NONCE_KEY',        'Nk9s: wO&&-giNy)WPJ0aKc Wxi4xo$2PQ=kH|2HS(|eu^m6rzxP8-}{c7_rhn.L' );
define( 'AUTH_SALT',        'xY9SCnddt&o7+;JCizZ-,3whvTy}*JAVF fPC cgkfuRi+Rh4GS>NSotE(GGaa-{' );
define( 'SECURE_AUTH_SALT', '>hZvbufRMSW9j4d/4vHC-1M&F#tfZx@!b72~I@mr%{<mfGo#(p)+(#H^/IhfwF%;' );
define( 'LOGGED_IN_SALT',   'CL]gD<#qO T+9FOsgq{YjvMZWI[)K*4lxzb`<*jl||^]5I!0WBhOCY;7<c>n;e_`' );
define( 'NONCE_SALT',       '@LvY1izO5y>RkSNg?%Jcxi)p=ImyE.oCh+s0hi)rNXlliY/3%0#utZ7,vPis9c2d' );

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
