<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_latia' );

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
define( 'AUTH_KEY',         ']/jgV~kcPu@`M,PS7jno`p(`L{p0sg }++!]|!dbFLMHkLfV&%h}<;K=h}#uaU`~' );
define( 'SECURE_AUTH_KEY',  ' Qbv(R&=pNMa4}:X6U:+O0J9Q4egIgm&70a}_]ar/B?bno!EfeQ84B{$wgN*@-=<' );
define( 'LOGGED_IN_KEY',    '51QB8 DBJt*yt&kH8i[=h%;2n`ok.j5.kpaua;VO&{ltS}wH )q{gA&EFDzp3awQ' );
define( 'NONCE_KEY',        'GmvsU<3c&V8cQ&kv!JBP;PT>3L403Q(4f|->f7,a>ao.}9 WK;q}@AyYy)-u8lxZ' );
define( 'AUTH_SALT',        'w:XJ*Bgx[5!4U *yuqK=m]Mh6eb+a[wQ@OD3/f# ]PE}?V{ Dc@5{uuaF8U]{|dd' );
define( 'SECURE_AUTH_SALT', 'x3}.Pl#@;O_i6a+<)3jqEO5X(kD~L>/3aJ4d(4|.H-Jj:>.@Sufl_Ac1I<%Rqdy:' );
define( 'LOGGED_IN_SALT',   'E8|VtOAOm5}{9k3FTDQ/%/@SBp3&dx*ZB~j6r2^f4_-_kt4G>c|/=KD|o_Dp|6on' );
define( 'NONCE_SALT',       'e6^2b;Tj%O.F@JZogQ97wIcK57,2s9W!,*En|SL6V>Krzzj<wZPn;m4Oyd~UQNej' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
