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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test-task' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.0' );

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
define( 'AUTH_KEY',         'L^W]_[+1gT+,hz=}TU(_6(BXXi=fp<tx_K.k-V<zif1W{s_RvXuy+*yHhR^4CSr.' );
define( 'SECURE_AUTH_KEY',  '[D9*=xnEC8B|ukQg@:tgZc{.F.z_B:8$99KJ^ZLO5-.N<.k,=41L$N^QF^@Jb_>k' );
define( 'LOGGED_IN_KEY',    'cPgK)numOTXUvbNW;rpACx_@fn6f$.03Z56;UjQ>%n%{?HJTK_]%IBJzYj;S@Ab,' );
define( 'NONCE_KEY',        '0qI5zFcUc4@H aPzd}s*uD[o&KsNYKL4=3^w1Di]c]Tg?tRFB#e:L$[Hi)Q[@|MK' );
define( 'AUTH_SALT',        '8tF|(^[9[Ak;#RoC36c6^$-U@z8{_$WXiBZ4~:+ak44qyxK[EgHoChMn$-[8$/u^' );
define( 'SECURE_AUTH_SALT', 'O@$6lC]`Ks;AQK$7cqaZ&aG3D=>S<{v0kQ^WVs{>TN31?y:,#4#zc&C&J?*!#k33' );
define( 'LOGGED_IN_SALT',   'M>xl-4)gc:knClif9o7ROg/g/mI7@kOW$:12^hi~+&GdYC`pXx*;j4f1[<O$2ejt' );
define( 'NONCE_SALT',       ']M$8>7CwZv9Z@qK~j M*(BiC$E3k7!r|#c5;$@r6.B=9.LFj lt{W[_>j53JjnWq' );

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
