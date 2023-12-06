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
define( 'DB_NAME', 'acontact' );

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
define( 'AUTH_KEY',         'f$r?,9_T+ +{x.8s#7C}_#2zezXAS!<v@AdS)V}R7X`[9)IBsx4z3H33-aE-}]@M' );
define( 'SECURE_AUTH_KEY',  'ZKrb&?IQ.A#NW4u57?x. M^Lm^nU[{r{u~c7Yd_xM{+~I)L.(0 !5{ri.;fDV1@[' );
define( 'LOGGED_IN_KEY',    'G)wUL~OX0x{,GO:i?(GoIn(kgLlU~vm7Mp3IY)YS[k;R}H8|=r;e5(>.{wm@]U)(' );
define( 'NONCE_KEY',        'K.!~]fd4*HaD:oAaHPN0JT(=*PPi8yK&3DJUgf22]IbA?OJS$EOS >M=-3yyW*^O' );
define( 'AUTH_SALT',        'zTDP>)A O0Cf{+t</(~4fmUb[$|%/@wIVnQA4W^3x5;8[0hf00kN$m/w*%tQ;e6G' );
define( 'SECURE_AUTH_SALT', '1*E^!T`/,1nd^47!iYv20zxt :?-A03#?[/s1Xc7/lke/?B#d@LTsI:V^?HR;!]D' );
define( 'LOGGED_IN_SALT',   'p=rS&^g^>LIM,wti-^41Y+Q-u)`Hq)YUcY;xe|B[Ybci$l/8JJu9BCFh+t/NeXV<' );
define( 'NONCE_SALT',       '_cH2>S[sT=kw!!#y4%=`-cq$WH*Ti6UXx?.<(J@&Kx.)v[# 5vvob2m#/)}M hrR' );

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
