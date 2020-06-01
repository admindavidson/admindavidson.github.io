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
define( 'DB_NAME', 'netsquad' );

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
define( 'AUTH_KEY',         '}n*mwy&5IQLjABvGyT__}-UyV/m?|%>Xg3`7v79)13GYHEn2E150y M?`bnyHw#}' );
define( 'SECURE_AUTH_KEY',  'L*,Gs<3mrPoiFMB^lne|I|gdjCa?E;_adY:XayPe^Pq6v^!PLn%8,3&LXc>>grCR' );
define( 'LOGGED_IN_KEY',    '3Z=z=GSkKIXW[t@}<Skq%TgX#1Y5):}$Hyo|UyG%o.kS!b=Q6gO*+QN53=`]ajLv' );
define( 'NONCE_KEY',        'lmE[TINE*235r3G,f02~zr-L35)VXy(cATsT)Ic{k:QKu280K),4DPbMS!z7Er%0' );
define( 'AUTH_SALT',        'Gk~jarN3Rkijgpq2~j%oLf.7p$<xF.m I.pc[[}dz#K=cBvC{6$q(7eq;F<`N&*-' );
define( 'SECURE_AUTH_SALT', ';}>Wd!D>TmXZI74`YSRWi~8Y}^=}!(^p@rnbQrV[-Vk+__)dKA3z#r:p!.UHmg{N' );
define( 'LOGGED_IN_SALT',   '{EM^.SbVq?O9]0$<3c;4.drEFS+o0Y_yW0xIZNlvY(HF49RVVA%#z].?0%6d?:h^' );
define( 'NONCE_SALT',       ')Ld~K=8YW(il.*hzl5:G&8d%R*o0BnIn{}v:q4r%=ktd,u/S^K# 2HfsF:hpI^7:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_sitenet';

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
