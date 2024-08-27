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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'BrownieArtesanal' );

/** Database username */
define( 'DB_USER', 'dev' );

/** Database password */
define( 'DB_PASSWORD', 'dev2019' );

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
define( 'AUTH_KEY',         'iE[uw9SjB<L-=nK]lN)lGO<XuKWpmublRK/[*Q|k u BH95)+mD,zrCL6`@Y#r^k' );
define( 'SECURE_AUTH_KEY',  '+O%UpM9<hzvA&a4>?0N+hecaO)w;{TlPm$XlRQ5YENQ:%Wq;qGa]E|F$ U($Vw*0' );
define( 'LOGGED_IN_KEY',    'ZT%94 pw_./`eqna.cE%MG{]]IM?0x]yT7a.jp,@jwt}<_O w^=2M.z!,g}*54XV' );
define( 'NONCE_KEY',        'iua0q7S>kF9@&W?L:74|kbZ7SdD~[*@pW}3U9s>OJXbM+E9/c$|<@o?-[52L2fj;' );
define( 'AUTH_SALT',        'fB.G>!&aujvi^$+d{m-*Dy|t_8}F?}Dk-C/<=-LeO9B?Va^BH`[&=WRBa~5+`|2^' );
define( 'SECURE_AUTH_SALT', ' cf3[f-0m9e=~`mqIVqKR`1dU:pq}FJTtPuYJD9QF8jp3q2x=|*C(e--W/1Sqq+t' );
define( 'LOGGED_IN_SALT',   '&g@,N/Ht~Q,,I9I~hj^ocPal]-l3,)za!zj3BAd=~ry ;= 6h.T 19gq#nzlC&Wr' );
define( 'NONCE_SALT',       '+h^tsc<ZPP6{GeB&=3b`vH[k`ontF(~te!-L*-T0CVqaKwyRTmXSG&G$k#{zLPc[' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

function write_log( $data ) {
    if ( true === WP_DEBUG ) {
        if ( is_array( $data ) || is_object( $data ) ) {
            error_log( print_r( $data, true ) );
        } else {
            error_log( $data );
        }
    }
}

write_log( 'Hello, debugging!' );

define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 1 );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
