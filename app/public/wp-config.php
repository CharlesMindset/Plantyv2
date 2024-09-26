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
define( 'AUTH_KEY',          '[Zk!:SQphEpE/]3w:!Geq)Mb>-JIL,R4gAs2g!18(HaW[MXh?aA2ggKgRhVQXxQS' );
define( 'SECURE_AUTH_KEY',   '?)JkA7K{cp#:WctvI?~?guF[0xi]W-cG?Cy2M=y#:^,8$WL:9pM% YeGPQ1^43]y' );
define( 'LOGGED_IN_KEY',     '?j9u[*.sII$W;DD4h41tj^ZWbEMc)MN~eUoB>kj/?$&rT$8a2*)20M[#MREV09Ie' );
define( 'NONCE_KEY',         'ZIhN7vyQ:px.&ea8#x3>~qX^}>()&__g}86$%|?aM@f,~%k+Nd0W!{Mq#6&;~Piy' );
define( 'AUTH_SALT',         'W(x)<&+%UvER?QcjU`S/:kibON$L$y^|lIZOr.oRwkiSE+*h(O@?EIqwEq`pfK4:' );
define( 'SECURE_AUTH_SALT',  '#w>*d$p@]j?bc8oi$c`G!hd@wN}rdKV&9b+(2B&=Y|,6| BGJ~j)yDUHM}L|-eyE' );
define( 'LOGGED_IN_SALT',    'R-c3qo3s7p_2v9vJK~kk{yu8AMpASkTY}eU@N=ruz`@*CN]VNq|Ag)Mph_.l*oXy' );
define( 'NONCE_SALT',        'g4e~^!z!Xi&p_A[L.uH2P5z2v]wasCB972oOlL}Rc]=yK+qd@]9ydIdr= }&-65O' );
define( 'WP_CACHE_KEY_SALT', 'x<:`}UE1x>>y)9b<R_wY5P|]1O$EKey}{)lbH1t9KFmZ^#gV?Ywim4|>`Q-vX?x]' );


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
