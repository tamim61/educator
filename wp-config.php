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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'SWAY' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '9IjrbBxvB|9Ut],^Qpdv1@0FKH9GxNqr &H8 #EorStTc5sf~8w:-3-**~Hed{+D' );
define( 'SECURE_AUTH_KEY',  'kMl0YYec=$9r O[49?M~ 1Pgj,#34d^+Tj#oxz3,b$=`9 ht22@?7oPRpp;&xDQ0' );
define( 'LOGGED_IN_KEY',    '0b5AmTqJm9(v{Wz`!hVFJ89[j+tgTs-93y(?%ycOv6Yv({xiTAw69W<m5rJHU,`!' );
define( 'NONCE_KEY',        'V*nlRnO/7)rIO:u74Qg.i=|3|j(#Gf;Hvr0q9$=e!oP=/tH[2z;^).0]Tm>f;f=2' );
define( 'AUTH_SALT',        '1<cKT@<mgQW0SX%q4E]- IyTrFw:_t?rA`BSA>;R@bF$5&:B|@W`Ja/_Xs.vc$zx' );
define( 'SECURE_AUTH_SALT', '`#.EK[]KEnT/gWn`h7}?5=OjT)#;%4>%`=Ym9mx&1m.Ip0TGH0yvdP4qngR_%_ud' );
define( 'LOGGED_IN_SALT',   '>]kD===9XgvAN|LmMWPHCqCPB ~TDN&n~e{.nXV-n#o]y6V W<nD+SkYYIx:v|K0' );
define( 'NONCE_SALT',       '}#m~-[)PEG=#T]7q,_-qv-omcHyN(q^qZ[eGl T6NK&C3o:Yuu@c]IM)y!S%{,xy' );

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
