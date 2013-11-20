<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         ';UE-(4>Y}ogbtze9;2(sy]b#3@6VqM,vu,_=<EeeU5z#k?q|wxX_Z7r |B5UWeV<');
define('SECURE_AUTH_KEY',  'P@8u#tV!;MK/0lF|,WJ|wb#cQ[UOcPqetV4c&!NX (ZuoA+N=Z@d$*%rK  Bcx$o');
define('LOGGED_IN_KEY',    'X?Is-RgNsuk~k&+x9$I|.Qe23vjA!w+&`ln|.AlT}D)}_OkPi<#^g{+^-8m6+O/U');
define('NONCE_KEY',        'd)7l;^E|55>&u!D{~*Z7DgS?u+G3#:ytG!d8p]jY,lt&ogAgUoci3y_yRWw{BGLg');
define('AUTH_SALT',        'AD>CM,Bhm#>+XtUwW]NGqAgKQPFPj5LL~.gd{CzbG>;X?y/^v&5F/;f8vQcYDGT+');
define('SECURE_AUTH_SALT', '=nb6@kJd-E-)52g_[+~%[[YFK,Y4X!5pS&YlQ!Hd K/3lXYoT2GGDPXe_R|{,[yd');
define('LOGGED_IN_SALT',   '^&OsuZS.zDq{XE1:u1[Mk@+0T!v*DG0>@2(Jw3]aY5Fn+NK9EO1m.{/#_.-POI-i');
define('NONCE_SALT',       '*+AnZ1sL+f3;Ier~v-R-J`smzy[8fYfYB|3i0]o?;>gitMgIBBD,TwDT@4[Mn+5T');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
