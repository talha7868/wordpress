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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'taluser' );

/** Database password */
define( 'DB_PASSWORD', 'P@$$w0rd' );

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
define( 'AUTH_KEY',         'XF^8;vVc^{-F#8QI<%gS$_o$ ~j)ot-fx?=SM(*5$9*b4LWfIlxPY/A>`c.& ;O#' );
define( 'SECURE_AUTH_KEY',  'sD_floeh,IR%KRRMU$_M57E[0DM,;|;CH0dawe2^uejt;)4GaW?*ls+LZ`WfHBd{' );
define( 'LOGGED_IN_KEY',    'M(iOsV!1@Ot|Q,~|8^>xc>Bbm`h0o+qH=f`h.lz8z&N==_9LMcvs1?0l^ [=${NZ' );
define( 'NONCE_KEY',        'SBoN5uTm<N?L1yOMiIPC=e1n/deOSvDKH+sBz,o8$AgQxwQNn;Xj/8p}%aH| $fG' );
define( 'AUTH_SALT',        'kiSSPV1Ql7;QqW-q|=Hod6>VQ_w)F,afY?y2cLMo<I4T#`M2^vccC%k+]*@k<].h' );
define( 'SECURE_AUTH_SALT', 'F3%}9bHj{`6EPoB?}aVkVjTFy}ygD-!>.o=J0*UvmE#YDn1TyyBH#pcXUOZ)i[`h' );
define( 'LOGGED_IN_SALT',   'faV)8?~8Q,4uegcv-]uX+f%HHFbKJs@hGto:s KRDnv&oITMr~Tah aD+y~9+%FR' );
define( 'NONCE_SALT',       '}:fJBxdRICWUc[{[~7=8KUiKnfB!Oh&c{-0plYbos!J/s4nXDDu]5If>1N7z?{d7' );

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
