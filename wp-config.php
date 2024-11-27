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
define( 'DB_NAME', 'cours' );

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
define( 'AUTH_KEY',         'WC^9Z^ iV;U`wJTZ T~q`/6WU.(8bE}3<4/y>$9s_@_@Y{w9)mt]MMNNI,&B=Ee1' );
define( 'SECURE_AUTH_KEY',  '5>L&sdopZJkuUvu=WjwxrJ (C[hs/*2BrxL&G{%jj*=JtYSg<DY=I%o~yD,u,Z_R' );
define( 'LOGGED_IN_KEY',    'hZ(2en_)-s)Ef=jy6Y9;d>pK<KB@[4}w$iy(C2b(L`BZ)qcy~,FF*r.@bg<YpP{d' );
define( 'NONCE_KEY',        'Rt{dEI!eBpKR1{G8<w !wqc@|Sx]=sPvK-$t|oa2~*)4rsOhX.|eF6cD`XWD7(Ak' );
define( 'AUTH_SALT',        '?aa,-*Cz_S,mPr#R7Pe/+m<*<rwq)}#pOQI2nvXKXHU=Jw`j{7]{K6f`:@x2`ccZ' );
define( 'SECURE_AUTH_SALT', 'awOHs_Z498:{BH;Cnf,:k<Pi5LItH?~Vlbi#lc9&PbkV<=K2.Ax]FZz-!!50i`4|' );
define( 'LOGGED_IN_SALT',   '}me_]jyT?A+Q:yLVC2lVh}77{PcV7QxC`%hyw0hC%*l=z!)3Co1lEP1dFOy2zhtE' );
define( 'NONCE_SALT',       'svCJTuOd}-.;.0MwKU@!^6zMm/LDh$KD#;Bkm hB96**MiMEqx|MVZ]wU[/$nX@[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
