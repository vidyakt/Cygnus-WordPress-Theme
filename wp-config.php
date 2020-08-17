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
define( 'DB_NAME', 'mighty' );

/** MySQL database username */
define( 'DB_USER', 'user123' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         'Z#!`7v8Hb-S(]4:i>xCsMCV[NxPo-^!.YtfcQ6fIV4EF;)Zu{-^A(&Bv|f?D:L6~' );
define( 'SECURE_AUTH_KEY',  'z)y/D,UxQ)r:Ay}qV.&Gg^{I<KL`3z@Yhj^=`g9d{2?f3AEa8frxN1Fh%4tMoX[~' );
define( 'LOGGED_IN_KEY',    '|gS)fkZu+#,F2D[&+dc_L9uslUiT$Qw=L9swo)f;t:vb|Y;P9s=:j:4N/E;PB|46' );
define( 'NONCE_KEY',        '.:+4,_CDK~/.!;0hH%vz8E/ O3)E_>|d~z4Bv<#]..2ewV&Js*Y^!D v~j21y|(H' );
define( 'AUTH_SALT',        'ocoS[#0;y-[v[kBg=H:*aCI<bvXNLGx1Ad;O7sH*nBvwTw7O+ycy.MXpx!.B(T*w' );
define( 'SECURE_AUTH_SALT', '^q!GL_6rHk/(LJXRX#PH@OR(=_xZagT^25uItRHjJ30HrtBX&1Fj~W?zWvDB6ey>' );
define( 'LOGGED_IN_SALT',   'db2b{2aK[d0cT+{1T#^&rdyb11)|PJQ,~Fk<7z,iH[=8?,t[4JXO+An&(R) n]Rk' );
define( 'NONCE_SALT',       'A9 @c2|vNl^.oe+.-.~7vtAuH/Y#gd.x2r;[aTVmLLGb.yE`H6xGq}@N)9GG0s`/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mg';

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
