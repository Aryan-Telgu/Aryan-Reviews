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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ucubQt1^bbZy1n1xwG6}GO*$tL=Nbq+vwR#->v*ED,Ym?+HPR1H7j4O#y!=!.r+-' );
define( 'SECURE_AUTH_KEY',  'eFKwWG%`GYnyh&Y++7*A 2t=W7fGFDDJqFo:gL@~yBwN*R2$.j$<abe*p|PHUa#:' );
define( 'LOGGED_IN_KEY',    'U0=iktT[h |jxKgahHDAxFF*KVx*oQn@[Zk_)+x#L`ncQ|2s}BXIfmJhOGHA4gA>' );
define( 'NONCE_KEY',        '(hB&3)h1S@P]lj`Z%SI{m)(VLm1!WHK( a$G6,~x+BQ:[e/-:&S^<6RE^d|P9w2k' );
define( 'AUTH_SALT',        'bv:~TQj`3 !?6o(A!;[qfQ!f.WS SjL!;z(,Viszti1ikadSi9SG$ikN rjpR3co' );
define( 'SECURE_AUTH_SALT', '|ja%wL)j!*N1ik4}DY*z52am4R>VI+ 0n*f1(&{42B`vRFO76+*0Qw7(q[QYSSri' );
define( 'LOGGED_IN_SALT',   '){3KGQ -EPxGK~kDE3YS_V*YW0_q}D>,WSz)yZ#p#mu(4sdP02yFHar_v88ak!SN' );
define( 'NONCE_SALT',       '@rph{:w`tpH_B~Q359*X<(3rbh&h;24B5r#%#{j8~hJdi#EU0J1/vpyBf9:5W}iZ' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
