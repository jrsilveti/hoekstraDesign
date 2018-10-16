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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress_user');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'e741j:qL|?q79#F6_}*Gj5U y/3#%(u!wot2,Wp/}23O(@R~P1+>XlWsG8`)B//!');
define('SECURE_AUTH_KEY',  'gdHX~m}53|sCr~x?DVMIc?z8`l8es n#uBA1V;VKPw=^K39ru+0*S+pOgc&<)F.?');
define('LOGGED_IN_KEY',    'T&= )6k+!$#7:RP16z8EiW]]C9LdU0:#A+|Wv%u |u,o3}+5nwW yz]34CkDa(C%');
define('NONCE_KEY',        ')Qkdzn7n}N|1?TcLynT(xMC>N~2Rlyj 7}L}Kz@XaY`fBgFjpJJ 5!4h?1!ZPMqX');
define('AUTH_SALT',        'RG?]j2X[;D-O {mS.t/C*;Yj<RU6SCN7j)O@L.HEa0GUdWr46O?C|=y|m6N4n1[y');
define('SECURE_AUTH_SALT', 'p-Z+j@T&5Ip: *|f!ZXedS-V&+SD)TgzfY!;clhPvKMu%3=*vc3zx&-=%rTO],aB');
define('LOGGED_IN_SALT',   '1sqW-n5hR_UG4xc]_GZrdt^TExPbx@FSL~z)e~nNP1BmdSmp)meSp*i7SNqI#x:8');
define('NONCE_SALT',       'V?;j.a>$B2l6^:NO}]]y6M}q^{[:&v_o~=L`!RYtzZiaYn)=oO(.TTDW|V:/-.Li');

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
