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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'vvB%&OX  ctMo+X#|F5X*GJH%yl ?(dl/. P<FKyFu,Y0-HEAQ93M<>kMmbJM)/f');
define('SECURE_AUTH_KEY',  'VRF jJJ0QmmISW`h<P%!{73tm}{;0wM21[_2i(k<0z$EJL?-;WFkD2[k4VD~>V{*');
define('LOGGED_IN_KEY',    '6:@WS:cMqG5[4kwVzYP`|TkmX_&t^Hn){pH{;X1$snS6Hf4`w*d3&{tp6Y Kk1BK');
define('NONCE_KEY',        '(E7MTB%}Nw[e|,CpWU&V(MD,;RB~rcxir[pK]no;z;vo:^6;Kg~7y;1!2(o2,3]*');
define('AUTH_SALT',        '5CuF.nt/[NG[H%c&:QJdXv{Pi9Pm0=G<7,w*`~%5<TD~mh0wXZ78[*/TQ ?Wh-PU');
define('SECURE_AUTH_SALT', '[1<}|9njdu>2R@TF^zf&Od@)rN6J~9z9k?@O,zT(y$-B(pWtBdEf@`S{q)i|f]cK');
define('LOGGED_IN_SALT',   'jb#P*#R/]@Zz;~!eXhGfN]x)gKJbAuM+K#2a5^f#KJ6U5uBZgB)U{GjQq((;GKv<');
define('NONCE_SALT',       '|uE55&az+juuBI>G<tXZ,KmA I(t+$jv!MZ773;<?miCl@[a8V%1l#|T>=8$S`Lk');

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
