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
define( 'DB_NAME', 'db_web' );

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
define( 'AUTH_KEY',         ' H@,#MKuF>g1]6-1~O*lL@@r854?].@3whu|qhkma]CoDg8yF>tcl7|9jsnEpF7:' );
define( 'SECURE_AUTH_KEY',  '&IA][IUta{e4;FY;^}RfYZ_O#YjUAfS[Xz1PQkKt6KKRv@dH[GRiK0@f8r*>aV4D' );
define( 'LOGGED_IN_KEY',    'n]~e}A!{>sG8Se/Q%qqV2q64<Q/[2_4A%zVCr=u!LORyB}?-ao.,y[7C:qQHYa^L' );
define( 'NONCE_KEY',        'a*2&M}i/zIlpII{[M@47ta/?@<nIG/+Z_c:p<=E@GU9]H,GcItfV(*;Ty3m.SEkW' );
define( 'AUTH_SALT',        'O=txPtcgb6HgMmaj|=dtXdHlEqf_4-]+c.00QaI$V]x?Ie~GmR`5fI5`n|)%/yCy' );
define( 'SECURE_AUTH_SALT', '#jLG=Tx 2po(,tBq|P~9Rg;a.VH7-Ij-L@pEGl.3@;b+:L{!j~Cjrs:wpcd{&k?3' );
define( 'LOGGED_IN_SALT',   'b}>w!8d%N^vqK#&m ~#wMU/8DoGH$%@.Gb^G!QcnW!KdfOJ=MyQ(N{6FZp /vWdo' );
define( 'NONCE_SALT',       '%_GpdLbVT8Ugu`b*2T2cPx25b6`F4L5tr41RcacUEsDfAPsMDhw*$(NgS-K4V0;!' );

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
