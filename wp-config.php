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
define( 'DB_NAME', 'baron' );

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
define( 'AUTH_KEY',         '*o]ZU*8(=JIBJ71Lnu_TD}!z?!kAo]KZ)C a1}}bG[-N1l_0SoB~_YBz0YUhxncx' );
define( 'SECURE_AUTH_KEY',  'JcjbQ6|(iO{Qi%JnmB176K[~rRo GLMAa5)tY;NJ&s|r)X8&vDKCF!Z~K%kj?E$m' );
define( 'LOGGED_IN_KEY',    ':*|YLj8pqyy`TB6v!;j#s@x=r8iRhuKDlH{#tjtrr&_4r&QZ13V-f9_&]b|MDze>' );
define( 'NONCE_KEY',        'y{aN,CgYl]o,!R#9Q9syx8X?S_<EKGCqYb-hF,&h%),H(9; ?f[{*KyyM3&u0pg5' );
define( 'AUTH_SALT',        '!da+aJq`HY%#l~725d?-!l%R[@xK~#l@G6nfCFL&(M;4do-XX(7r1(_DS8f:0W i' );
define( 'SECURE_AUTH_SALT', 'i*MGHE=`P}>B$!sZ?JsZ>5^~8@-wcZ#t#}Tp7IxwL>e!mjq_]q9E0L(.Jy71AYhf' );
define( 'LOGGED_IN_SALT',   'bSS5(CinwYf5#-gj-R}L&=o9>))9+x97Cp%nh<?)Y!s?h4hK^U~ckwkD4+K2x*+$' );
define( 'NONCE_SALT',       '{=*zEP~o.RjPd:N#ax%bO,MB(jtj[oLFlV$6NH>Joeu86%k?`b2-yZIhC7$}vSUL' );

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
