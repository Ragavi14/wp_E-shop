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
define( 'DB_NAME', 'wordpress1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'passworD@123' );

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
define( 'AUTH_KEY',         '^Gt)mn]q?&RjP@FsG.~<&!XHCv0Y71(Cjfw?WZefdgBLslum`e[hs-?$lM8Z}&,W' );
define( 'SECURE_AUTH_KEY',  'j<ufT55d2P.HNk(dezU$]E3RmJO8M;(4e_Z*}f=eUQ:bNK9naFH]!<#mvxqO`buK' );
define( 'LOGGED_IN_KEY',    'rSVgPA;R~|._D5YIK~xU: #uZ<Vg<<=Mb3I;z41@h]i1~uKd;*}?n+;|l!9x91I_' );
define( 'NONCE_KEY',        'zv)CWo(xcm,k8|p2rQb@:okidNm2*Rb/3#0^XKZg}vP:5*lmgjpF-p5}fKWX/^IZ' );
define( 'AUTH_SALT',        '&QkI|u>O_k#!Zr8@bfTpp_>e|gbNXox0}K1[uN;kVm]TL2|;s^Br@7xT`7M<Nc07' );
define( 'SECURE_AUTH_SALT', '&y&Su]:Up]1A^_={;RgF@w:1VpY$A{P;#%p$TbG}aLyHd0lLIu<~OKT=t#R>gVnt' );
define( 'LOGGED_IN_SALT',   '>vqDP2U%,9y(tycLDMgZ&y?~DF810Z}.nvARybIu]RP^dG}yg77qKk&$oF)RkM:`' );
define( 'NONCE_SALT',       'I+^p<yWx~N%SLfF6,gP@!1Gpt}]7!V06I&%$rH@D->WT];cE|xJK/^jim-t7p)N=' );

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

define('FS_METHOD','direct');

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
