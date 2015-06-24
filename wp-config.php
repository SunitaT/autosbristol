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
define('DB_NAME', 'autotrader');

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
define('AUTH_KEY',         'wVW|)Z9T|;HBG-KAt|A82-/d}>K]=l-g+aHQ`bN%7SI?PZBS`Y(+]b^CD,f}~;pG');
define('SECURE_AUTH_KEY',  'AxTD!3:fJzyqLO]37b0+D3mq((LVz`J1q2baxY34u/B=&.O6z3/Sw/gj7#l!UrH+');
define('LOGGED_IN_KEY',    '@PQ<rW8J$iLN~hiqY8+.H6xks|E ;kZ)N3h/~TZS66C5fZXS7}7PYh0l@zLo<WY0');
define('NONCE_KEY',        'hqBos8G`Br590r^0%?u!tie=+LWM6$fg^H3X8}0R_{F8q`%p)pC&z)j}3+[/g5,%');
define('AUTH_SALT',        'b7?6fe=k}oYmQfA0]ady69f RZlvG?8,Z|ArZl(8*;@C+u&C({_$-*bXKw}/RNZm');
define('SECURE_AUTH_SALT', ',zKx=gl8Pxx`k%r2kM{gY[qo6AH,>kFU5RRY4]y,wt:!O:,Lat)T6wZSXLR7He7f');
define('LOGGED_IN_SALT',   'XQ95]p^VF}U@zit*UHTjF6_E[yxq|}h [M%||h5%a/}}M,<.~m8siib~@`?F|mf#');
define('NONCE_SALT',       '|hj}H+<LY;e-|c47-xyL6id7Vq)?iCh+U$ /#-Z{|UM^1c(.XTjQUy3+z):|,RsS');

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
