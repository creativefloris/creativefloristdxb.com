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
define( 'DB_NAME', 'creativefloristdxb' );

/** Database username */
define( 'DB_USER', 'creativefloristdxb' );

/** Database password */
define( 'DB_PASSWORD', 'ID,y2mf+5f6jWsG' );

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
define( 'AUTH_KEY',         '2YEv$A~yrSe(X$-=6A0Q]rp8PdyB6aaK;@P7/L}nU$qNH#} lZl)2^~^<sSH3-xV' );
define( 'SECURE_AUTH_KEY',  '%`oH({Kb:dCn^]8BJg]C]@L&9)f/xCsD2,8Iz4Rl]7,j6LnHGD`u1eAAI-E]F<J4' );
define( 'LOGGED_IN_KEY',    'Xp0&JKMA?a$.&lUM[eQUs*BYNqou4=Se[mACHUh]Gin;Q<85oTny;}RyBbb~y c#' );
define( 'NONCE_KEY',        '1!;~nJ0KS[y(^!I)@|)sRhN{cQKmST)EXV^5GqQ<uk,xDtcVgELM>A~qHYPFFV#j' );
define( 'AUTH_SALT',        '#2p)~P$A6t{z->Ph?si0,>zodW#^<m5li6Zv<*O%FeYkV4ZtG-o]m;S$LC#y=?RX' );
define( 'SECURE_AUTH_SALT', 'Ne}~Fp@vp*hB{M~V]8M6n/**!}1^li|*OmUDWS49Y>`V<ThGD@)XKK``b%gntF1@' );
define( 'LOGGED_IN_SALT',   'ZK|1}dp)X2Ol}LIX>i$^1FG,<gJTd6v_y0Qa{[U!!CL*xkBTxJKUt]A RR5Td1I@' );
define( 'NONCE_SALT',       'E>0=N/D<n_rfk#EOzak}W[LF2ym9^j0F6)38#7&;x-y3^L]9u8hT!MvrpFi_U~{]' );

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
