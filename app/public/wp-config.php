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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'MRyn0md+8aYJk5EvqB/NtyuStOP/C3J0iy2K+i5LR8kyagJAJ5YI1DEYaEyoPKoKqLI2CVun/Yqemtr296SkNg==');
define('SECURE_AUTH_KEY',  'Ykd1BKXclXOX8c+H/sv/ScOXTm7ZGtDcvha8SsuEMobAda/5nsvN3FyNeesWYr4rQespYBEyA9UqiDnFVQlJGQ==');
define('LOGGED_IN_KEY',    'H07IzqvSr8OzN/6K/3yc1QcXJ2CeOu7FHM7MO7ckYptZWaNqo2WpNIhURN9tsAEy8qvjfpWrnm8/JSvKnkJZGw==');
define('NONCE_KEY',        'fsimVhGip91wKRv0BX9fnypKKnB6HiU9sEltLJNprjVn7JS6wNixq9IpRc/djAQMfgaSbXQTnvDp8eI7wtUCjw==');
define('AUTH_SALT',        'hHtXRFnA6yj2Vo/3oJy+xvaW8Os7Y10SxWFN5BYzfMUCqhcE7/X5k2lXT6efQytZvaKMY3ovtgjhbX2EBH1tUg==');
define('SECURE_AUTH_SALT', 'agqoIbH5oJxjce40ZnC9tAVgn2TNRNrYbx1bXcWFoRt5BmUpglZbdnlap1E+KI9APGhQ9P+dzTWEQwH7llrgQQ==');
define('LOGGED_IN_SALT',   'Luthlt+IU2lsYpxeRoGqmgf+DJHSVbrfOwhxXhkRdEoK8aw8kweSDtoTHIx2xyvmNDMYARAApKBKrhBQXd9Zng==');
define('NONCE_SALT',       'a49vxDgMd3o2G77BeJGgIciud4/5aLTbFoNw+AIxRViVfJQgoPS8hAti3wiATnwMbk1KEkljllYsXmLLCaVbKQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
