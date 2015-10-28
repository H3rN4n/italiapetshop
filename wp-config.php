<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'petshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:8889');

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
define('AUTH_KEY',         'Y<}O^o_qOgK|jcDB$gP&WB8*2gt,IAbXjP ]g+W|~k!|{e=H~/,@W*s#a!aj<)?*');
define('SECURE_AUTH_KEY',  ':.GcASK}*+CYq`h&DWabo6sF+]0xc-|ZpgE<8tHl-)`,/vaYS?SU7mfWR#&/kPLu');
define('LOGGED_IN_KEY',    'xk&Z:[w`@{NZlX_S74zHhL*+(nP$1X@{^Pda!(|LJK-T{j[ENq`SCpiXR5W*MN!U');
define('NONCE_KEY',        'uTt Yk0mlpu}@A6?IZVByd(?jWW%jN$+u-?@W!9}Ep[b2D{4T]<lLhA@FJO0@fq)');
define('AUTH_SALT',        'qM^Z&Ry]Ar04_$@D V;f&+ -$(z@a9&Q+qW2<@7hjA;+T+7yBh)&+-N|+O0S-Fr)');
define('SECURE_AUTH_SALT', 'qppo:!iX%}jw-|v8yvSFk4U$pYoHXN/z~C][FK=|)Rh)]BE}e 72eSg:odQ|y|D}');
define('LOGGED_IN_SALT',   '-C>J+/ahK,-4&>XeLa>INoR3rFEJ#rg}:nKKax,7l8p*>SJnbs:d0WoRLz>$6%gl');
define('NONCE_SALT',       ';w8#K^5iW,/v2Vj:xPEB-+N]pxQbV0}z2RE:4JA0dG7c=>.fW7xAA}<Ogpr-@SYE');

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
