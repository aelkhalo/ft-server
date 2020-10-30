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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'aelkhalo' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aelkhalo' );

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
define( 'AUTH_KEY',         '[%?LrYj/a+ mlL@j27?-Z{qjqc?]%7x4dFP% (bqoKnX;Au<W@NaA,^<P.z8|;MZ' );
define( 'SECURE_AUTH_KEY',  '/4M?(2E_My|KYx?i/^&*!M6B Ms*HH[p6,JsY6I(SmxX MW#N$ 9PBRfi[Y!h9kX' );
define( 'LOGGED_IN_KEY',    '>)syFlQWl|IA~Fg=PKuefdG}p!C; 9fm3UU^-|>Bbz_^DA5~N0nqy5-aQjC[c{&M' );
define( 'NONCE_KEY',        'v9i@Mp@gm;*g5y?Jl&0h8rP:)hc2n]Mw2zEx~veIzTula}Ut2TSzZ>Xlk4MUl/T7' );
define( 'AUTH_SALT',        'oU7[DK(BD_0Z1nqX*q^4.~17FzfkoOs^:U}.7pHpWZ-j=fl2Y| 6hd@j|$OBO%CC' );
define( 'SECURE_AUTH_SALT', '8,kO0jd<fnj8XCYx dQmTM@V:Zr |Zv8MI<{<t,GSMrVphU@,6h%ZTdRZf2kewHm' );
define( 'LOGGED_IN_SALT',   'p{<j[WAb1!7=}d&Yg3eiFsTIPPaIq ~S)zfC6C@N,WvEyha4)Zhg90&-I:mI]>_$' );
define( 'NONCE_SALT',       'OKt2WIEOBuRX!N9u5).0-7^[966n:Lx`}voAM(CK CoCDF-G54sh~Uzs*Nt)7FnV' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

