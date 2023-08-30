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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bsite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY',         'knps2<L<X2p5~)6-QS8/ID5NM+%0V_^8&XNZTfbl{j/7a~,k0V^tr$fIj5)]v2Ak');
define('SECURE_AUTH_KEY',  'W$s/6-7rya_bRPrI:,DS|?E_!9h- X5/@[|kM+g!:?E#`&KxM :{G):]vR/D851|');
define('LOGGED_IN_KEY',    '$UU5,8|{F.dYAntdaa3dnfGyjRy!K~#x(Q2a~-v+c+-_fhIYzL<4o+>x0y:.HTgo');
define('NONCE_KEY',        'PHTuW,![-zp$9otl559 hxBk#b@uMUsAa_Wg76y/vJO{sP1M`%gI|-#WQJ3c vtl');
define('AUTH_SALT',        '$(xHMCr:FiLD*Em*Wt:kqn[dw00(E6:Y1-K`g%^G`!:R6j-DqBqxH7-V5aVc?+Qu');
define('SECURE_AUTH_SALT', '{>5*TiVbq-I+ceH}OTTS8ci$]=TtKB2Wlgf6_k(NsdO#AilfXK25@xy#?LN-m$!+');
define('LOGGED_IN_SALT',   '-dL5X+]C]%g6s$p-dG/S-f+!0Yc>8z!A),x{Cw ]R|fiPu(sfh/C&DBr6Y?Ago4Y');
define('NONCE_SALT',       '*Wp{b<<qFc2_UD6pR<xau4j?JF[~h?^{7rYT x=ii[EA gm`_1V*-Z9V8]=Z%t^U');

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
