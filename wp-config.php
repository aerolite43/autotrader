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
define('DB_NAME', 'autotrader');

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
define('AUTH_KEY',         '%HAXx=/1& 8OoT+cT4jhM04@5m|w^P`k.SS0Xm UMLiI?i:wz2JZcETT)vwR]n*{');
define('SECURE_AUTH_KEY',  'MiVhr~^NJRaLn3GMxKUK=<--<gnsXlt{o<D4TQqX.HR@/G7R?M=>3EVzdmU[K@fj');
define('LOGGED_IN_KEY',    '6;{R=?x1gek/|,@ )8YhSf1O3u+FH[}^#LhH9;zOo;O;m`-neWQ|M*=[diugyUxC');
define('NONCE_KEY',        '#?SjrYsia[)y9j%d8%F2v/]KHdh=0,}<smYTmTG%=S0huZKoa0z:FkaMUy_M+A/)');
define('AUTH_SALT',        'plyGc1fod470[r)csBe#*gT`3Yf0ZdMyxfy:c8b;Tt^ntEp1r*Pcx`_~l!HA&1$v');
define('SECURE_AUTH_SALT', 'F[Y$NF+}HKW@cKw+F6(?Ki*dcs``Z:,yIMT3{b@,9E}Mt,})8Z:!_TOp%bCq;x2]');
define('LOGGED_IN_SALT',   '`RD>+1b?a*[ZE cAUOC9/k_3eo;O?HUpx$p`.>I}y:BWz9ne,mJTu0JIsdK|xe+V');
define('NONCE_SALT',       '/]Fo+6:poj+JUYPdvzCg6$cK,yPg -8cf16TOy{i~idloPLNFDK=PXX@!WFhiSC=');

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
