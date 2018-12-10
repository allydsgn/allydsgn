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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'allysop2_ebf' );

/** MySQL database username */
define( 'DB_USER', 'allysop2_ebf' );

/** MySQL database password */
define( 'DB_PASSWORD', '7FD1CEAk69j3mq0zd2xc4' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'II* {*6_<a&x] @/yug(&^>jjKBgh5d+D(``7c,i</lx^UF.9,v]bX[(i1K]5ix;');
define('SECURE_AUTH_KEY',  'me+yN(!pQ =<bA5h-K#:IQbs+|N:M)LB9#Wrk|:?h*]JpeE!`XsO@Xqz)alBi+dy');
define('LOGGED_IN_KEY',    '+~&ae{8 t7b@e.6r74O+O;:Ch:#=3WkOZ&)K)-}wJZo%w^u{0Y~oJ1[{OV7|E.ky');
define('NONCE_KEY',        ';%M5G|i+z 7tZSOFW|-H!jP_SMND`YkXLZ`*{[c{i^QJXH7!~rHV7!Z.,}/F9_,j');
define('AUTH_SALT',        '<-sRa|6zra$(7YCN=ncxL/>1.OR<e3p4^!|-qoT+-|ikL=/T|,XSxnKT<n)CVK(G');
define('SECURE_AUTH_SALT', '6=1!z*4b+xK71q/#IG:RKRJ88Hzf$B`NB:}?[!sgYyk|8.w |F$gFO68fw5FF-Ul');
define('LOGGED_IN_SALT',   '+&Vh;kPz=oT/$T}VFeT|*@td+*7 19WvAL7oQp|h!M`icH%-2Qk:n^SB]EI9Ezj?');
define('NONCE_SALT',       ' ZiTFO[ANbVPnXIM&S:clWol9fK7_+Cw|X!{mXFvnk?N@G+Y]f:JNM9s|E5bxH[8');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ebf_';



define( 'AUTOSAVE_INTERVAL',    300  );
define( 'WP_POST_REVISIONS',    5    );
define( 'EMPTY_TRASH_DAYS',     7    );
define( 'WP_AUTO_UPDATE_CORE',  true );
define( 'WP_CRON_LOCK_TIMEOUT', 120  );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
