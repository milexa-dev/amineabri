<?php

/* Path to the WordPress codebase you'd like to test. Add a forward slash in the end. */
if ( defined( 'WP_RUN_CORE_TESTS' ) && WP_RUN_CORE_TESTS ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/build/' );
} else {
	define( 'ABSPATH', dirname( __FILE__ ) . '/../../../../' );
}
/*
 * Path to the theme to test with.
 *
 * The 'default' theme is symlinked from test/phpunit/data/themedir1/default into
 * the themes directory of the WordPress installation defined above.
 */
define( 'WP_DEFAULT_THEME', 'twentyseventeen' );

//define('CONTENT_DIR', '/../../../wp-content');
//define('WP_CONTENT_DIR', dirname( __FILE__ ) . CONTENT_DIR);
//define('WP_HOME', 'http://wordpress.test');
//define('WP_CONTENT_URL', WP_HOME . CONTENT_DIR);

// Test with multisite enabled.
// Alternatively, use the tests/phpunit/multisite.xml configuration file.
// define( 'WP_TESTS_MULTISITE', true );

// Force known bugs to be run.
// Tests with an associated Trac ticket that is still open are normally skipped.
// define( 'WP_TESTS_FORCE_KNOWN_BUGS', true );

// Test with WordPress debug mode (default).
define( 'WP_DEBUG', true );
define('WP_USE_EXT_MYSQL', true);
// ** MySQL settings ** //

// This configuration file will be used by the copy of WordPress being tested.
// wordpress/wp-config.php will be ignored.

// WARNING WARNING WARNING!
// These tests will DROP ALL TABLES in the database with the prefix named below.
// DO NOT use a production database or one that is shared with something else.

define('DB_NAME', 'wordpresstest');
/** MySQL database username */
define('DB_USER', 'homestead');
/** MySQL database password */
define('DB_PASSWORD', 'secret');
/** MySQL hostname */
define('DB_HOST', '127.0.0.1');
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
define('AUTH_KEY',         'qT|/G* [oD}9Q#x/AG1fHSt(^Y[Ljs6aD%5.DApnO{~37XIu]^1M-|F|k;f5OYiN');
define('SECURE_AUTH_KEY',  'J-e+j;AG%@^Q?)7j)$OiEJUS]L%^_OTCEjW@;g=~:zVw3H4Ql?=%PR,DPecmJ=KT');
define('LOGGED_IN_KEY',    'MjlT`)TTBkdw$|>}sYg4XDXR50/2s9idF@pEoh(BUn$u[V.YNF|y`-yI[2g5xU^@');
define('NONCE_KEY',        'p>*([p9{PhV!U+{#gYFv;VPQw ^Y;}S#]zPvXw#})r#|/GFR(!>+socp@dtij@|8');
define('AUTH_SALT',        'HvrdYs],fkZlfmPg)9bNDkQ@_@UK5D<*mRm1Mx@yj2pd4lp) JI[4+1&qQi+O|/L');
define('SECURE_AUTH_SALT', '8tEX{8{|</u4{|X|s7S%:z7h-VV`wX:4k+A3nCSG5f#395~C5+/SC/n&-d<QYhr-');
define('LOGGED_IN_SALT',   '!L}*gORxi8FY;]&:agjj?qA48mgnU93h}}KtxUo]Rb;/9-Dbpni9UwC=0T~cAd=~');
define('NONCE_SALT',       'r&/c|sqMo5(_:S]bG/?!X}fwVg%~74n}=IR.uLY!Y70rzr}-!Yd];wA|>FAO>mR-');

$table_prefix = 'wptests_';   // Only numbers, letters, and underscores please!

define( 'WP_TESTS_DOMAIN', 'wordpress.test' );
define( 'WP_TESTS_EMAIL', 'amineabri@milexagroup.com' );
define( 'WP_TESTS_TITLE', 'amineabri' );

define( 'WP_PHP_BINARY', 'php' );

define( 'WPLANG', '' );