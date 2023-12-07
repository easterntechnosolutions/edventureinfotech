<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'easyglue_edventureinfotech' );

/** Database username */
define( 'DB_USER', 'easyglue_edventureinfotech' );

/** Database password */
define( 'DB_PASSWORD', '52HQ(KM4}HH0' );

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
define( 'AUTH_KEY',         'bee0R.f3(>aQ+xlz.(&=__v4=E^Yp;vN^)BjH%XG>0@g%~G|<`MXa1R+>:Goq<nS' );
define( 'SECURE_AUTH_KEY',  '^M8ooe;UuhK/RPJ?nl=vqVzl0mN?HEEQbL6a)a>hT{xm[yn(TWOyz~mL@j?!#JHU' );
define( 'LOGGED_IN_KEY',    'V*k4(FgwZLt)`<Qcd5bT/D6NL/ueZw4rzm6#`ptOG|EE^ g!?[#17H$VfwbI1y]I' );
define( 'NONCE_KEY',        'BhKY/s<w0oC_X!{ktEWzbKW=XaFY_|ZK 0Z#rlC`<iOy9lBxR|: |,]I#FUq$cpO' );
define( 'AUTH_SALT',        'm13-ESB&9K`}#5L*,E,YQa&14g11,ILmiz>a7moQk5W[3YE0xWi]U3;4>9sI>Jl0' );
define( 'SECURE_AUTH_SALT', ')&5UP /D4>9UqpqP$qeuJu.I}}V=WA1_, :SA7IkpJuX[[/lv1b6.+WRN&YQy0C3' );
define( 'LOGGED_IN_SALT',   'z]bO~-<z<eBUZ%0G(q&7G9VVd/QoK8}LN&M=l!of?Tq+>Bqzv1BDr@Z8&#eKuq$7' );
define( 'NONCE_SALT',       'K/7G>)L$0>tGXpVU@Xn{-~`B/L4=&sig1T:yrxSS?W.Iwv91bU.7rL&!9Hq@a&OG' );

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
