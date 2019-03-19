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
define( 'DB_NAME', 'transformed_db' );

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
define( 'AUTH_KEY',         'cVM/@%Trl0%SLI]mX7;*]i/DBfXCfbBBVh:[~om:z&UuXy$WBH5H>>{:/1?@ZNHP' );
define( 'SECURE_AUTH_KEY',  'DV>YW J!G5O9mEr9^>8$aTz&?tl%n=u6R2R*=y MRQ3,f)-dcavFA65JH-Nd:bQ=' );
define( 'LOGGED_IN_KEY',    'qK!aI:V#`q^vAD/*SLo,fNqO[Q,Sz2eKaudnRB<e8YGZspqgiG(PZCCJ4guDk#x9' );
define( 'NONCE_KEY',        'qAe@{qS1~r{2.2g/kY@<nWTe@H6y70#u$Y=b:xt!C2O+V@sH@_raO3fTA8 WVVvM' );
define( 'AUTH_SALT',        'I:$*Vq3u<srn |ddO!cZN3u{IMLk>HF*DJx6`0I*jL1(yn5A:fdPDPa1r&Q.7h;E' );
define( 'SECURE_AUTH_SALT', '!NWoXGydBWm;+N4/bB/gN-{/(LTve$s.v6(;$#}hUN}i@Q&(_V]r`a~)l02<&X.+' );
define( 'LOGGED_IN_SALT',   'D&[+Yv_djL?8D.l$T.hEshF5!<Ts$g*]!LtTCYdg9.:TBKKn2Z~`LcG>H&40#1+J' );
define( 'NONCE_SALT',       'M_!)jMz;u},cOdHceZ!hl9nb?>0Z)AiQ(qIbu~+S|N,,ck==zPhNNUjac|pwQ$&9' );

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
