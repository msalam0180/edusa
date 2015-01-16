<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_site');

/** MySQL database username */
define('DB_USER', 'devuser');

/** MySQL database password */
define('DB_PASSWORD', 'devuser');

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
define('AUTH_KEY',         'aizo{abJzX1AiJ4DO+fKfzos<APwk^|rW5K5G-G/OWE+7I]$nX+;C^H7l^e,=>`E');
define('SECURE_AUTH_KEY',  'eCR0>1QST{LN4e,?}lvodn=7xW$CQ+?JLg*J<9rghatA=$V//X^>*7/(!+7#6Wet');
define('LOGGED_IN_KEY',    '8;L7G>!ze,GH5uo.]t)w+xQl}%m?^8WvU!^W;?m yzqi3UAEvi5iFRJ(|<P1A759');
define('NONCE_KEY',        'Nyg((K>7^;A/4k^dpiu/)+[^-`<Z<g(v!7M<+kp %$A_XwH$7P+kqwh`{B]]Y`|6');
define('AUTH_SALT',        '{A@r{!i._2;zf&+/AxVJoA}Ri7Wn7g<{dTJ/&{C+=S<Q-$p^ svJlYF/a6*KQUfG');
define('SECURE_AUTH_SALT', 'dzFgEio4(2%+qe1TGalz2pd~3=B<WB~buv-y$43Fx66U*iM:~-&~B}`!x/c$;a{}');
define('LOGGED_IN_SALT',   'KXQJZTk:o-s5Cy{jNN:)b6|Xn*.+nTsx:&se}!o- L(z0]-_%]>FjnUZS/5wPh9m');
define('NONCE_SALT',       '`p]=e^cxGMf17s+[13 w~_s34rUrcZ<Z<C0^;Az!*x[^Q)Z5n;yp;.XzUD6JL_ZI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
