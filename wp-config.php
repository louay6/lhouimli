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
define( 'DB_NAME', 'worknewdb' );

/** Database username */
define( 'DB_USER', 'light' );

/** Database password */
define( 'DB_PASSWORD', 'louay123' );

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
define( 'AUTH_KEY',         'b<%_e!h|F.+Jf+mf(ag~K! TAC^l_5{P;%3>T=v<Bh;wvM8^K#:/$!@9%/oS<W  ' );
define( 'SECURE_AUTH_KEY',  'W*?|1NwXPwAyvMCRAQtYT9BLwt?h9MaWWW5v]-+cXs-X}3#ak9&;Q1SN2UJB==/,' );
define( 'LOGGED_IN_KEY',    'vGM/dz_HqL<Yua?1tM+*r6KScN{6_#cnizQzRx;w6f|u7*b,Cfon&k&QI,4xxFBN' );
define( 'NONCE_KEY',        '5=RW;N)#FnM1OWT^2s(gOw!<y7?0Ez#[roLz, sl(0Af(h(k8j7kkgV[KpC]`3sx' );
define( 'AUTH_SALT',        ',e}BUwSJqp`n]Oz7/9eLGiTLBfBNOem%[)+6wT?mq-.q0-wJ?(6uV2L9u{hvhU%w' );
define( 'SECURE_AUTH_SALT', '-&5~6m+Rh/ gxo?51-sGe QV)GFPj)X~B(AP}FX#u X`+!#@MP0u(%!Qn(0p]W,?' );
define( 'LOGGED_IN_SALT',   'O((hr,}B+CpR{d9.l^s(,TNTNjg,OkL=%Vw#v_9(5=aY$:Z}j,5{un^3m$?;1~bL' );
define( 'NONCE_SALT',       '&%%xX]mU%lp6A% V!&njl#zM V#U4](*^9ic]QFTQ9[=wrWeDyZQ%Qf28x4~TZCg' );

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
