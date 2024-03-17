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
define( 'DB_NAME', 'e-learning' );

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
define( 'AUTH_KEY',         '< vK{8Ukbd0>(og``_KJwbWu$%v|kATqYm=?YH40LI;PpV(=|({9G_4;9.:X^{o1' );
define( 'SECURE_AUTH_KEY',  '$~mM~,f?@KOdrLo(?G+}/ffEs;Z*!-Y*X%Qv+s+KWQVrUS+k;9}xx7CC2f5>7oXR' );
define( 'LOGGED_IN_KEY',    ')&f0<P@I5YdxFQ+^h@Pg#ordb@=LfOn)saHRazDOv@(C}+hxU~-7w2/>= 4FBGjE' );
define( 'NONCE_KEY',        '6UtC8`9R<A<uhirI9?Jr/b{~:#1P[@USDBAgo1-[:Y AL48@Z]BUeh;2& _{6H_}' );
define( 'AUTH_SALT',        '9RRB5X|nFet11bp-P=3OP=@y8J{%$Yp;uF]jzm$&9,_hTtOl1~[p+!$<_~ETymxG' );
define( 'SECURE_AUTH_SALT', 'qM:n32AAjs-/&-CJ?3<5fLze_WGO[LJ,As 8[ho&g#JlV!S%RIwQ8neBR]78zFa4' );
define( 'LOGGED_IN_SALT',   'WG^x^x[e~gPe.x=>;AC>_}wDTcNOFjDOQSga!;7_R*t*MjwdTXro*/##- @dwmFU' );
define( 'NONCE_SALT',       '27F$Hi!AARY+nY8zVLRB*fFB|NgpDG9u#9(V>eu#,fr<q:@;p@NA)}DsOumdL@)y' );

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
