<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

require_once('vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $_ENV['DB_NAME'] );

/** Database username */
define( 'DB_USER', $_ENV['DB_USERNAME'] );

/** Database password */
define( 'DB_PASSWORD', $_ENV['DB_PASSWORD'] ?? '' );

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
define( 'AUTH_KEY',         '=$3581z:F2S6*8%,zm5hY%^yweBFl;&eQE/>Q-;d.9n%cLEk!tN^3e&T/yT_)*WF' );
define( 'SECURE_AUTH_KEY',  '2Gvh~!KWklW 1+8AEl/ZuMiq_/m | !cr{L2Iz:=cE0HFoc^</LJSwc]G^$639/&' );
define( 'LOGGED_IN_KEY',    '}(ya<Z81P-5*#+sjv]J^+^lO+Q;*j,t*&)z`<76e_WOH-P1ifP:-|L%`mO==(vwU' );
define( 'NONCE_KEY',        'L8EtzL<$!mHs!}.Yha*Mwe K6_,uQ.Tn-[43 j)V;H<WG}b-qcWoth+2$%!k&gg|' );
define( 'AUTH_SALT',        'Abn+-|MeKE%</_/2/9wF~PwdZkNlWv/HU&&0o!]3$-{|zyn=kjAu+,DOFRbChOh`' );
define( 'SECURE_AUTH_SALT', 'D URTM2tI|&Pv2<2exv |2QI*6%0sI{6@fj3a1O1AH=,d>0uY{BH-)D`i Z%6* J' );
define( 'LOGGED_IN_SALT',   'GN]we.)v_i[@CDswBq6rB|]^K[^|X~yo-qTJ2X$~N;@A1XZ?X|)(01fXkOsMjMR]' );
define( 'NONCE_SALT',       'kp29^S/B1,IyC`K$]Cn( Blm+DPJ-TUdX4NmcO`,zM5-2B3|An]{_D28%G1Eumcv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
