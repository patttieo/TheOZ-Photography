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
define('DB_NAME', 'theoz');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '}nO3gg^-%!VX/.e^:^r)RJ!_s=iH<tIdLt2SVd$NO/*ln|#rt(0!K%#)7`h6DADW');
define('SECURE_AUTH_KEY',  'g/}Tg#2^<Kl2Ai,-nYT_x`00w.B6LV+JWnSE=NQi#[=!urU<^v12Pi%>_~K~]K0]');
define('LOGGED_IN_KEY',    'Gv&2zF3xx*;FW,!@(L:2xiPzl-:dY:zm47X{:h4Eb;LC|,F;x4V8HMN+xoLdAki>');
define('NONCE_KEY',        'DE`M#-[8O>AMMAWEuM>X(d%Kr:7F-2 n_(d[xeeRbt#r>W:1]~L%sb)NN}52_E6]');
define('AUTH_SALT',        'BF+pu~:YwYA>7gLYH{M[R~E<)[[En?f`?MB-Z0(nZ%}uc]UMa1TMoUX%BJfoR-G7');
define('SECURE_AUTH_SALT', 'UStwT|Z3y3Bmitoul0b@TAMJN#Hv`#{Ch*@-,GGi -~Scs.z:$i1S/dd<1mB]8CO');
define('LOGGED_IN_SALT',   'r-}tcR-s>Api5CO,USV:Z@c@%t+O--U(=fBC:ar4N5KY|+hJw(kGS~NDlo;[us0y');
define('NONCE_SALT',       '=G`I{@(J~;e,8mG7ZJWdgph>LvA4%]RXjakUvm8GJT}&`[,[oMlmOp=,xn]`RV}V');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_root';

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
