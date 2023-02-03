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
define( 'DB_NAME', 'wvm_db' );

/** Database username */
define( 'DB_USER', 'wvm_user' );

/** Database password */
define( 'DB_PASSWORD', 'WVM$2023' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** The FS_METHOD method is for FTP files upload allow and disallow from wp admin*/
define ( 'FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'rIS,Hh3u3NC d#:kD5gq`<(z{_Yls7v!ye8?%1;]-/]_z3EQ/E#jD]#J,r5/%-2>' );
define( 'SECURE_AUTH_KEY',  'Qzh{J9!XW7#ED,)Al%Cr HxnnQ:?gKr3gX:x$0N>z7B/o4`hp`f<%u=ex1L(L<2.' );
define( 'LOGGED_IN_KEY',    'fNO|i/@TA^{ d#3*E@=wJVf@g$Q|E,JlzsFqKd)=Sk$c[|BgDGTZPF^?_e%F&DmZ' );
define( 'NONCE_KEY',        'h:SAB{B<&mA@5cs1nVTlvDjTgyy#a7fj648%OSoiF_GE>;6-)Y02lRIp]1w)k/8m' );
define( 'AUTH_SALT',        '[>wWI`p Ghu(kBA<g/XSfwpw8]3g4RY!Ct?i/|ezT@5jl>rMA]T#3l&pmtdur{rj' );
define( 'SECURE_AUTH_SALT', ':-JC}*ue7#Jlem_6Qb@tc3]`uWG@~Tx[> |f{*V36)h6&_VQUZTra2zL][*Jz6+Z' );
define( 'LOGGED_IN_SALT',   '#in!e1ULPE,5Xdzjr*M1:4qPiVzgS<7 ~aR:oV]JR1{?]o!iaf,}669!t.#6iX{@' );
define( 'NONCE_SALT',       '/q>9~GXJR]:Avb/B=3May=@A0g,Nz|<UGc<v}SP 16IS%sCRoxqxFyvti(7mFX*n' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
