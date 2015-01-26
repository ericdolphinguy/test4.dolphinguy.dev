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
define('DB_NAME', 'dolphinguy_test4');

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
define('AUTH_KEY',         '3-xxht>6XwV]<J-+_V2@+v<;Z}rL:uZ|}N)>T`M3,!!SE?kW2+cZ:BHcU{r(fKO,');
define('SECURE_AUTH_KEY',  'vcu_aa|(R&>x++RZH>0Uc|4>tiUKF#c|bt1eIP27e[-=F*;6/,OHlfW>|Pr-xW.?');
define('LOGGED_IN_KEY',    'B_+i-*`8VngtEx|C) u<1@5Par]yc[+|dlA@@7jaKa/kd8O6 .[:1#UsU:lOHY}f');
define('NONCE_KEY',        '5rNM0QBGr2gYm`6>i$>,P]7J,3&=iP*zLt|_N6?7d6|bzdWSU=|xQ6}CeZil4#-@');
define('AUTH_SALT',        '#PfkCqsudYd;@<]^7(6UClR?m~7J[bLI%Z4L/=BY{W-ah2lRlybz(7o%-5)>t`50');
define('SECURE_AUTH_SALT', 'N|g?&VVyH->G+/r}e*|6iN0-Whw95M%P-og8uzf+ADX+RbhizfbvSYNN$?G^,zPc');
define('LOGGED_IN_SALT',   ' q6|y~.g*3wC5)qUN|0C56saR(1-38yh%55b42mI>qcQfRY84K^9-QI` zHg/cR)');
define('NONCE_SALT',       'X4:<5M[$9o/6^]+,V{8PwXqMe+Qig|pmPX8U_I1^Sb^o3ON0A7GZ-8URN87<^$H3');

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
