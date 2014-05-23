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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'adminTTLxyy7');

/** MySQL database password */
define('DB_PASSWORD', 'XJ7jb8KsDMtq');

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
define('AUTH_KEY',         ')lAd@[#HGM|qwD<v^S5Q4xMbcqsEvyA4E^*&BfN ]L!ntyQ6Hof4hTaaVE4hqcLf');
define('SECURE_AUTH_KEY',  'S?Xy%_4mvKf5KNZ0*^[kcMcM+NuNDt)|zA HR4ePw^&*A[sr-Z|V-sWo-vNI.5>{');
define('LOGGED_IN_KEY',    'N~)x:u064pa_&#{bPaK/Lr xOo9z*@4w:*Z::6v+2*kXz>-OZ]4g|)i>y(`r7!_[');
define('NONCE_KEY',        'b-=:a6L3G]Bh7JDNq%gB$/D4I)Gnh xPB-k&}Q@mzN)-k]iOz <yMd(La@~>?#|;');
define('AUTH_SALT',        '<|Q?vmJ,0nw<z_Dw oi19|U<4FxHT3+^kR;fN(OFiZRpx0yg`sK`P!nWOXNt<r6v');
define('SECURE_AUTH_SALT', '}LTA;I&|tSp(r+xQ}QhRf:eG.!oi2Ws#2^x-u[jDF|k,qQo)^ /(#.!.*.0OFJH%');
define('LOGGED_IN_SALT',   'C dy=/<658uD1& j@}~V{G3gj{APBfFeE 1gwUlSZhDsA-1WDb<PNxX]V8>v#[*2');
define('NONCE_SALT',       'L*-m]@tJ +S6~zX^3F~u-{^k8ir$4l6F{.hzi@K.,f-=0ock5,x5.:_pW/+Pl|~S');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_mgklBlog';

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
define('WP_ALLOW_MULTISITE', true);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'mgkl150.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
define( 'SUNRISE', 'on' );
require_once(ABSPATH . 'wp-settings.php');

/* Increase PHP Memory to 64MB */
define('WP_MEMORY_LIMIT', '64M');

