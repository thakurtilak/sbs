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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sbs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L?&q9K,*Qv;Exy~OlIOR=kz;d4hf=r{||~1V|ZJwOf8.:`qw>.vN_$np/MPX#dx9');
define('SECURE_AUTH_KEY',  'h5{HR fFR,Lg:Q)^yiBW10&?@fVa<SuR$t{Beh!Vsk<Qhpadq$*1OrOPoiIgW^Wg');
define('LOGGED_IN_KEY',    '9N_gj;#rf}o;S1mdi[YO$s:6eLv%OES[9OX/;GcOA{tTZFZTR?4|`UN.rO6?ooqi');
define('NONCE_KEY',        'E#QKX~-j@PEf=Xc`shnVY__A3ULM_vbnQ]H=Sx?9>2G/}Kjx]T:#xX:1{#R-+]D(');
define('AUTH_SALT',        '26-TDNPInU36Wdrv/J_cmIBwV3A;)-o2dc)@{_W}+[18l[!Df-$^m);g+vw@(hB`');
define('SECURE_AUTH_SALT', 'Qhe[z @:Y_c<{lyfsU#gC#:{SH0<X;9:b-`#j:u+y6aEJiuI|`{f|VMK@h3E(fM~');
define('LOGGED_IN_SALT',   'C~5r (N^]c-}4,jFi;^DW*q*pxI~0}^8@v&WA.FGG-EA83` wNXNedAplT839p/k');
define('NONCE_SALT',       'C-_wf3|.l8d;k@N_3D3L9dbd|Ip1L*+!_&hB6!4x!?MIkpGa}Uq{[>glHo=.X>xg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
