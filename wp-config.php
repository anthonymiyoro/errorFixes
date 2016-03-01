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
define('WP_CACHE', false); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '' ); //Added by WP-Cache Manager
define('DB_NAME', 'test1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '2v88klr8umhv6utt5f4t2aufeu3bpgrjtqztjwwtwieajo80uorzipknvjfts7bt');
define('SECURE_AUTH_KEY',  'clcw7x7khhorqnjfrvkazafojy4pmzmlxds0vyag7ajdchiwhsamlugwoqecytez');
define('LOGGED_IN_KEY',    'gwxfoy3cc3wcwobbbbndp2zol1efujjcajdlrk1ifgtafxh4ziaorf0pdys6cqsu');
define('NONCE_KEY',        'jljwszw54y3aiagqb6kgnnr6w69z2owpzmwkmblp5wjftza1qywryqvm51eoktl9');
define('AUTH_SALT',        'pueqa0iehlsgzmvxm9kwrl4frbsxtoqu9gsynxh7etki0j2rjknthgredtvbiaph');
define('SECURE_AUTH_SALT', 'jc0ncqs16zdw4c5fzh2icftzew5srhtklujxwnr2v6nsajmmarahxloknsmsb3pa');
define('LOGGED_IN_SALT',   'cvbbeyvjybfeqx16rybcs7sl08edbnqm2kcjex18pnb45ctktf8yszq7pypjprjl');
define('NONCE_SALT',       'ickognaxolujsqcf7cdxfy607wqre7rnvetx0ugn7ki382h1uadcgpsyaovofvmo');

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
