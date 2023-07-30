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
if (file_exists(dirname(__FILE__) . '/local.php')) {
	// local db settings
	define('DB_NAME', 'fictional_university');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '123456');
	define('DB_HOST', 'localhost');
} else {
	// online db settings
	define('DB_NAME', 'davec622_fictional_university');
	define('DB_USER', 'davec622_davec12');
	define('DB_PASSWORD', '123456');
	define('DB_HOST', 'localhost');
}

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
define('AUTH_KEY',         '^3bcC24ymBIJ_[(WR <BicM;))?$k 7!c7?;@oKhHTF}m6|6x<o/m%!XK#vrqtma');
define('SECURE_AUTH_KEY',  'ZJ,i8fTb%dSlM&5822-e1Edkod$WjM|E;lyq1awl2Q_o*/UuhQ9logeoq: VVYZ?');
define('LOGGED_IN_KEY',    '_bxAWnk/M+](go:i^l6ikHJ`l;*AtLD&tO9cG|cjL^UaD,SVd]`yhXaHU5P?ij|q');
define('NONCE_KEY',        ' *VU~qZ[u_ {#L>CGdkUmoNH>d)pH$@iAR9F_47f[1&7]kb_ H<+R:V##mIU_[R.');
define('AUTH_SALT',        'AFMJmLpo1_Z6[<f~Oi%DY8D z1{f[<P)-s7Nd!fO,>eh!N<Ks8?_Fut5%[NHkNzw');
define('SECURE_AUTH_SALT', 'H%E/Mqvh)en4 di])1/us+17s?9GSC?M@il%=N&K0@T6c#_/jne9l[$FUkxM)Ycr');
define('LOGGED_IN_SALT',   'Mh?xLw8g!6d;SY/1xre]q(4XUx!?/B5xYH7($0e7Z~!z,5lI0Y@CFr0wZ[-g?8[A');
define('NONCE_SALT',       ';FUc0@`lJ_/_a8H]UIwl-c?a-~.0o@o%~vG:)L%ksJf?mx65wc$~3rx@I[^#RH6P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpfu_';

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
