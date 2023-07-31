<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '87MuCtHZw00p/NIpNHTZySQqh9Vv34iaWF/RSWzjNGyrOgQoDv2S1OS/wFyIRqmSS3pSfgWhINcwWkQNkEp+DA==');
define('SECURE_AUTH_KEY',  'wZCoSml9mW9mdNLDJ5OTxf8eW6udojAx9RfeO2+NuK4qZvnK9ZGNRa9Q/rXAvGOlJsVM7Ukycbzj/qwAi6BCGg==');
define('LOGGED_IN_KEY',    'XxojwIcCeHUYP676bVmrc/4VfPbJwZ3IcAKkix1wa/8QSZ/GuL5FLkIu+ifOlrt31DNuIvpWUamXFB2gmg4Q/A==');
define('NONCE_KEY',        'TouqaFZINoA6j8sf0tOjSMW5j6V0sToNBz8zxqLr2X9Ahku/5vTCVTtzjGD8c6l1P0DjRBjuRkyCKrY+9KKJcw==');
define('AUTH_SALT',        '67mrUyrPfX7GvsTFkhowCGsVDCvVSsEbh3cwtlBltjkH9SoMArd5e2anLQIGTZ/g2uaNdjR99UHpnv6TpebawA==');
define('SECURE_AUTH_SALT', '3QXsh6wmFj9Vdo6SqwQRHGP8r00+SVM07vuO/qqJzgQtA9o5oubAIJtGuUyEgtfa4+2HTkCHp7YhpF4nD1IffQ==');
define('LOGGED_IN_SALT',   'cZS4o16Jum+lg2El+zPS2T9iVFtS+mqMOMi+4V3BTDQKQVkaSvRYFpe3EHYnq4CdUPIzf63hpifnNiml0absLA==');
define('NONCE_SALT',       '0yaYMrL8iwlCuoJWT7UD3rZUxTwHqwam/AmiUWl1KYXnILU8qH67g8zeM4aUds8bfuHqlfn7rulgQjR/HwpIkg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
