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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'TestWordpress' );

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
define( 'AUTH_KEY',         'vsnmZQEO9~Ju%K%0zS:_HPg`p$lHF|K%&K4,{z)33&R#jCV?--,~{dd{&$O:?.6%' );
define( 'SECURE_AUTH_KEY',  'eOeTx)O}]?~b8/COPte4}DBU[u)9l:Tur9,8`U9oVSrn$r$ikBSg0=bNY^Z)b<!@' );
define( 'LOGGED_IN_KEY',    '%;y`#Zjp%&I-TPa%lskWhr)I$Ywsc2/k9E$S&<MO)6sSwx/!a.BF<W6(3)Rkjr7=' );
define( 'NONCE_KEY',        'awY9dIPE^FhHAzA{UhZlsB.f%X9FU?trzx?(kXYHeh.x*e,$j{iN(?zn38tDg[a^' );
define( 'AUTH_SALT',        '7BNtY<8HhJ9&LcxFW>?k(YfU(B=WubGWUd-?2bcCVMMQbQz5q}i%1WkN`>PvKv8H' );
define( 'SECURE_AUTH_SALT', '{s?HoZZ>vVm[4?V=/_NTQP+mf:au3%7`h5RW*2ARh&tINkeY:H{6J<dw: g:m3X-' );
define( 'LOGGED_IN_SALT',   '..(YH;oUCQ(V-#PLS6Kb6pA~+<er~~?};H)S&4|*|-R!`O]|vI,7mXBb#qEn?tIR' );
define( 'NONCE_SALT',       'VZ`b>jsSC {=b#AN.T{Xr(5UHj&-?;+41l,~8?VCwD*.m{aHX#<f3.U};%Bw=`4)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_249';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
