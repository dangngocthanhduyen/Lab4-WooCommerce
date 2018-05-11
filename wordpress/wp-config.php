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
define('AUTH_KEY',         '&m6K/cEy]>=h$8Vmo0AD YvH~OD5&UIVM;rRcQ%teJ6EKGTXT@xGXq:PC:)fE7`k');
define('SECURE_AUTH_KEY',  'H;VV*70*;10N7~5-O-nfu .F3l%Mpim%MeW4n[$B?~J47O1HpU0hFw6(].i WP7k');
define('LOGGED_IN_KEY',    '+J|.3Zi0W/CZ/1fD[}?34C(N2dmNs}EgR!Uh*Nz$5U?^pq@s*p94o{g6332#-dx)');
define('NONCE_KEY',        '@,^hHc&J%hS}y W$=E{m%v7+9*9u70pAedk,D|,N?Q?OO{sB_c(,yiJCQfdI<J |');
define('AUTH_SALT',        '_N@%7VDf+$6]#O8o2r;m9wD]_u4EkwW?y_EGC{b0J>(0xQ3#DopwEFs{R}(a:zA1');
define('SECURE_AUTH_SALT', 'OVC0kqSpb1?Qv8dQCca2y0zzCp,fDsAb9W;&hW0C.E=g!7h|BwTM(soUP~8O/$uy');
define('LOGGED_IN_SALT',   'U./wy=cMyKE zUm}RiVG|5+0b66=XZB+bUc.nOd3!EMpzsQ?<y;A+UA;{cjpO@ZO');
define('NONCE_SALT',       '?q-EVZ)koCcl 4iIO(l%z2~_>1TMl%KWzEEBTv>V%{W,2-3@d}~IE;(onrFU[}c@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_test';

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
