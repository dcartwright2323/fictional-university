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
define('AUTH_KEY',         'VwSS4qAWYo59PAcXKzr4Mk4Auvvs/LpxTmU/XuCc9wRhnViOm89yF/T1NOzMvNkeBViAq0u/YBLc4wZF93xy9A==');
define('SECURE_AUTH_KEY',  'GBR/A4jNdqoBsAXR2/KFt1aO6Y3AdEcWhw0oRnigbgZikiM9g5T5RY/qPp/Vdkf2HkPtL/3C+uwECzbEOShFPQ==');
define('LOGGED_IN_KEY',    'xL6z5vxVjLwpIqoDL1i6FQ8G1G6FgJWGIaa2HMTkAO8wrRAYsEE4VFOGQgBzQLg6I50IW5sgCHdEo+dgt0ht2Q==');
define('NONCE_KEY',        'RTQXM+aDv/Tyoa5L5mYVItlmsjnR511lvfjs9+ef33hmJ6YZRK/RRlOo9AUSrhfSz/5MAG8XNiF8yIhwRDbYRg==');
define('AUTH_SALT',        'tJwZQosX/P/OGy/wSRdpzFx/D8lBH5MttndQLGfpIaTDbVPV5S3FITwE0hkoS4OZhtJBX8dq1yVQQTCxd3zOZg==');
define('SECURE_AUTH_SALT', '2Xyq2jPFSxIgNEqzcldsYD+LYceQ1/L3NEA9f9PNWKDCETipZZv4iQdPZgetoVVuCr4lvwbuO45O+CvZvih2FA==');
define('LOGGED_IN_SALT',   'JKg4ILZOc8dswVYqv5LghDQx7b31piGRn3tZKUzq4K9PTosuX/pYOCK9MBGZadQDxd/PEaK9C+WF5slQnDO2OQ==');
define('NONCE_SALT',       'LKEZGjjv9BLHBVA5lSFzMliC6ocU104Z4fmDOYYTeBsmbuvbMhh8VVpktT0RgTccOKf1ypv4O2sPwf1fuNReXw==');

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
