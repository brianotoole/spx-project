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
define('DB_NAME', 'spx');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'G}&#v-JCq&Ld rPqq4:rG@2Y#Qu2bXLhFtyD:z(v$Q];3r<1yvQD#BTn0VePny.Q');
define('SECURE_AUTH_KEY',  'p;bn/(oz^?YrCBJ9jwtD6B&!A|{CT~rQ$JN+ZOlP ^|3$p!%nH<|y94M^^K)pMQ%');
define('LOGGED_IN_KEY',    'k/??7eSyHC.|l+I2}J 6gbT~&-p*b Dk5y,sqi[ct0a @uUTuG^KP70+Nn6U$:^m');
define('NONCE_KEY',        'P9s^c.WM8x|El0fQ8Rv(]B8&a_UIz:;7&tY0d0HQIAo]I>:Qyn6VO{iMDJAZcVmn');
define('AUTH_SALT',        'Oc|ewpnbtrn( 1vrq$K,]D|eT>R;TE@vy`U|Aacq%]qK1$PE<{f$$MN%]$q|W6!4');
define('SECURE_AUTH_SALT', 'Nx_Oh<_J(sr$*=633nMc`HpC/ aus99Q6hlTZb}lawP7ZL7Q$7Yt/Ti7jJjE@b`J');
define('LOGGED_IN_SALT',   'X`0|WFuQI3&<DklpCvB.^4riM*0fH)q+XdfQO79wSwsrFWSOruaYA-9%g8=<M4kx');
define('NONCE_SALT',       'XH$Q_5Mc=y^FL:Oz@?q5^2Yug!mI6N]qCFx CInRozRm]TV&WIrG]J/mL5,7^dSa');

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
