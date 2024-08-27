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
define( 'DB_NAME', 'alaa1' );

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
define( 'AUTH_KEY',         '3N|&]7&EsZz?E?hEhp$4puRTR(i*=@QrM*`b!,VdNF2EjLf.{B)%J:7R3V^}UcEi' );
define( 'SECURE_AUTH_KEY',  '$9K$sC<0pzJo!},rGXtc9efa)6e3^$X;$>NjtUB(}MU$g4/{Oj2WSpI|4U9$G+ve' );
define( 'LOGGED_IN_KEY',    'de<QvLp+DXB:>uiC[4f*De*~[lj6ig4y`#hSJ*a#YQbQ5-u]$s=82=5Jz[%0wM:g' );
define( 'NONCE_KEY',        'lB]|{pI,e}r!xD%9/EPWr6z!{B@V(YVSWGbo9mr8ij+@H/Mh#kpc-1:XItZQgj.j' );
define( 'AUTH_SALT',        'R`bqwCEzghy!t?LW H(}BO+dgEIp zlW+xBO?u]<ws&eQ-AXNo)46i6)lnRy}S_9' );
define( 'SECURE_AUTH_SALT', 'PhAgMD41MNvU*[9:]cdt0oRAeKH<e}+ s>FJ<G sPs-zk4:c!V F.~ZNUl6lW}ft' );
define( 'LOGGED_IN_SALT',   '?V3b(FA_9w9266lvByVw_tUz>+eS>`*DYGill>!4P>JfJ~TfQYTA?uoG|d>&bp&!' );
define( 'NONCE_SALT',       'dbOV-_S_2kb/0N;x6c+JD4qZ)24%GltD=jk#W(`nKRK=NXLU4(1GOUOx{Jm9CDy]' );

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
