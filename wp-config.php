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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_site_db' );

/** Database username */
define( 'DB_USER', 'test_site_user' );

/** Database password */
define( 'DB_PASSWORD', 'hgiuIYQEqbjhxS' );

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
define( 'AUTH_KEY',          '6bA#nnB~=>9},J6lMdXCTS6i/w9hc|frKt*6kFttl?Nsvypc~D)g`WBqt^f`q:]J' );
define( 'SECURE_AUTH_KEY',   ',VX&*ES$fv=m%xg3=c3qf^9kF`BAAy6D!_F{77`t-[{xBlPOF&<i]0M?/{zh>]~i' );
define( 'LOGGED_IN_KEY',     'x<ozui!.qPAQ*I!PZ=Mc-(xJwg)7$<NCYH fKZ:bE%+f#6kfR2X;d>yVSZ@=2:)=' );
define( 'NONCE_KEY',         'pr|,J#(Z!d[IWZZsbvmX<4y4DhhB~ku>l/2PA&-K%Y<p(aOW=&Wu8;A8^}^?c@%u' );
define( 'AUTH_SALT',         'AFrU/MN{-2opExUBxT3y,1!V!z3iW2?y]0DTRf![^hoSrl|_NUnWC25Qe1jlr6W^' );
define( 'SECURE_AUTH_SALT',  'Yjq`i0M;7k<xK.%zM^OB%O]wW(xFomlg:o?0K-40I_:dw3Z}.+cn7F?Y(&lgD4|A' );
define( 'LOGGED_IN_SALT',    '=9YU;&>]7WG]Q0vV mhF;YDb^BtR$Z{{5Be]S<fZ[pY{@RzLEMG3kO2SyIuI%Ye$' );
define( 'NONCE_SALT',        'M~u56vf+[k&8??PNum@3yZ-G%C%T#4bIk^qf#{R8a3y<mG8z92xd50.z=Ve/$&((' );
define( 'WP_CACHE_KEY_SALT', 'lmg8bo=pTACQB+2S2oNmc#I+j*-TlaD{CzBea&HbbK`.!DEZHBy#eJD=[sregD(.' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
