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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '{3Q+xv D|~P-}SbL=$>ZZm&IeahXWsSfNARn#4KD>+,oA95lga%NmDIgA&w7K&bs' );
define( 'SECURE_AUTH_KEY',  'K1bi%Nd6Xn,2Ud.rg}&tcTcG)7NMmz%H2AH&R4Bu<`7``}b1W7|pcifwYcdv#;S,' );
define( 'LOGGED_IN_KEY',    'E4 ;rK!dmkR]M0? KT@>pd^|v:t1uK6:D_>h4#(SUs6&HKgo2YHO4,a/)VRw72%,' );
define( 'NONCE_KEY',        '*@kSVj8~+:$2G}{HWl{,F.$|]Tz8p*N)RL(gnKDrj&Ii:)q [y711]52GdHIcvyw' );
define( 'AUTH_SALT',        'C91q [.X?x$$)+Ig=]T0w[fcZRZZCT8qp&S_/:!l$7Yox| @Qn`uxtCFgP8D?zR<' );
define( 'SECURE_AUTH_SALT', 'x7R^zDSMCo,wE`q+9M/g8Oo95wMfcLC`5#~E*/zuVaX7hFpq||Ti4.)%fAreqk_M' );
define( 'LOGGED_IN_SALT',   'c:vkv6vi6jTe6dg@u};q@qot9XCZ0:j6(HH{=+$@<3@(Of[7W*wMqG%MD4&pKMO5' );
define( 'NONCE_SALT',       '5N%=kk_;Jh~(<vHIKIXzx=Cs5e/Ei@H=b{*M;|8E@{G<Mu0?%t-U$:fa$(VdA;M8' );

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
