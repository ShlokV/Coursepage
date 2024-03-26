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
define( 'DB_NAME', 'clone' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'KB8kvB1&{nXVej#u-vX{qBpjy2X|OFP;u{mdTP6[Tg1bQ}[R0Gm=Z_*;I8$]-<va' );
define( 'SECURE_AUTH_KEY',  'Cw~QHMJMy;:;KtF0bM|+_4wWixnA_0lUc_9>.[`/PtdV!]rKlb8Mnq2{QC M?|6C' );
define( 'LOGGED_IN_KEY',    'eom8k,bQVdR/,0b~|~=tKHFw8a @i&Z3D:!~i /(WO)K.(#a,%AMw7XQ0;*+1ZZx' );
define( 'NONCE_KEY',        'pB+fG%2fB79{BM_iBc$z^U6yJ7kgC8Gg$~.uJVb!$827NROKvbm)cz?/Di2a$ZEK' );
define( 'AUTH_SALT',        'al<:G^Mf<T43`qe> n0J%.*r~Z-1^t:yjQ:%lk|b&/+nhN@Vy_2p]g`rOMHi=oZ}' );
define( 'SECURE_AUTH_SALT', 't:v5AnJm<c9ghu6j=r+Vg]->@qRJ|i(N[x[~mYJ=r/p~_AwIs6p5U%jzCi{t>626' );
define( 'LOGGED_IN_SALT',   'q<Xy7LA^SH&6hX7OacgJ3rGYEfD-oCQ_`|QJ93tu& 21/e&u`lO/`#.r!XgoGie>' );
define( 'NONCE_SALT',       '|2XFz[gCHv&%g$~zWh)7/f:C<Z$F]$7tG()e*Z1uF9$A[R.oSvE!Pao[14ZVys.L' );

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
