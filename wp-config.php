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
define( 'DB_NAME', 'office' );

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
define( 'AUTH_KEY',         ']6~RYU>aj@`?fC?o64mBzNmlK~fEkU^6#p@e`.>Zu7jp$w6K`4`@b&We /:YMxaY' );
define( 'SECURE_AUTH_KEY',  '[@p-D$!G/0[V7.prK|M/zVfBX2?*T^W=ZTHqlY#~qL}D|Xx,jnOlC@52hawv:*U]' );
define( 'LOGGED_IN_KEY',    ':b}]$k[9c`80ZdLAu`86dOZ!HGMzqT^juXeC{[j*{9,614~(zYsi&4|2Pru{[/DX' );
define( 'NONCE_KEY',        'gTidl?rW9+,x0uG0`TEh3*6ZB=BeH:^Mob _<0}/rW6tS{$:s0P&Vnz[6RF5Y!$M' );
define( 'AUTH_SALT',        'ZG368Qtd}}<m^YtSlL#4Vpc.cTH(&k>1mz&1:=kUy@4C+ig?jDPRoum/Vpi?`5s#' );
define( 'SECURE_AUTH_SALT', 'SC+VQ^SJ*C0W/*P{}N|3e}}:5mhYJCO|Na[OrHr5<RtCbbd>~`!uDmx$Yt<|zb<;' );
define( 'LOGGED_IN_SALT',   'W4f6!Tf)FS,nhpwUt&S{+90li=3HtVaMzDNkJ<IKv F][Ak$v,81/`P;*f%F`9qQ' );
define( 'NONCE_SALT',       'Pzv*%?$wL*dY(u-vZd$g4W+[$$%w^hBQhiQwJBiTCOn#cuIGL/Y<XRpKB,86PP`Z' );

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
