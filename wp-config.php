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
define( 'DB_NAME', 'carsondb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'jY}lT,@#-gAk*0_[ARP@cJd/:kr^qd>x%sFbvb@W;YA91uKAJxkpnk@UPBMYdR5]' );
define( 'SECURE_AUTH_KEY',  '!R%pD#[9#HK319C|;Xb^:r<Y%9S-(VZ#F#xX*m^|XMMi90j/>vO7Y0]&f7Na9I)I' );
define( 'LOGGED_IN_KEY',    'CS!|tZyE-o>UopK6458&KeR20fZRQyYkwM0BB98<P1naZE/o/suB<JCk:ZR[Zt;I' );
define( 'NONCE_KEY',        'lVASi5]+laIoag*E4a9[p1_t+hf#<F^YBFWh+p2D8V@P?JQb224Ow3ICKW}|FX)}' );
define( 'AUTH_SALT',        'PILv! `$-43|9R9sIa7=`Z]K5BP1t1C|yBivPxTpG!MpVr[ecmWQF8OEXYpE}ivo' );
define( 'SECURE_AUTH_SALT', 'nzWXC5jA)g[;]Ll4P)!-xT!.uBdFMv-gFjsh<5@eRCJ1}1}D&]zY2.Lem*>0E*&N' );
define( 'LOGGED_IN_SALT',   '$rxO!0HL+^A< Q?%HRjn3<70[xS rtX+tvjYw|y.)-AvP0j?z3m1f89@1?z%=Q1Q' );
define( 'NONCE_SALT',       'Jkc[by|k5_*W,`$>^Q$9{O{nnqXpBf|wLj.iKCRRQab)Oh>;/XyhOxzg3t[]AVGV' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

