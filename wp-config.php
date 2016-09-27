<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'make-your-living');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PL<s&aoaS(lodpO(2*G`)qTaOBg]?ASFt$TDyAa)ubf3zxZE>`[(SJ1)!-cH&yVO');
define('SECURE_AUTH_KEY',  'C*ee)iTGcFd&Dm{@^GGH!2y/-XY^eV#b|9n wGJMN<weZ+e!_>WDTjI(?KZ)vXe)');
define('LOGGED_IN_KEY',    'o(|xDJaJ`v^?3Wn]HEk,tMM1s&93IwC{/{+5#OUDVS|=P[f-}5DX)1Oi}2z!Snn_');
define('NONCE_KEY',        '7(bHS7&nJ_Y3G~&TYEmRs/t^s/mB_r{CfB CK9Mu$;~iq`Cg89*@`l!; h)re9XC');
define('AUTH_SALT',        'z]u8.0a7 lr^05nk#EcS[QkX(~%}0XYmEYryLd$mE&>QUYd[<CdCr6hQ=2Hv~o-:');
define('SECURE_AUTH_SALT', '$wYP]Q%a`sop0kL5a:MXE!upU}hN;O,$?T|K5a`Ht6)TE?Dn!A`lRQH#iC$0IhVW');
define('LOGGED_IN_SALT',   'l<1!mL$%bw`RNprVpjpA$h8oleMx1-:@nqzL@!.,:L;EK &#49mqd(o5O3>U9f=}');
define('NONCE_SALT',       '/9yzB_]7u;iw*uR{~+3d_enWQSTesf=uL+Ilc-H#Tr~Io3S$MZ9=%8;u?xfV$ci}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
