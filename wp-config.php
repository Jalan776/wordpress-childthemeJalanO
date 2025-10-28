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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '$.q 6|y;.%/t~BZUq~GFY9M2$$zGe/Kk9W4a&?n7 s9n@Sf :O)DDX1B4! _TJ9L' );
define( 'SECURE_AUTH_KEY',   '?=wjEL{bH$d]H/s!x!)LT=QwCmTf^L0E?V@zC=miE(Ph/iEmIVIz2N1#/`q&)f,c' );
define( 'LOGGED_IN_KEY',     '?7f(28Ip~(uon~0lR~p4=AIP:{BikX|.kir/,U8G_Z=78cu*f *xZtbu~p,mVXcA' );
define( 'NONCE_KEY',         'JjC7P9@FuF3mu!r>Z(b45Ng#xd<O1w_FHy|P*V+,q}P(_-xp%3ExwfiOe@v2UfrY' );
define( 'AUTH_SALT',         '5d[KgA&Jf>|^}7jwy<D%]n88L+.Tluy2fV|)/9ol<@$Qg fZ8s9CQ}()+%*f^{P ' );
define( 'SECURE_AUTH_SALT',  '@C8JFyM9mp}^SG^9PS=/MU*<PtX{G1K1Z8=%Fy.@19x-n|JB/wb,/~>3y)q)ar!|' );
define( 'LOGGED_IN_SALT',    '2/O6kGEPOZ1:GKL%S$[%fRp0U|V+35<b_,N(&S;wboh;{[Zh8dD2/1^3BQ.=k7dm' );
define( 'NONCE_SALT',        'n{5Nv/%t$ [Z6,<Xt_)~_ru0d1<]2I6W}U2e`L~sw/i8&q.gcDcl>2Y,?v^h%5>y' );
define( 'WP_CACHE_KEY_SALT', 'rGI/ad2(lttHZdc4 toQ#[v>XOu1azm$#%j,yHFh aUC?!S2HD#IRj`cW3-ELTMq' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
