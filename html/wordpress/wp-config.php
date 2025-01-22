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
define( 'DB_NAME', 'pms_db' );

/** Database username */
define( 'DB_USER', 'JohnSon' );

/** Database password */
define( 'DB_PASSWORD', 'JohnSon2023!' );

/** Database hostname */
define( 'DB_HOST', '0.0.0.0' );

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

define('AUTH_KEY',         'H?{;AkDNEJHi>$(@++SUJ%0rZQoO.hq-@Nk,&$yg_@ZRI<os?C:-bI~_t3Nv-Ik<');
define('SECURE_AUTH_KEY',  '|P:5KZyC[p1NB-cFLg2-8PH}/oZpEa=7B+OsYukkMp[CS31e~KyELVCy22VE-!|S');
define('LOGGED_IN_KEY',    'Fd;F%-BA|dl(Nf!|&!:eO@smef]1ii-Rka(Nn+OtV5NSl-)**O&u7C+p;{rucz{a');
define('NONCE_KEY',        'x?m>Hk =4+1|DqN,MV-LwEI[93e0wLfGf(l*cCciFpNV`h/[pb-[+Z!M^I{-IT7~');
define('AUTH_SALT',        'C>+EyV#j+e^p0T)avS|-yix~}gR7$+=DEiuZ^0_]I5|?N#S(#0zh-{W-oX;8J7Y|');
define('SECURE_AUTH_SALT', 'cQJ%lZ#w*miRKqwR!_u =norI=V-C=0{A|.6@ZNrrM6.LXUBV:ovVQ1-jj8u2*.-');
define('LOGGED_IN_SALT',   'Gb}DgXR!wr}4%8uw2(,#Irm2|:%^|vpd*xgTk.x&)^uPNgAWsRl+Cp{N*vp*KHl=');
define('NONCE_SALT',       '[jsYko_?a.)R@%RGS|pYfLQh_&biyE-BiGY;/?Y$Tvz?ksgyJ,erWb_JI?W[IHY{');

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


define('UPLOADS','wp-content/uploads');
