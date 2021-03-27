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
define( 'DB_NAME', 'siteUcdEst' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E6N2tAZ!g5F~fL] M_K<):jv5YO`1v2MyHKS*p4k,*S:gL`J5*5+/e%gU7^9vQQ<' );
define( 'SECURE_AUTH_KEY',  ':uYphfvj$`m#/RP}k@NLI@lN=O/}z1O=ybq<O+q]) Px-[Sk:31:+h_lL!Y7{zsP' );
define( 'LOGGED_IN_KEY',    'A[V4bc~H<uw{o5_/O vDv4m1gmHpST3tE9qusOh~2vZ-u]k#B/}y281fz(r^c3@q' );
define( 'NONCE_KEY',        'm>`_La/]_/^bAwMo#, @],7Odd7wT)mbp/u9*>bnv(yz9JT^d~K%bOcw+=3Sp3:3' );
define( 'AUTH_SALT',        'c4@bdt6`2l0l1EhhyuHNvi<X&bI4#<~9;P?H%p[aamvBF%vWQqHCUuL_nBbOh^l ' );
define( 'SECURE_AUTH_SALT', 'c4xq_-Lnm>An(H%a:08wLd&95jOt`oW!cU/@~>[<HSezQp}Y:<W.L/}Cq)xnR>TE' );
define( 'LOGGED_IN_SALT',   'x9^E1l?0%4$<ECXL)L<5Id3NVC%>#;E<#=`Iy=,,EYt3bo){0tRc.PRH5jrG`g9>' );
define( 'NONCE_SALT',       'U(oIL%%sy`.VeSG$lE*|rWTT$6+ZVj`;(bGZ ,$Ws{v3Pj+Gm0P/DT@_2&+a5sou' );

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
