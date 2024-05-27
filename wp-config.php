<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'mrrobot@369' );

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
define( 'AUTH_KEY',         '6Ah%!/leG|Q{X,SKfS74qam 50ii+oG%+q%6{Lr1ZpA/]wz2q7_yyjJWD~zzGUt_' );
define( 'SECURE_AUTH_KEY',  'dY4(z7]%DN0qo S7C@AUIgnOLK~,)YRkq/FcfwNUer?ML2f[S<mNo| +Q<=JKv<A' );
define( 'LOGGED_IN_KEY',    '~9MPrw@KB2$k!C[b7p>A&DKr*8GjQ>QKl FnB/N[;RA@Ix|d1Qo]sXc_M%*s`=$u' );
define( 'NONCE_KEY',        'l_L(3s0:Gfd|#;6ahbrRZZmctBT#SlG>|F`i!lUlkP;rJH?!(J3/i`K5Jf-C|!H,' );
define( 'AUTH_SALT',        'Vk;#w?|*m&{P;92=4.y{}wBGB|b<Lz-,)o2*3PyfDQY9?8ubPa{8^4(1iB`Rb~()' );
define( 'SECURE_AUTH_SALT', 'J@cRW?ti?@(q|Co5/F/q>E6^s^wkyKdu;Mi-$gd<}lHzx32fU~2|~FHb djv`18C' );
define( 'LOGGED_IN_SALT',   'U>j|,mm!U5t>oG5d[}*v<d$w%r:=J&8{&o3 ,al;O[rpU`LG,}p@oAwfs8(_Ina?' );
define( 'NONCE_SALT',       '4W8W6PjTf4DwohnEIku2l%4Aeq359ixFObb6Th6H)}~{1WyTSu85{k,24ZO9!&q^' );

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
