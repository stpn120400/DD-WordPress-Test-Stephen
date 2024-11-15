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
define( 'AUTH_KEY',          '[!776-6 DYKCBL4~SM`-Lt!aCCA=0S@OK=.N>IOmQb_we$u&v9~9F$_*D]%N0iLr' );
define( 'SECURE_AUTH_KEY',   'WVCg(FF_jZFger!B0&(69S/~_Wy3d8oNJinptq&B)x6F*OPArr0wLk~ GIX}dV,U' );
define( 'LOGGED_IN_KEY',     'V;r:KZbA7t*L;t6$[3P}/2~}Q;P{}`A/q[A:sh`KfycP)Usmo)Azu*!e7Wm/VkkJ' );
define( 'NONCE_KEY',         '[ZPc$*v#Xjg[H$)=SrB1>^>B}5&IDwqu@nY_:Q]B+E:,~^Wq[Z1-V2BV`uM/jEim' );
define( 'AUTH_SALT',         'hxD)Z1I>|!,$,$=6%XK(a_<J..t+%yH&!g-E]3h]J@y)k>Y(0Z5<;AU#RVK4 bqk' );
define( 'SECURE_AUTH_SALT',  '4H!L)1TCD)I:^CW&yb7(?>]HE5J]-Uv Z],v8~H@GtCY,>PFZHINO]jP;QP4,j_A' );
define( 'LOGGED_IN_SALT',    '/K`k~S_[)DYIb9i%yHyd!1R-o0V}ijV9E@t64;-f ! xXhR7OHg?+4&[j8h-uk]L' );
define( 'NONCE_SALT',        '&ORku7gLKa xY(K3`9_ +Y?,v+0z.+:h@5`80z%m-$8CBG@RTru#%:WFfe/XX_mB' );
define( 'WP_CACHE_KEY_SALT', 'Qw(Sg<A:Y!7qzqB=vC)`^7^Fu6fa3q1hI=sq<KeSBeVMkZs>p!Bg(jy{8ZoIFS>j' );


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
