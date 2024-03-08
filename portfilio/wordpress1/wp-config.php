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
define( 'DB_NAME', 'portfilio' );

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
define( 'AUTH_KEY',         '~2ydu=KJ`>C4=:q1xTuR;[$!><bZAa+|%3EE,8t7iMn.De*kCbbKV]Xw78}l~49}' );
define( 'SECURE_AUTH_KEY',  'PRK9>l?]3jN<|]L>Ch_E,<=!HH_lZVA zA4OcV}CLB<H)4d_m2S5sgx-Bal5YH0B' );
define( 'LOGGED_IN_KEY',    'AcB9&mgN8$o%{R{v{xtLPjHMp,[IMs[y}gD}=s^|D&TnmfEA^~.;gIzGP N2S{,I' );
define( 'NONCE_KEY',        '^)[8l,<@!$//C*F9j/fL8p*.ev4>%k-BbLmN)wVZ|Lzb];1{v{nbLRr,y,YmGLMC' );
define( 'AUTH_SALT',        'J=XdI@;CNm/:~4b = b08OW2Eom;xmn] NL#LzZb#8%DpK6lD@9HD`&@#(Rj=HsW' );
define( 'SECURE_AUTH_SALT', 'NW} zVdWb:9QJ5`]2*TX%IQ89pAiqH5EZuf!ro?I0*Q`1d~T/ebaW1QgY^^sme`z' );
define( 'LOGGED_IN_SALT',   '@A<X~=I0}-Pvp{ NP`AR5ZnMv(o#r?S`HO9d7,AYm$*V9tA~^g=K-HYYC!OXq[_[' );
define( 'NONCE_SALT',       'oV?BEL[#kltWD2{E#bF^<,k5EYOuXLG,/hh[EkrrLRqXe&E,*:Q(s8]M2_<Wn9?w' );

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
