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
define('DB_NAME', 'partners');

/** MySQL database username */
define('DB_USER', 'enspire');

/** MySQL database password */
define('DB_PASSWORD', 'Enspire!Dev1');

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
define('AUTH_KEY',         'FR.WF5nR)yn##DV@?YTmyyB,mG$&ZN]pyX8Y50Q[G_(na<,+G3m+@^y_c^ZAEw6x');
define('SECURE_AUTH_KEY',  'E1IE!uWLLi.V/d7IvF)|Aq<pUt0:g3&5lzT~[bkEPwHZ(RQ!YlH$U:dH*GAmz*2Y');
define('LOGGED_IN_KEY',    '*eU7PF)|fyW~s Tke!WE#lghY2D6L/4Jm@*NGeO2xX1eD^?;~J#i?%oT%@t  :e1');
define('NONCE_KEY',        'fZ>`&Gay=;ZFjVep6vZ KcBut|rKONtG%e#YoHf!F#hmUi6F{I-GWK@ ?0|uQ4/(');
define('AUTH_SALT',        ',4~,pRruk-/)l9%x>vKQRkvV2fM+{I l&(?IakT6,s)ut-1L[yh!ZM=V3FkNu!fh');
define('SECURE_AUTH_SALT', '_C%3;/2`e_|&zO5bp7jdRf_kMf: GhE/Q=kKJi8Y_5EgdlH]6_f~C =m/GfB8L2!');
define('LOGGED_IN_SALT',   'Z=[4mN1;Xxl1o=L!c&oSufy$r+*cLZK%Esso&M#[&>}Pk2U+e%nAvzHRV6GW5ZIF');
define('NONCE_SALT',       '_WqgfpkG%F3wPv |p_H5*fsAbe|xX.m8Ak-wV?cW?J|[m2oO:I:/H t0EVyA-G+q');

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
