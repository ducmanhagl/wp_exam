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
define( 'DB_NAME', 'exam' );

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
define( 'AUTH_KEY',         'K:wXgih+{}C)m+`vaKqR6T@YANa1xX^fbk2R]cJ@C!~`H3ic5*,./36*9Z*XPnX$' );
define( 'SECURE_AUTH_KEY',  '6egAmZk/IP,4C]DYYeqC45ze65yVr@I=ekcU6)A3qn]&UC~k:OmJwj]azi.gF|qt' );
define( 'LOGGED_IN_KEY',    'HBtqj*x&:4s[CkH}zdu5XrFF1Sv&(*KRI?!Mz7m%rXb!H0;!*5i4=:Aj!%+hc*@S' );
define( 'NONCE_KEY',        'w1@vR0[n]&Pcs,Xo]ahQ4&X0 cP[KjY,W~6#k8=a[;+,29@_t|CSul+usN.B2dc7' );
define( 'AUTH_SALT',        'K3toTN?k8A$jP{{i&.%Eh*xl60*-b01B:sPwE|~} ?9BP`PJEVdgJOdnK.rC=O;!' );
define( 'SECURE_AUTH_SALT', '9[DQ8v!N*^(ESn>p,xs9%KEG2IX32OQZXTyQT1{Hic-V7~b)$v&L?XOb=RzbncP/' );
define( 'LOGGED_IN_SALT',   'KPTo=m{ttX/v9Tyjw8 ~nD_Ji93XN=8`l0pMVsR@1Fm!gg9=#!n*(Zd2!C;m0!:W' );
define( 'NONCE_SALT',       'Rp(e)Rb|Sps)khuN)BjtlL7[-lD/ySDRK{_MvjLpe+|hT@r8-/U*C|7ihH]=MmLR' );

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
