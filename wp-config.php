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
define('DB_NAME', 'fit');

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
define('AUTH_KEY',         'U/QfT0Oknyy:mnHyAf9zVkC]k$KW`L[KO-RceyJW,c5-eT,W& (Wp]2O[gFB:kV|');
define('SECURE_AUTH_KEY',  'S||PFew2J8as;VL]/l@gYc9RCilk;}r/aY^{C!}2j+LDv3cF6%VZnsq1CW|97Yc.');
define('LOGGED_IN_KEY',    'rv|3&*vaK0JTAc}eN+LB}{C[FsXt~] 1M}R{i W@MTnJn,peSOWJxKtM>OGBNYDm');
define('NONCE_KEY',        'Gx]ybr&q_6gcWGDe{Ta LTuRF/w)e-S>+r}$uG<qoeRy<0`EoK=a]-X@LcBMaB-C');
define('AUTH_SALT',        'buI+Qel-VDZ6p2Fa:5n->-vfj}<df2u)1psIZ=X8_#<Og2&)/tPt/.AsUOl%Eg=[');
define('SECURE_AUTH_SALT', 'dfZl?Tc/|y<_zsjkE#,-Z2?|ov T~YmTE4!{^w{pXrYc+2UJ5cA^t`|[y%8DTZCg');
define('LOGGED_IN_SALT',   'e;;*b_L}fg/u-Rn+>T,Y}G|rteXd1_380Qk^`.,^ {9 p2hHyXYjCxZ*8{HuO.SF');
define('NONCE_SALT',       'n9O >W(RbQY{[/a(5U%9zbSXeZ?sAA@#*7jmYNaCb-GvQY7kr3&*j#9#f.nTCoI#');

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
