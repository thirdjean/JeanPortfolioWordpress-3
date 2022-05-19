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
define( 'DB_NAME', 'jeanportfoliowordpress3_db' );

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
define( 'AUTH_KEY',         '4+JT*-G4uf01FxY6~m6edYPCAC8Gyp&zr$xa40U:wcK8!h/v-6%SM4VebSQ2!DKR' );
define( 'SECURE_AUTH_KEY',  'h2O`{F 7w0oZu~jw@1}297{5#>!%<XLo?&~D<tY)n^EU1I0Y0N+AZ-!MZexLA+Kz' );
define( 'LOGGED_IN_KEY',    'gYP+&}6se66l)SW62$0fn8h0&Ni?#vjw=W0*A;ex_f<6R$y$1 1Fx &4Q!pk#t1@' );
define( 'NONCE_KEY',        '}(w|=`Z320;D`fnR/OTXt{<Pz|}fJ_Wtvo`dmq51m@4 )=jEOAl5]X] T|?P^vzV' );
define( 'AUTH_SALT',        '$]-}`y$?/PAjD3E[Ha_+dsRHjAc=IEqU09A%@@t0n_EdydcYH}GJFQ^5]f|kqugY' );
define( 'SECURE_AUTH_SALT', 'Frx~&2cE${9zhL{+gCDr5+Px#aB-x~_KoWoM>(Yc!,ul~9fI:71%n;p}_TJ^}d3E' );
define( 'LOGGED_IN_SALT',   '19zby&{bHPIPmH6_b(Cc|O5|!kIuq x%w!2fb71SEqIUNF_S_+vD6_)m2z=F~FuQ' );
define( 'NONCE_SALT',       ' v,5V,bZ6-E_98}3o,5,cLWk,QqE.8zH.65gD;wN&x5~W@0p9WRR[08U0}n56]%!' );

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
