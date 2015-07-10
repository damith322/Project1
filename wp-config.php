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
define('DB_NAME', 'wp_mamas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'V8E5&8b>eUKpIYzl]d&K|&vnuWC]h,BiW!@Kw-OE57s&S,t+<C:DaQEyL8GeVfwL');
define('SECURE_AUTH_KEY',  '*+{[-~%2s$@t&@32tZ:Jyh@VQfz l3Mw)kf)?L_uEb?IHsvq/.axE9.mI_-G)G/e');
define('LOGGED_IN_KEY',    'h99<9Cv5gykg2EA1kP]6.<trx5hPI;wVnCLzUv0@+<?|T, 1V;POmb^jdv.>.}N/');
define('NONCE_KEY',        '}WhDP/YvnD`(VLMaw?}^Bb,_m:cI}qX*|YDq@LiZ+%^Py(@N/_FY?EoSsD0 :`p,');
define('AUTH_SALT',        '^8wfw)S ,)+>ZQto[iA!-?sY{<k20Y;T{X=k1;3~9E&?[`5Xq:!u3u@T 53v8KSX');
define('SECURE_AUTH_SALT', '$<#N#P%+%y04sAR#-g&S*_>S!8q7``5,h%C*O(Vh{5BKdmI^^qBXtm|+rrE8`Z0,');
define('LOGGED_IN_SALT',   '5O/LY^oTV8GMuOL/!H7!nfo+.N_$~}*ne=|kbWD-9r o;T1hJ/V9AyWjo@NBU5|J');
define('NONCE_SALT',       '%Ns[~7*OTr)~bYA~5aeb>obDS6m%%}24#PNV7)6PSF4K2X[1-Q,acU9&@Z3Y,8MQ');

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
