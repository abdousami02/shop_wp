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
define( 'DB_NAME', 'shop_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '%4|{)X<@WCFaiGI_WpO!RUEE7jr1PONYDP6~u`(5`<HL)#;WQ)[U;/8Q)38eBagV' );
define( 'SECURE_AUTH_KEY',  ';-n$_qm-Van#`8E%8+l14*!5vTqXfe.b{(4a:xG]Ot7QhgX=4qA^~f^P^,3M-8Z!' );
define( 'LOGGED_IN_KEY',    'Nem]qolPuu@8Kr-6S1qe/Vj__#<=2ax0#J,zCC^b#k.Au}6.iLx8.;^!bH4}2{Z6' );
define( 'NONCE_KEY',        'b>pi6xn#~4hRAr9TdZzTwDf>jn-4VIT!Jqy+@};!pM?vn.8bY&)7KPv?|+CrE2hq' );
define( 'AUTH_SALT',        '^<(3v _F1fE&p?08m;B1Fpvn9E.v3Co-;U3?vI^~WMOzhGNcLSV;v%j<u)$gt>V=' );
define( 'SECURE_AUTH_SALT', 'U4-KZ:PTVbswjCa{VGidy#F$>KRmc@_fG(B#$+}Hh~TI7j0}K;^i}JRJ5Rb_Kd)b' );
define( 'LOGGED_IN_SALT',   'E~$}O8P<ZiVZ?{2@Q4Aq>Q,},/wrD#gf@-F?;[$%l^8_l_l>V1nEaP&tYIw=`/K;' );
define( 'NONCE_SALT',       'azS~i)^$vR)PB[x9$Km):>@(S@pe,5EtDUosgH&E%&Fyb[rUO2i`_67--84,Ml6q' );

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
