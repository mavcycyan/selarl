<?php
define( 'SBI_ENCRYPTION_KEY', 'EG&Ku(IdLoqnhmawI0)zMl!kANKurGH7lcUkh)fbLIUoV&@!8)oN31OHPVLzeT' );

define( 'SBI_ENCRYPTION_SALT', '6rvWLjHm*SJ0SaqzhMhFDBZSTp587E)r88k33VV(P3jLAlWUZSneQ40aRwBk)Mih' );

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
define( 'DB_NAME', 'selarl' );

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
define( 'AUTH_KEY',         '180jnvY>g9W$MAQ<zPX}cvU!VI=j7Vc$fyIb5p-+gvX&s5ta|n#Qrl<AbFX=E;lE' );
define( 'SECURE_AUTH_KEY',  'q~UleFI<Z>R-VKIK1cL+=|:t*c^[8/=o^q`;8P@a:Asqbvqg 1F6VIT*u|FpMudQ' );
define( 'LOGGED_IN_KEY',    'qPr[[CZAf$eCX$cG,2Vlwx)<7E&)w^PtqGjzf[p$mGp!RgE==bKmk`,O%d_MkubM' );
define( 'NONCE_KEY',        '^c7#c7Fc<Gn<ePQ$+a9/DUOpvx@<G_+sBxt`x!Kqu1aEU|vi`{]v:Fq&|hQwN%Jt' );
define( 'AUTH_SALT',        '976z>M9Hx/F*s0]0#7l+9THHu=kocVeZAS* c=9.?aH38dcD&L]r:|@%)F.C5DhZ' );
define( 'SECURE_AUTH_SALT', '@pm.=%B[l/A|iE-fb_&DYQ8#AMhV0e<x7#X{UI?(@{kYz!%}ivU`E6WDk?G;^cOP' );
define( 'LOGGED_IN_SALT',   'L%UN&43fpgv!vBpUgY6>4vdS@Ip=83ODT89HZ[LXH5TQUqQsJ&qZ>!9SN5TH, bz' );
define( 'NONCE_SALT',       'Ij.9IvA]Oq$Um9`|Uy2H)D1X}qcWQUx[h=(.h5@8D=Tg<s%!f2JCbA$fzq(X[>UD' );

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
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
