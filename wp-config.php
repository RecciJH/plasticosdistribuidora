<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rechiweb_wp590' );

/** Database username */
define( 'DB_USER', 'rechiweb_wp590' );

/** Database password */
define( 'DB_PASSWORD', 'qSdT6.8p5!' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'qkfmctohazpzquyokqo8kr6mbr7zmda52dajj2vkzovnmukggt8dhvjrsylqewqx' );
define( 'SECURE_AUTH_KEY',  'jeggo2qnl98oesouz4tgz0mofbnafvdpmhnskkljmvyglcdmzxmsljkqjn3vmlyk' );
define( 'LOGGED_IN_KEY',    '4kabc0xzjp3atihzveprbqnwyevpmgpji3ixvfnfbhkeiqyemikmcq0nn87qh1r1' );
define( 'NONCE_KEY',        'jxelpf5kcev6af7vd8ouxj6w5daayyex1ntvrzfyjxs2tj8hjpvqgnlamvmgaczc' );
define( 'AUTH_SALT',        '7wsts8x4qpl2hpwffojcwqyukfqfacebnkxl0uysyx4og2uazijtad4qn5debucw' );
define( 'SECURE_AUTH_SALT', '07jspyibsof7hfe9t1ackylzfrfnitssr9ovbkwhsdhyy8r8cg8u35wfhp0kbwhr' );
define( 'LOGGED_IN_SALT',   'ynixtdbeyq35ltgxf5uszk2oow7qjfhgwfukfbuxfginmhoa6nllhhiwafzy7vzg' );
define( 'NONCE_SALT',       'i1fpzvpuewqjzyxo1rgqpp6ihw0jrxihmeisvn9hkgncaeuyokrvxsvskrvqewow' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpef_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
