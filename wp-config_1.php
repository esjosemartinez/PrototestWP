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
define('DB_NAME', 'jbit_prototestdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'UCmDvl7ovp80,kS/7613j?[iiL*N2#kW6]V/ik&j/qS+I@+DL0?p*&{3-e]B^aU`');
define('SECURE_AUTH_KEY',  'Lf#o!n,b3Xre]5~N^Rl1/=xV-Og,-|+SsR_`7i-D`CWmqXQ<gU8WWZ9BEVdS#^[u');
define('LOGGED_IN_KEY',    '1a4p`!@Fr$c|Rty.tj4xy8DmJ%a#E!+Qus/p#w/~n;2}LQ*=P@c~.B#!FU7(ZwE3');
define('NONCE_KEY',        'hv]-e_u*<qsNijODqD X4f0KNq&e-]d7@=;|~`N6RAy2mk )HeGVd= Y(}?gz5Z/');
define('AUTH_SALT',        'OlAs=9|qw|Sb.FA]N7h?wm2Lvfgm{o?+D`z5D67w@vop?WOA+QFO-#) +1nW+J0c');
define('SECURE_AUTH_SALT', '9}FtSbFpO+@BtZ={wIec|Nz~AiQ%=~^x!|>fDa25 1^z*v 9cp3Heq.sbL:hV?![');
define('LOGGED_IN_SALT',   '[c1KMhUjrr@s`6+,>jJ|;Z^lk(A7y2N%t)t1;aqR9asm6 s+e~{gCZqX>NUV!mZ#');
define('NONCE_SALT',       'h5;X|2UlI`On34nd[Gi;Q{H(1Lg$.3&O4~.m@Y:-gh_8T413^,~xhl&-x#}RTD)|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'web_';

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
