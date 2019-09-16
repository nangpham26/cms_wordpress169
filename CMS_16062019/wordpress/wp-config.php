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
define( 'DB_NAME', 'cms_wordpress' );

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
define( 'AUTH_KEY',         'dTeU*OENAu45=z_[aK5]`QoK[oGE!/jq&Z#Md`*j>xeqa!#}1Q<@Z;/iT(@O<PqA' );
define( 'SECURE_AUTH_KEY',  '*KcFj]j_&Ru5$OvOeahN>3W3Z2a`GBqusCaDizY3FQh[y`+sG0I3;*doY]8S|@fn' );
define( 'LOGGED_IN_KEY',    'XDEWh`]rLAq[rj5CVHa@@e~d~eI~y9X`e6jX0Te~/LK+<)K&AF8C*k*Z~`m8hY/l' );
define( 'NONCE_KEY',        'BO`]+`X(7K4R.,8|*=GlSawnLU^aGP%*[v*pJ/}gFj):2bmqTZ/!7 +|2Y?u#3M8' );
define( 'AUTH_SALT',        'y0Ueia++`f=Ypq8:}$Vt|E>[bm_kK|)<?efL2O>,%FH8l@zF)7ib/t^rI4e2k+$8' );
define( 'SECURE_AUTH_SALT', 'P3gTfBt&FH$4:U f&wECbkk5Yj<Kgv71bAYYa%sq]P8[W~ %<ML*YOZvOjh{y)Gm' );
define( 'LOGGED_IN_SALT',   'FsahEo&S@)6PVrxXx{bEMZlYMQOCa`me70&?)M`uhJV[b_*3]v^lRRsMUm[Y;ga.' );
define( 'NONCE_SALT',       'f]6lkorHUtTuu2>`bw1{8:qgf%km)qMQ%Te*UKV6F;pXI<7R#.CW$buJ*Qp&w=Qp' );

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
