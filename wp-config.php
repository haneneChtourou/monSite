<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'monSite' );

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
define( 'AUTH_KEY',         'E4ts`]@`#<EZp|Hy?6IBP.yu`T@Wg[zd)%k$L!Ge~nCdNrBD[-knDC<47Gx|;X`[' );
define( 'SECURE_AUTH_KEY',  'QT}cmj$RB,ce7kZi}([o*+z.Cp&obg@n7Eb@9BX^Wy)Ylt}YO*bNR2!,INQbwN5M' );
define( 'LOGGED_IN_KEY',    '0xwaUNwCt)pc<]H)ExmY=2L>~<>diCfVB1 S /7S)Ig(s>lN5V.:q7tcD%*#4fnT' );
define( 'NONCE_KEY',        '}:9KZ^#[I2G!M<!b0Rj8vL+4&Q`~.;z(ypb}`TcjqN5 7z^9j@g%b|uiO3cy%n3}' );
define( 'AUTH_SALT',        'dBE_ess>SHEza4s)AAMvL5RS%Cwh]hu[BsV/4J.5ucCmr[qmG>b0rfN i^74MO-g' );
define( 'SECURE_AUTH_SALT', '(,WjL?@2*Ip=v+4=yOFbgd[8}3`o @}&|MIQJ2Y[[!H6}7(Lkag<wjHlL.{~_gIe' );
define( 'LOGGED_IN_SALT',   '7Z((`N^Sd7&[+^aoaK,-+8u8M2cxn%K<N10>:[&,v2tVLGjCkUaAp`{<wJQ/#@*N' );
define( 'NONCE_SALT',       '~|lb*pGwTsO8[=~T/T<>DQ[,Y|&F)?Qdj=:1Vt47`r%0Y[dZOt=:[*A.zdAw<auW' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
