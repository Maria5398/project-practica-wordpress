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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Program Files\Ampps\www\wordpress\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'aprendiendo-wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'mH5t~.XLQL=n~D%%Dbm#[Xxv1!TWjDw%]cNwKz~nZkpBbLx)7XASuoqhPD#~)IQ@' );
define( 'SECURE_AUTH_KEY',  't~~A>Wo)%vHuUtHj= IeAWe3hP^X@G7`&M:PyN]jyFHiA<=)0)fh?{|~Jfz0e6]}' );
define( 'LOGGED_IN_KEY',    '6@q#O]dg}V@w</gB,Cj/125r*D$!]2.zvJd?{ag0/M[z;(#pTq[kTM2`|WoodY)-' );
define( 'NONCE_KEY',        'om&k~V,%B].6 9=a_6d^ qa!P`;[j(f N+Imz`}4M+|yI0pH^fVw7RH?&B|Nho`|' );
define( 'AUTH_SALT',        'l~-.Zn|fL4&xUx2vmh>^Xs(W<O2j-*P}S(whT8f`S@p po Cc1^1pz#g 85;9.DH' );
define( 'SECURE_AUTH_SALT', '(_vLF/jsf4{WjPGn<.z3@Q5hIT}}U:8{u,aBXE6!}t74;A!&)+oeC$o`8l?#Mt[q' );
define( 'LOGGED_IN_SALT',   'k </VER; 9W&KAIschf;u&SgPony!fV+d0cgDKM,p3QR )W{*gDKekRqRdT=yP0q' );
define( 'NONCE_SALT',       'Yi[brV<+ZrnYZV6lhN{cay$&YUQk3[#H%M+z3KUQ7a(bO`Rc t%?R_[%)~+JF<f0' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
