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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'j=,w_]]<@&<eo5Fozje>]%LGH1<o=Nch!#K2&rqq4X>:QzFNu{b$sg6zR>j)XwZN' );
define( 'SECURE_AUTH_KEY',  '+1m=.(ht_h(fTR7oK>><xn6MS_2v&Bmg&^SS_R8!p<x5~PviQU(e9,AV|h]#9*P8' );
define( 'LOGGED_IN_KEY',    'K}QdeZS^-aiG=17hEG8OZtJh6mT%h]2Zko(W?~Rh6gvaSKD}xZ26WwgU2Hyf}=lP' );
define( 'NONCE_KEY',        'p<^V.kPljL,[UkqaHc74awr-TBrm>p:Ncu6J?fp{oIkU.9QH)p+,?m`%7LEQT/qT' );
define( 'AUTH_SALT',        '6wM3Ex`%+|2zueV)~E),%Zkiavz^2O-),2QPiw$xd#k!3tu5^nj*E:*b<v&zZ{6D' );
define( 'SECURE_AUTH_SALT', ';vXLzAHXYT!/*$wcgFld$$lx$,Z*_KgY=%_PtJj(9Pcg8~SL,i7qhM*9_>I>6f>;' );
define( 'LOGGED_IN_SALT',   ';>^O*x9.k3Bpt4u+@W23*WpKF?0o>(/TnIH v<vlLwu:Eo/lp,|Dz?U= =zMa|-d' );
define( 'NONCE_SALT',       'P09[_+4eW$$zN^Whfr,_JuvvdO7VT3f(6(eT$cb2JW,p.G><l8*tBItl-k(R]!U5' );

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
