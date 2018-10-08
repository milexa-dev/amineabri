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
define('DB_NAME', 'wordpresstest');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '7!RyamcI{D.Y``uU9L6EcSbf:4I^Arb<2`T}#c|1RBOh}N7r+ZG`k@<;y`Sw}IRw');
define('SECURE_AUTH_KEY',  'FM/|az{7Jtw/Jah(KT>4wFL~9O_j6?U.)6N{U1?v>G-hy1bB8h|D&=SMCkpE6z ?');
define('LOGGED_IN_KEY',    'xG`+lBt],q}pe5T>1Q>rdx,@Xd1(NMGVG{9z.*g$ep5$/qcBPQf)KVm/o/K|mkx,');
define('NONCE_KEY',        'x]Ig`j|tR`-:G @jVQI$UVl4y9<A>)dje*zZ9l~=]#HG(97N*[mpw7D0IioKgFLp');
define('AUTH_SALT',        'VzZ<TeX#TSz/C8vn1h3K=K[a%{e:v8o9Lt./9x<o++a;J8,?G=1U?[q1mE$3jO]#');
define('SECURE_AUTH_SALT', 'rBEx)C3j@85t<7]b^w[$vJSn.PbeVFqNhY(4^{36+R$dj>1ve]^[/H^hUO@jgj79');
define('LOGGED_IN_SALT',   '$<1/_]|JG1]ORg%MV.whF%4tZD04N!~[Q?WNA/lX/Av[[:y|7l`I<6k4I rEaPD~');
define('NONCE_SALT',       'ZMK6w[wg`h?BJt%JoPG)Bixe>g)R;|lP)=,B%BT2OHtE>Qd pO* Ei$%FMJ^`PiQ');

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
