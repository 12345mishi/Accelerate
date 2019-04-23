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
define( 'DB_NAME', 'wrd' );

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
define( 'AUTH_KEY',         'egPe(qQm(ENv8U@sYML`e`33[Bl%$U2075TVf.S-Bs1[K7h+@s}QhSMT@nXx+8FV' );
define( 'SECURE_AUTH_KEY',  'a(;~,!<u!j`eWl~aV$S2+i<WZSN}y+:+~?iBMyM@}DA;kj,kkaP>TmjxjLVi6a?.' );
define( 'LOGGED_IN_KEY',    '?2^&+212LUic5x*>Z*E68qd{U*:/C*Z,/kMeZaF=a9qYrvz67*$5N5.43-&XZfr9' );
define( 'NONCE_KEY',        ':E5t`HX2W-cCn/}y>+IvPJyRSSV-Lb+o-P7~h:p&l-*<EnjO)_z8gOFtB=DZ)^eE' );
define( 'AUTH_SALT',        '[vUu4.uP.QX&pGU1e!g./a?bWf8q~3B_K-pKl!rv=z-rT;$$c&ac/Mx^FiC&F=SB' );
define( 'SECURE_AUTH_SALT', 'NVivA6mWAskKwks0a<`Lo +W(C?az0Ry;zc$B6:%HcyvN]c2kI.?]IV{tY, GLj:' );
define( 'LOGGED_IN_SALT',   '7{KVG=h+O$6_g`37),aYIHcS=LF@6~mvGKJH_RvFjEn@y{qn=jpW5$&sx;h7<<C7' );
define( 'NONCE_SALT',       '{=wP#.2|}+%31r=nSdp l4#~LSN)eWwzEis&^/<wz#G_>XJX$:6s9;Q}QxU~-Ez0' );

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
