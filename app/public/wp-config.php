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
define('AUTH_KEY',         'Zb62cdYi7o0UNUGa/Zf5SJ88yOE8aaiKMNAcVP2ZTvrMv2DfxEsBYaKM8TI3otVxmrsBPXK28a8eikhn8fp62w==');
define('SECURE_AUTH_KEY',  'rKSb7jMGUz/MZ19i0a2vR4AoChd3rGjHQIUoAqOGgi/yXgrlQOd8ytb6nyXzgxYKPs2FthabRxkj8pm6Wa1+yw==');
define('LOGGED_IN_KEY',    'O9BQhIuqjOxcXD7drOHm9x/S29NN0TvLNTcikxHQsxgEP4gsQEHe/5+O2YDzFXt3urq42R+4WdweuZ0T2CYmHQ==');
define('NONCE_KEY',        'UBwx3MYHk1GYiTrXNus1TrRLaWRCkV7oM5SNP01F286rWjiuLuT7hxBH9kyE58RE6nlusnPDBds24koLarCMHQ==');
define('AUTH_SALT',        'PEQB7crAOxF95PphbZJXWCzLaZMwrWRtbTlvg39ehjADtMBflZK0OdAyKlu5/15RRaNAIbBpu5xJUdtS/mIE/g==');
define('SECURE_AUTH_SALT', 'f7siKAy2VkP+QSVAwZX4VfEHkkqwVROJ8m2ycnveT478b+RY2LcvfkVeYoBCbS3rWbQUYY3LPJFmCkIO0ttmkw==');
define('LOGGED_IN_SALT',   'd3Bi8hsCPbxtN17oNyB/HsZoAPp8/4n50jBOrLxYgqDBh+sVMy54/++x8eR2oLYD4EmS1jbryQG8Y9XtnjIuww==');
define('NONCE_SALT',       'w/TNjmyPb68t272j2KWDAY9ddR47P5lnRUuVFvcnDQTLYiP0fdovwVDOvNr6ZWCn2pPZLdqHf7dKJ0xmmBsutg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
