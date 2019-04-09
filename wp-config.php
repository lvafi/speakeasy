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
define( 'DB_NAME', 'speakeasy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'c636kPBp//LNh|~sX$-Dp0F,PNxphQ4O-^DSY:B)G`6G(~S6~?!+^(.%j@21|wL2' );
define( 'SECURE_AUTH_KEY',  'X4R+Oja|s)KYD}K!e:YL@e;le&<?-DvPVik)PNurTntJR}%DY1:c_#]l_8]CgqsH' );
define( 'LOGGED_IN_KEY',    ',4@:DtiZdZ=F9$z2ACl]oXtQcg~EO v({F.J$U+NL;wr<)tbnRtJhY<DD&&4j-c[' );
define( 'NONCE_KEY',        'e7?Y$nW5iS{S`z)^(k/uRG9sfwzf:h^2~si;2~J1cdFpE  S4 CbnvKORqG/Uz!-' );
define( 'AUTH_SALT',        ',$L`DuR61s2ReX}C}[/IC<Kg?kMRl?~kF)1`a2s6v5)h$D`m8O+5Q2VR,aZ^vMN!' );
define( 'SECURE_AUTH_SALT', 'OS^OMr)tZ$ti7/:G8O$E{Q$5%q>ydmHp]0[JJ0s07Z>sY/gVb{(L*8xuG;w%eL!l' );
define( 'LOGGED_IN_SALT',   'X+5 sh-JmNlM0A,mK$?M3=]JW>_c9a?9J>u(wCHX&bh2]]{J?4S))a2t:W@1!p.I' );
define( 'NONCE_SALT',       'cn3Gn0p6^=2;{g nF-ql/`(/dp*dA>4$6D2QWpy&7y;~zywmUwrgIg@K&EG2Xg?8' );

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
