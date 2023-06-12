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
define('AUTH_KEY',         '3|PGqSg%o|R2a~8+:r$qzjc`6u/8DhNLa?P>^x#-Mh-{n8lVN$WJ^ oKe0lC }^>');
define('SECURE_AUTH_KEY',  '8&>]nU:s&)EatOn*|fNB-76&@2}_8z3KqOJGJV7ggUKW4uZ1z%J+bIJUo9HLSS6o');
define('LOGGED_IN_KEY',    'aQ!o;_[2AkWCg4G=66xXe^cyHYL|eeRCD:Hpv[T)-<0~xXlI:==pj|F7dIPLK26w');
define('NONCE_KEY',        'IiHr? L]+R&vaR~4$,tOq(c3x+q/s|abg:V^CeyD(P&>h<~CC|V//=5# ;lx^Ggr');
define('AUTH_SALT',        'iCdu`BhIzU}^oNc9VykZ|r-n-3!/tvk_|.,Q5$$amf,HrW$PkU{Ar&f7[I9=HCNz');
define('SECURE_AUTH_SALT', 'I)4,0q6xE4Zkk7|#P^5dd-|exy_{IL?k<@XsZ0V&Qe5$a`fxz`>O?wN_pASgbJyV');
define('LOGGED_IN_SALT',   'r/%Mt-^V.+Ys _,O%$O)xPiOO.%t8]ei,$Ly^q}Qar;B}mfw+Pf 0Ed_S3H<|{QN');
define('NONCE_SALT',       ';a5IO|=Bs]:/WF_|%#66n6c:f!I3I%GmE+7`U0fX!#bMH3=~L_Li8WALd8`Z8cf*');

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
