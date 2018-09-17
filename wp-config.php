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
define('DB_NAME', 'binafina_wp412');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'be5w6nhvhmpbxyscevgkcxynksy3xckbzqzsynphh3bsndboi7pz0u1nyaz4st0k');
define('SECURE_AUTH_KEY',  'eosotmyvvhvdnuedxkjkaewtppp8a6vs1gryywdjlfgflwprgffoohzt3prlxfqm');
define('LOGGED_IN_KEY',    'aytfofiugs6smdo0emydlqzjtiy29jibkkbccpx1ddfjlbvs6dbjisjhgv4tvfzl');
define('NONCE_KEY',        '23ycmeobwd9mgjcq2god1oapsjc5n69dzono1yfmengbxlth6hihzrj3wd8g9sfp');
define('AUTH_SALT',        'wso3zglqu6gdcxl61yuagh0m8ivv31szijev9pcuytlnwtstbpmocbjgmgd5zjyr');
define('SECURE_AUTH_SALT', 'hz46fbrwnhvovryzfa8wqh4f0seo9dmgz4yjoz4lqfd74coo0cczjizo5trvoajx');
define('LOGGED_IN_SALT',   'p6187nu8u8afekrze1bwsdv2qc5mk6kzsybgs24v7f4uafbvvtczijiv9v7eplb6');
define('NONCE_SALT',       '6z2sug3bpb8jlh9qrp6uoe3uucf3p4axwscwdu9siftqksngo2jpgzonwnmpxy6b');

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
define('WP_MEMORY_LIMIT', '512M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
