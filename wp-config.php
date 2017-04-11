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
define('DB_NAME', 'wp22');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toor');

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
define('AUTH_KEY',         'J8b{-)q%(4=F/A(4bvM;g?wkD@eMJq~u[R:LT$WSN#>ISB`^!0DvAp@[l5p<$]-X');
define('SECURE_AUTH_KEY',  '@F02 dIWW&dwK1IiSSs|:g4H`5]Y{fwPX>*IM ZZ]4^Uuq 4@sK#Q:xFMM.ts6s:');
define('LOGGED_IN_KEY',    'K$BM`PgbuXK?!%u>(DixI|`- gV%i  b_-b.g+h~hP0#3fI?xE]KEhqC.z[^|<# ');
define('NONCE_KEY',        '-10{ar6B,b5%CvcWde}x(p%@+ii&EOUX9y7%un:lfDTpMC;gEpbO.WtN>wd:b5LG');
define('AUTH_SALT',        'n3l7mZvKp2)a}+9wC5h* fUXa4!dYl>@J|aOwllCv1fze?;PYso+rMyz/_`xK?v(');
define('SECURE_AUTH_SALT', 'd2#KsJ~J5MKG+ME@u]jhC$3B?SuR?LlaS(8!%sFo@pIu/.3a.km~{eS5{2}UY_8T');
define('LOGGED_IN_SALT',   '%0#bsHi7^yr`OrkvGb,GhT5mN`i?%ZaAKW0$T}F2p%9hZTo|BEY#+;t2~Q4XI-Hs');
define('NONCE_SALT',       '!Dq6$xwp6*5(d*VUeX5sc@(@ia!j0$UfzPP7Pkh^)>Xi7c.yiyAE:wbGXGV{tzn_');

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
