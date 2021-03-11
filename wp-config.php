<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'atlas_antheia' );

/** MySQL database username */
define( 'DB_USER', 'atlas-antheia' );

/** MySQL database password */
define( 'DB_PASSWORD', 'atlas-antheia' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iO?4Z2kFvmr7^U%{%2HT6pwp,Upg7__.Uy=@F{v=SA2e9&Syn^V>>/^k4e%*}/oD' );
define( 'SECURE_AUTH_KEY',  'KeMqDsd#(4#Lh>]ADaoR(ahP*^9l|>anI1B4bHY7K&Y?5A,X7T0L:{B`2{2(KPht' );
define( 'LOGGED_IN_KEY',    ';}D[)C.RE &pIG6{$-c~U,Al=tBO2{Mu&-Gm}L%B5No_m4[xvo3R3Uo/gL& I.0`' );
define( 'NONCE_KEY',        ',1!xK8N~EYN&fT?vF*b&1}8v1N<g_f1*OtycQ{Wb<3Z[2%hH]pxLfZ[)3bKG+:>t' );
define( 'AUTH_SALT',        '+SyTX3YFwGVb)S,l yYu&(V6>LlK+tzgi4h?|PZ86vX[ls<pH|4ZU5D[3UZ+UN~(' );
define( 'SECURE_AUTH_SALT', '5u5<OD*vF}JIX(W}bAk#tW+W$%i?/_:h?BS+w{]3[l$,w-vNkG+=*?g bqoi8QWY' );
define( 'LOGGED_IN_SALT',   'rV11 ye!(%cGc35ay(]C4i,w__rF#T-HJ.Ap%zbscp0%*Z#~D71^WEoC/As4r>C2' );
define( 'NONCE_SALT',       'EHh }J.Hy*!kxlV&)MWsQ_yCM$?t1~uU[LZL+?P>VcYxFW9x@}/Zw{{GeD4m}<z_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'atlas_antheia_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
