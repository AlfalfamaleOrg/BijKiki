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
define('DB_NAME', $_SERVER['RDS_DB_NAME']);

/** MySQL database username */
define('DB_USER', $_SERVER['RDS_USERNAME']);

/** MySQL database password */
define('DB_PASSWORD', $_SERVER['RDS_PASSWORD']);

/** MySQL hostname */
define('DB_HOST', $_SERVER['RDS_HOSTNAME']);

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
define('AUTH_KEY',         'E?Rj.!eR[6,y-u3~,ggKqGykI7@Gt+a[X?@iI/ASa.K2]+eJ7Q~j7$!J.<|Av*m`');
define('SECURE_AUTH_KEY',  '0P0-&0^@WE%?)/tbM/p)#89p|sTO$bG]hX-@|]2h+t6DsA7-DHhmaNei^Eshj$|r');
define('LOGGED_IN_KEY',    '_z<>#5>@^=:@$pAKj.gK4l+RaWLFl O@Q`G|.rc!!+}N8$7YO|e(D)D]of71fOgp');
define('NONCE_KEY',        'HQaxaI8|8|UEVVntSz%W%*G:SXu!MB DMzEZkGOdtfjQg4r}a+tuek+)0`NE5pT[');
define('AUTH_SALT',        'c/DL5{+>A.|og-&d63y7fw/cV}nS9c1+l=LkO?gz4:]n8aQ-+-|Z?#R#-Sz0oL}v');
define('SECURE_AUTH_SALT', 'N6VL|2}*C@yXIudnkm-K7D_G*&LldCYhJgRYhr.nicd@)pd7%m0?7winofpzp#3x');
define('LOGGED_IN_SALT',   't b|osPz(m|7]E?7n2P+qHk -!r*O~H8o Un,rtZowjkYv_TNt)#]]bz^<{bK+{c');
define('NONCE_SALT',       '#8464}ouwb)hU,|FYPo0}QstS7p+ILkpM>J7L+DffoYZh|oG?*!Uvow]x@4GlT@g');

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
