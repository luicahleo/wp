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
define( 'DB_NAME', 'admin_peluqueria' );

/** MySQL database username */
define( 'DB_USER', 'admin_solucian' );

/** MySQL database password */
define( 'DB_PASSWORD', '121212' );

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
define( 'AUTH_KEY',         'HOt0Squ1TF19XghefQxN4`sxLWhuw%b~k|`uw({Q.D?Zd9WsUB%@]4Uvs(7z}Y^f' );
define( 'SECURE_AUTH_KEY',  's8?nG/c{^O/X[%.dXy[bsQXIhkZ2,WNNX_yVH^493gayYsfqe_AG:|aMx]Jmu.8u' );
define( 'LOGGED_IN_KEY',    '?,fK$aZm|.Ucj_rV)s[6FWoL;/_M_i$s%=ZB<$x.7;<&{OBgE?l%Z|_J8>yiqzzc' );
define( 'NONCE_KEY',        'zD[ts*%] {=CPBDUYI5!MaWaxIRz7*f_`d4DTj8v1g(37I|]=&BZseb(E_Y=/4 `' );
define( 'AUTH_SALT',        '[d3b+wM}a3K]?fo64~6=4dYzUl*L?^l~-8*OP~7)Kp5kL:!$Y$$c70n@(KQz:UZF' );
define( 'SECURE_AUTH_SALT', '-=8.^{k`0c4&(ey6p@{mPr;rJ^0vb*ekc$z<Y=.W>3kv<N$sXd-Q1LvG?f]Z6zq#' );
define( 'LOGGED_IN_SALT',   'pe7<`46M7QZ;etR>,,HvOPIC8$~[BXDy0IQV.>hfjQbiHvnqb@G:Iz_gKVYe_ZO}' );
define( 'NONCE_SALT',       'yJ.d0/Xt%Tou.I)lAA<d=Ofpn>>w&9HDvTRq?1U)<Lt{[*4t5tMzmaz~*;~1k35:' );

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
