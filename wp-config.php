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
define( 'DB_NAME', 'git_addon' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'oO+jI0t}T32DQt2Y.ke>H}lmSjfr5ct~Y4.S^Sn>q{oAjIy.bOJxR!w+T$vrL3dg' );
define( 'SECURE_AUTH_KEY',  'ky/,7%{V~r~@y4$mC]Gn8ToZ2*Q.!faJ~RSCHr4*Uo`%Jv&X dnAf5_U#ipI;!it' );
define( 'LOGGED_IN_KEY',    ']|aHN,g.Qe?H*fZYr8oWxx3mJ$^brDPyA%LWe4YONysSh3[k7@m O<|,)i[T|R5m' );
define( 'NONCE_KEY',        'G}.),0N>Mf5{[0&mSo5CY1e1tt#:Y^P0b8q,kKs=K&v[TznvFmOkaZVqn5vv(J{d' );
define( 'AUTH_SALT',        '5vK,J>_?-YXg3Ci=:i&YKbX.Z:NMv{S?ci6y/_u#u5#%,a]IemyC:(83^kA*+4,2' );
define( 'SECURE_AUTH_SALT', '=pWpzE<@5mu)/0hYy>oI]+v7(ujUnU~+F$XbMm_,WK[X0l}{We!!Q+B3#(*NBD!e' );
define( 'LOGGED_IN_SALT',   'Ds`{Gzt9T@d]R,vc]%vflShOD_9oKV~_k8;M|8Ydm?gy=#~ojVy>/9c%oj]0PS?r' );
define( 'NONCE_SALT',       'b80R-Edg~~$jh(nnc/bbu:!S$`Yq_9ChB/- ;Z;;4!1qy?8k6K4~,SLE*0~uoB3X' );

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
