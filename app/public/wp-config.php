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
define( 'AUTH_KEY',          '*X(Y[GF.X>R0Qb85xk#Lb+Py}v:Xcl3sNup!-a<$W3{$o-ebih(mV[Vf]NY.T.M.' );
define( 'SECURE_AUTH_KEY',   'j)c$h6=n4_$h6H0@_a_1X}ufagpBkq2xxPoB5$+ufzYq+siSM7fSw5>q!8F z|(@' );
define( 'LOGGED_IN_KEY',     ',UHlk@t%{DcE]9k.SYJE(7/KtvP:Y`8H/OtF#|HV@j*/->uk[{#>G6&FQ=OO(%eY' );
define( 'NONCE_KEY',         '{m|;baxxF/T<T/,vS_:XkIn/?eb[SX,: {r:(Y_<d#)9? X!Jh(xgW>JoY3xvC67' );
define( 'AUTH_SALT',         'y3V,*f?NQ9W*Dp|||PIv3Id>-$(>m90]ro!#5:~A;y#2BGqTAK7HfyoqKa`Ikf#h' );
define( 'SECURE_AUTH_SALT',  '+WO/4IO%DxHuf4_pq`3|66FjhKkl6cxV:>+EcRTv.Mlu<[%D;Sr*Xu*cq4;T4k<R' );
define( 'LOGGED_IN_SALT',    'p6go^70,Y 8?%J;s1,J8@^H+l|?So`~<8`;i#*AGk sSboT0Yz}Y{St/QVBL5W^@' );
define( 'NONCE_SALT',        'vo/:a}H@#`]v(l2/l,=`z/%EN`-nWe2k{%K>q~,g,ON.y-_&4#`_c3bDWyV]QWAT' );
define( 'WP_CACHE_KEY_SALT', 'uOn#~-a:~n|A[E[6*EB|<|zZ(X*xO_x3L6r)ZHEjp@}<m8]HOv;Y`%yXH b~3x7+' );


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
