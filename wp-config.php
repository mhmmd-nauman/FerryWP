<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Borkes');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'jsmIv68`4w6($c17bHjOm65I&Hjiq Sb`_tS`:X|I$u@^-]Z6ZmQ_<L2$G1.9(e+');
define('SECURE_AUTH_KEY',  'lZ^EJ|15tLpK`EQ*:Zay3CEB~z<6o(Mb@rc%Fs5}CeP^^-2sY^m;Rz5)wl?onO.5');
define('LOGGED_IN_KEY',    'Lv+|&;VhS$Cj=k6ruON#mW:T0_O*I5J]/X h?~]A~=+4Vmbd!o@z3^wViu c_b?l');
define('NONCE_KEY',        'K$OwRy)[Rs].k [s$Ns}P$RyU?b-{jy!;-m3=^nm-1^BL3;2[ HO$3~x^+:=bo{U');
define('AUTH_SALT',        ']K(y1oYc[kwTPJ442V93O$T;aME^^.JCqZeJc%nl4M.Ro?,DdrkVEdKBSu[pb@`(');
define('SECURE_AUTH_SALT', 'weBz%K$fp3&`Ke`(:85sT11=a)|l2PkjBFjuj$0q$AGjzZ@f(=sLbb`t*q+~2u)|');
define('LOGGED_IN_SALT',   '- W:+S`3wyj;N*csTk|nLX(*2Q@hkVna%1L;*w)ebm4$^9SwXLJ?oZr[^dXl){!!');
define('NONCE_SALT',       'E$#I05V/V+uj;<&5{AQt#kB<0$7wa:+:-34;/fuJK(wd+N-+v)OY vQJzmif2#<r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
