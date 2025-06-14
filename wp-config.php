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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'X%_?${(|bO&747S<{&)(nzRvU A<t~cvkfa#DFm*z#([JMy*MFzV~83Po^^jM6t/' );
define( 'SECURE_AUTH_KEY',   'SBjT|3g?=%lh~&I<k]tY<W9=Yn~LzzF0?0~uFmZ[):!dy.Ch#j(I$jN&X(_$BEqs' );
define( 'LOGGED_IN_KEY',     'OaQTf0U,:PH97+pU1tBvRlG>%W8 Cgo@4RY#cag+zS@8R|CX.1p*m_)NZd;1qbL>' );
define( 'NONCE_KEY',         'K]cDkO&+@4Sf3?1;4]:.v<+%:7Dx{D=F,YWjHW;MbkQ!s.oH&?Tct2wVK|1}ERL ' );
define( 'AUTH_SALT',         'Pt~Tt|{oSmtsn:x Sq>gf%@)6Y$#)WlHd/I0[<B9ISy)TmKWi`h^8@5SIhREHvu1' );
define( 'SECURE_AUTH_SALT',  '$k4NQO:J7dWm)q$8/]I*Q&7_#6AR!Ao}9<l,Knd`||A/q,Q.]G0F^K4F{r[JCJ^,' );
define( 'LOGGED_IN_SALT',    'R0TK4OJT .;ZeD20u|F]CV;3c>XJ(114c+GA`y1/3q`s_eeCmjWeZ|R*u[kfKk=J' );
define( 'NONCE_SALT',        'T3|f++7,Zw,=4l8ZJn3D}UW:AU+!hWF$Kbz-elxonYZ$sUTD-zE[;PG/UVN(j[1C' );
define( 'WP_CACHE_KEY_SALT', 'YR=0mkdC$liMI,ePTv@NTa=nX%jkxvBZzp%C$hK}&~}`[X+Cu1G}L<e?>X|1^m<!' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
