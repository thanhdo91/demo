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
define( 'DB_NAME', 'ayn7bkw0jot4n4qz' );

/** Database username */
define( 'DB_USER', 'g95mibyk2g4s82p8' );

/** Database password */
define( 'DB_PASSWORD', 'lepkaaq1eligi2mh' );

/** Database hostname */
define( 'DB_HOST', 'n4m3x5ti89xl6czh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'f. |B4NBrN^Bunj:z[{17,?T)z}T`P*4K+^0+7f0s261z8)i/Ko9#_DF<KElM~8s' );
define( 'SECURE_AUTH_KEY',  'hkN`.]iX}CO 2nbvNT7N#%i{m%Pyr6/HD13?<G|gGf-/kF.|v~d[T*92AcPJ$aYn' );
define( 'LOGGED_IN_KEY',    'c^?WeIE$$7YME2!@oVF,2{CC/NFY!T>?wPq4!FQds0tg~E5Llf&CW_R$9Y[?)|$)' );
define( 'NONCE_KEY',        '2S?:Jl|sXi1WhVI`GMFr![n3z;FrZ,pG-Blen#b{p#;!>dW^[wAWCz8a(va/tInY' );
define( 'AUTH_SALT',        '.29D,mroFSI+Hwf[p]=3l>Tc^Zi#Qu#q+J+C)=yCmZV7}*!k -@RQcAv$D8BWIi,' );
define( 'SECURE_AUTH_SALT', '%lE(pI/W@<$oWQ;@R3s5qESZxHZt`/m_*|gvq@,^WJ0>j6Wr_iPU4[X/be,:7Q{(' );
define( 'LOGGED_IN_SALT',   'xhma}:6[s]9=paCR {6<MYKI:~u` HCzmhGYB5x]!I/LQpvjUmlw}=)br;yM3T-C' );
define( 'NONCE_SALT',       'bDEC[iK(dQ@v*D~:-|mkw{Bk9:W+K>z^|ty=Hp];lT&r{5YcL%I9M1e:JuFNp]g[' );

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
