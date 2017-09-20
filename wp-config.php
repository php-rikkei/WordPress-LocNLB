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
define('DB_NAME', 'baoloc');

/** MySQL database username */
define('DB_USER', 'baoloc');

/** MySQL database password */
define('DB_PASSWORD', 'tyctmmltyd');

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
define('AUTH_KEY',         'Ui1MgT?,Jy@KmAB;~K6S~&5%P*Eg35mOE>8 3CW3(;4<eA?K/,Seko70$P[aJ%LP');
define('SECURE_AUTH_KEY',  '*rRbs>Sjqe7(oPUx/,JZRCKk^Jt7AN^wY?-At>c@,W~n;]f=ht_c*MW@:@D]4{rq');
define('LOGGED_IN_KEY',    '>r5cgjy}>%33Y<-bAx7LU[*Iza&gFiZ:%}W7=J3F@Z3.kuMw(j`w^sJ=EZ2H69ZW');
define('NONCE_KEY',        'l6G+RIEuM<$p6k7X{EM]!0/GkRl{wgikzJJ2d]Q}ND8 pVVP*F,wS{`G/R?wm#AK');
define('AUTH_SALT',        'JwgC>:n4f/Db{CAGAwme`%>`PN.3&yjE#7:%F=Z9I=@7Vq6&P@ WTlH)3W08p&R`');
define('SECURE_AUTH_SALT', '^Ki!b&!|~Gv3I~}@:*nQ}X[KEY5kL9)_Y+OCcjk|BfwVc!&UD@C5eUu*Sof^gQ5?');
define('LOGGED_IN_SALT',   '3(4?bT@ov/2tXw%~ukSex=3:LX0j><r29RzI`bk-D`9*i$ePC,TpJdB|PtrH#fdu');
define('NONCE_SALT',       'E=U|J8o,Nd,$zAs2V[Cg(8A^w~RL<,d!>KBoXy<0n[o-Ybtdy!v^E/)~}@h15*Pa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tp_';

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
