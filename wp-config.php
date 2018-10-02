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
define('AUTH_KEY',         '*.`~TTs%FL]&}i-JTPuYf[*Zfp#6HDyAQUL9?8 u6JoIUtV-c8L3R@6M8l-;l1Kx');
define('SECURE_AUTH_KEY',  'Yg,bveZ;B0heD5<eN CoIIs[I.[]p>]_CTC$HG?4AQ|us#,6T6</(v,^feyEA?`>');
define('LOGGED_IN_KEY',    '=_B}#pP/6I,N|T=sh8uEQ9ebIX(G&:o7P p#iT(zX(w?52:EML~,4541b<(<*;(h');
define('NONCE_KEY',        '#s_W2{kz`T.`H]q!prp<[^Kda)lp R;=&ZH?y[@e!t[ijwECYw,VTIv~w{;#Lr{z');
define('AUTH_SALT',        'VhhbrfdP^WfiE1B8L{YuC1$n*%z$AB*JYb:?M]}AURmy>.Wt]Mdywu5D#8+eE084');
define('SECURE_AUTH_SALT', 'YDrN;7dzta6z|kz+-:I9PV]z ^+%p!3Vo)P9|8{N]&xGy.25 zu`FP-L5cQugH=7');
define('LOGGED_IN_SALT',   'GneStk?w?`{)F[M/Qm7YKQ*]s?*h^`bfLkNRvhx4e<_ 76g3^;*3sOad *r9/?|3');
define('NONCE_SALT',       'XN}v g~eVd Oj=lg`#?L8XfO)LAo,QLqA$`4-=8p)D0`y7JuP8`7(S-Ul8Rk8]q^');

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
