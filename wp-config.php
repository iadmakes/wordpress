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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'wordpress-user');

/** MySQL database password */
define('DB_PASSWORD', '$uffr@g3tt3C1ty');

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
define('AUTH_KEY',         'C-u{IF]vND%Ei+|E]Tnd+!|XD?s++uQMzl,[O+OY+W^>e0tz;_yIh_z>E$d^d_i1');
define('SECURE_AUTH_KEY',  '5L|)R_1}-ZHuB7nI)9`LE|,@%#iwGa&.Qb+Fb-:8j*-,_$}f=G+WziV:D1l?$S*<');
define('LOGGED_IN_KEY',    'k9m/PT+WpboC+tJ&5O<ooHxY_6Fi{KTr5!tdm-Hzy9@Z(nl2u[jw6kD(hJk^[:3r');
define('NONCE_KEY',        '<xVF+g.sq!SE)`x.n12oPI<qTqm;67~=wrb3p2{(%R-R9IU?f?2QjPp,y+i$]4U!');
define('AUTH_SALT',        '=i+Mgf6rXIb$V0!,)%{<|;s4G0t^~fU5JG0;}o8oZIoAK`(!drx)qLS%N/@7|{bF');
define('SECURE_AUTH_SALT', '-CD!e|CoPjn6yq1/YAbM5Ach3+WI|i,H9H-CCMuw<.P,}a{-{@lY#qiW)M+h 6k*');
define('LOGGED_IN_SALT',   'IM_Ggfg-h^k+D/eutg#d@+FdoZUbp+U21|(D?(BMFQGg]`cdV);0}#|P$RT2Nh.k');
define('NONCE_SALT',       '9W[G4XkN%,e$]1^WsBBZ]}05+4|?m6%%#K|91~*|NN5Pm96p[ ;RQDZ|{)ii/+lD');


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
