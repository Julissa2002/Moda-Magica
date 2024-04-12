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
define( 'DB_NAME', 'Tienda' );

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
define( 'AUTH_KEY',         '*,v5@L|c7(rnW&yDdv_Qq98Fs8:U7}vcU.2<t+PK6(=?H{QrJZQH7=X8CL{9r(SH' );
define( 'SECURE_AUTH_KEY',  '_P04)ejDS<{3Z;+0m/OT7~DCV7JD 4yEVJsW5-TtritdMz {RItG~vEcR)v*^0[`' );
define( 'LOGGED_IN_KEY',    'l#vV:#%CRL8n9wy %xDTB0&O,n|c7@zz+46)=|hBD]7&$sU{}ZXt.vn|0wQ^UK#Q' );
define( 'NONCE_KEY',        'wsDrt5=~Uyx5q4xJ.Gm=S8_vPDwih~y<7QV?AX?S-Cz4$?y6k3)Ng1AY<+{jLjtW' );
define( 'AUTH_SALT',        'n7`3^F;v|B3ux}?glnex|c S}xcjnj3NZSLqe3sGCjM?k>`5EI3R_b.}hDBu;p:`' );
define( 'SECURE_AUTH_SALT', 'vCz5ElT/X/Vx:AF.zvte~-9)jQgxr~r!bk5> (8wl}T~ Q|Wd(zhFt o;d:v,|V2' );
define( 'LOGGED_IN_SALT',   '}>y<YoVvWu{/{e17pXyNG7}F{c lJ6: AC&Gw#1x)Veh=8@qb}+~]E7cG%yHMR*@' );
define( 'NONCE_SALT',       'N]]+G/-:1c*nftoW@G:El~@]iv3}S-(L|BqH&&U4neQ8F].W,<$g`qoJX1jMDgDs' );

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
