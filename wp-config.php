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
define('DB_NAME', 'vogue');

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
define('AUTH_KEY',         '1XzBpkGXN1jhSXZRS#hr_)@frNctY}[%7LS,Nk~fe#cdMQtKc>e$EBIyRmtxq(rG');
define('SECURE_AUTH_KEY',  '!H;a(fct1uV [7XsLzyG*ysa2^tkAyNPCn:{x)KtE,J*$]keP6,ox0 1m-h~Ap64');
define('LOGGED_IN_KEY',    '1myNw<{{AlQM8wEOBiiyeJ&V^mM-p]1,7tQUk4|r~lYh0e%zW.G#fZ@Cf7A_cu)r');
define('NONCE_KEY',        '-+?&H!SJWuvCSBJS]lMTjEG^SHz<sBYK(}<YEbT+81(q=9GcUnJOR]+ZRhbkij?0');
define('AUTH_SALT',        '{-z/9%D0Fm:zC >Z/|hhr+[%}b2cuvbZHN94bvP8crF BSIpS|J,HfFJX Wo7q=:');
define('SECURE_AUTH_SALT', 'gxqn@ ,|qPJNUd#+$qK%Pd-GSo:(j*y<p:whu}2+mITjg`QIEb+Mtdn}~}=9eW&k');
define('LOGGED_IN_SALT',   '=BA&-yP+* ,iCL}uT0aU6?P%U1qT,isn`jhJ?/Ti:XNl_j/p+z*kHa7xa-1YL&mC');
define('NONCE_SALT',       'o|u@}2;f[Myx_OAbjg(0 |jc=BYTsvLKezDR/i]$b8W|UI=oUgNqxU.upf>=Qd)L');

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
