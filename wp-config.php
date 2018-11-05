<?php
define('WP_CACHE', true); // Added by WP Rocket

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
define('DB_NAME', 'krushdig_wp_paul');

/** MySQL database username */
define('DB_USER', 'krushdig_paul');

/** MySQL database password */
define('DB_PASSWORD', '~dN91Pb_!Nru');

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
define('AUTH_KEY',         '7FKbdQTwUF2TQ9dF8NdG8KUayeJCt38DjrAq9GXKakUZ5aylayG1enKjejdFn33D');
define('SECURE_AUTH_KEY',  'sB5AMd8Gi86eyyJXawugCn0gL4Me4LdX2eCAqtkFJBzZ5ctLy4YfSjRggciEo1Iv');
define('LOGGED_IN_KEY',    'rVqDtCfXKwM16Ehg4ROHFuQuDTHsdHvCRlmwmqwQ0M5HwsK49Oz87ohZYPOhetvt');
define('NONCE_KEY',        'qk3hDeuYiIFNuzvdXglOxvoMNO7hCanYfJ7shG8ioPRevj5yv8p8yTM39M4ou0pC');
define('AUTH_SALT',        'DJodGyJefJnMcxKJhRJSEYLpJgh0gFhort0tBmtTR9ACWIw29JqTghjYBf10UQy6');
define('SECURE_AUTH_SALT', 'Itv47DpxAcITNJdeGdnr6BDis7uNFloGmvZQ56WJ5VkoEC0ZSc8cMvHqMLkKRPle');
define('LOGGED_IN_SALT',   'xxuIz692bdTMuDCZqw0T3EaoejYlCUK1uzBJfFiTBsnnasFHHOelU8ZShGJcas0E');
define('NONCE_SALT',       'Ym8P2mZeHgS7dE7KkPLndz62nFEeW2IdvMm7bWJzO1syIzWa5Jcyv9eK8MHowOA5');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wo_';

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
