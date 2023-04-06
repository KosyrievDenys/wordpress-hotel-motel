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
define( 'DB_NAME', 'hotel-motel' );

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
define( 'AUTH_KEY',         '3ZT|k=6`G3ugtwu#nftbB/8bVVDk9oDNPiL,g,&`-IHp&6u7[ =cQQ-oI8cmSW(g' );
define( 'SECURE_AUTH_KEY',  '[reg+7ik&:ZwpfFp2/H2@=3]>:J8#fegVSgjcX.,@1-zXV.G0CTVG/iOKpf?]U=7' );
define( 'LOGGED_IN_KEY',    '?N]Z2q6lJnW;,+B43qD~l-<1jFjq%LAEI8fj03aSZ6p4>kh$Nq9$K6=E.rR$ =H@' );
define( 'NONCE_KEY',        'y^PH_%Rc|K<8[y+2h4)cHJ@}QGba&hwIN(D/Z4+<bbfIr)lcT^lR1W:<{$*:~2x{' );
define( 'AUTH_SALT',        'k+rS.{J3k+gk1y)OMyS$wDb%<D{:-glem!&_Jbd@P/$=lH3~!D~6,VgX^Q]0p)Cb' );
define( 'SECURE_AUTH_SALT', '}b11oov%n3i|m,H|o[d0>fiUg&*v:A1-D2/%AQ}b,.6~_za#/9!o!_(Z-/Gwk!#)' );
define( 'LOGGED_IN_SALT',   '_`vi.kjp9`@+=gY9bqB$wX#{7(Tn~qJb=-`MVo-H| II7/R,5dH;X9<NnpI)zm1t' );
define( 'NONCE_SALT',       'rmCFM2C~7@:mB}<lllqPsP; 8S!OM]NufS|HgV3Qz9/5tN7x{I:+(xNFKWK.+NKt' );

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
define('WPCF7_AUTOP', false );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
