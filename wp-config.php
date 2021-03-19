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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'exForACF' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'aLPKYfTesgAnFTuBu0YKzaKBMpzkQj3yMJQvUkSkusUzuoQs3TTqouU4uSTiCqqG' );
define( 'SECURE_AUTH_KEY',  'kVHMSL8dEU9dhNKReT83YpYLPxylcxcTWpha5uSR4VFOvMCMOzLJhaUQrs0s8gwV' );
define( 'LOGGED_IN_KEY',    'Sk6tdZkcO6eJhyyhpUKjB2ZFH5HmXUHsfSR3IOe7yBwcACJOM6i2PXPTJPDBAmhe' );
define( 'NONCE_KEY',        'FxQFlLrEmQ5pEP14KLfbeM0yKykqSHR6rJRv8IVb6M2BBPZHjynDMhzqKeshRwKW' );
define( 'AUTH_SALT',        'DJFiRoBndygGFpRAM55gLLPANSCYwH258v65TfL1D7Fp8Cvjs8l7bMr6edZIf1xq' );
define( 'SECURE_AUTH_SALT', 'W3fGL04pFuNu9phYMQZqTmZ2FGvS0Wx2lCyj28K9cl2wdPEeV3sMDgSEpXkPbszO' );
define( 'LOGGED_IN_SALT',   'lQQhRR25hnu7V4pe8PyGtzU34TKw0M3aNbC7lNiDMFWlykqvcuvTOPogk1xjb5L6' );
define( 'NONCE_SALT',       'WCvimr41ddxhk2VfbgraV3mbrWEERQyEJFVZ381Rn91Aopsv74sRsA31IEtxi3g9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
