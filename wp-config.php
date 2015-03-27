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
define('DB_NAME', 'bcl');

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
define('AUTH_KEY',         'a>$<UbLAk:FnxYl+>K[qVjcn_X[-e%9G7yb^;!?| JIRc$pRN%[qHeVPaTFmmCo+');
define('SECURE_AUTH_KEY',  'c/CY_B[nohAZRD6yG=-<J,h+!v[s vMW)My kpr?-vjX-6hm,yN`2&oO^63PI 0%');
define('LOGGED_IN_KEY',    '&}X|t&Y3D/ 1g|<?$yqtrD*)xV?-[:JzgmZi;>)Sa/MY@*+<1a<MLg;6wiXASqL]');
define('NONCE_KEY',        '-oMl[8qZ>w,a5/5SWi@iyRQ!t=d8~j`h Gg}%CCGIT8Ul`xhZ^v@D_0HGj$@]~H*');
define('AUTH_SALT',        '@%}Lep?rex;!?6RgiGzfeHxWJ*>ThK`J]+%8f tGpLM =;@$(MjgzUWo%tHO3`Yo');
define('SECURE_AUTH_SALT', '([|bb/]4(|pVt5v@C3<BAx_>UbA5=xfST*Jj:-XyIz+}#l+xz=Li1UPU-kwP&{&#');
define('LOGGED_IN_SALT',   '-r9~#-n8#eQMTkzkV+@ve!L#egsd8Y~$m+ZA|5%6|qHS( )^_z5V]QzV+z)<cacx');
define('NONCE_SALT',       'X^K6I=uE}%#=7oU,Eb]9Q=^Hhx75}t.HbJi&eybi-^|hMV,B~y>g@Mw0)34Ai:Q[');

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