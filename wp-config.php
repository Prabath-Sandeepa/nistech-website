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
define( 'DB_NAME', 'nistech' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '/Dabyg?E&]DvE4TZ+j@yB2.P:Cw#CVOQCd]uk?f&4UZDYw6 {4{JS[nz<Y?Hd}8O' );
define( 'SECURE_AUTH_KEY',  '{/J6:iPd_e&.%pB0_Ol.#!3de.q;hm{_slIc3Zb mLq$]ipA9^q6D&#LHkBwy?!n' );
define( 'LOGGED_IN_KEY',    '=_(F$tO~[P)m(YIkgTe > 2Ls)/=I*[?M7(omLjZrFv5*Vu3B/l3Nj:6RS LMa.T' );
define( 'NONCE_KEY',        'aBL(RXcgO=#RIwhrodaQpegM1vQb4kA9x@m~f(Ld9(R>q/#~(Hh{iX.#jlb/0%j|' );
define( 'AUTH_SALT',        '3]8=V(zr$i?/s% HwB;Kqo2K{XZJ5_~ISbU{1,~CIMBKvN(-S`Ek0*Y 0PS a_ET' );
define( 'SECURE_AUTH_SALT', ') o,)I.{np@8;^`:ELX<$^5T^bVYn{SQvSyA(}Drfdz[da`3r!=9_-vE<2w/{]@a' );
define( 'LOGGED_IN_SALT',   '_bQFyKV5NWC[#J5VHBL3fO$kpYzHA,-x,DtyPYb.5:LPcyXzYjw4jKtCB0oQV1XW' );
define( 'NONCE_SALT',       ')vrW)FNjb8H>$.U]CDePn;hkb>Z2&(6] rUsd>0q*Nirnmc:ZG|S)mhz?0R,(9mw' );

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
