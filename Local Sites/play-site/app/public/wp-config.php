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
define( 'AUTH_KEY',          'nYM`yL43i#NqHb&FvMj$Y>88owMv~bnwd3VQ=iG H0|Ai}Y>(j%[3++&3>% OB(-' );
define( 'SECURE_AUTH_KEY',   'v$Qo_u(xgje< }:P},p%s+x::LaA4AP1z-zq@I?rVpy}jN*{}u){1{S!2V{c^QU,' );
define( 'LOGGED_IN_KEY',     'tVooX,2E5KiaomCvly%%<:M6a,:;rz%9yt0G^F;4rAK{Nq@}PNj4;HTVZ._nB:t;' );
define( 'NONCE_KEY',         'WGfQc-$|GhE#VY?*!M!|(`5({y(aB3um_RLTD19}Mg2XELt;!@B7}s2`@046.SG$' );
define( 'AUTH_SALT',         'Vc19)$w4|&22YS8d2{@(-$YN$#VXd30yqY*^_biu^9rAZhycSWGE^|c!Qn*uzx3e' );
define( 'SECURE_AUTH_SALT',  'Yx]`_|p}41F4rR{yXzGlt.~<>Wx9A<T=oj#.HCA%0,Y%lMZT?p^IWqi!&uA)H0AV' );
define( 'LOGGED_IN_SALT',    'vgYkET$M XX|(rDPml@9YeiYcYWDX#A8-5a*`^oq~!h8=:Nsxqz!;.CSNS2eAOA.' );
define( 'NONCE_SALT',        'Q? n&+?gAy+U sneMl;kI-T;uMxJ+hvCsxQ&Jwe4Ayr1+->+fogna>/s?d.{2!ub' );
define( 'WP_CACHE_KEY_SALT', 'W=7+-J(g.<elOM.7({vX}kSf<8+aD`=70_=:>H;VVK<;x*&JH<lkByj4w53G~SNR' );


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
