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
define('DB_NAME', 'wp_news');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'P_$)T<?S_q^:p|HCsb0x [ogmpuOZ4bfVaaQ`Jm((+$&A&eYe--_aE:qx<)fu)!A');
define('SECURE_AUTH_KEY',  't[~~B(S+(6E<(`:$|9(l6quZMaR!tNWPC?6#5aveq9l{]<C,GT6NJx0!JOm?(:4V');
define('LOGGED_IN_KEY',    'cd)34%#U{Q@1YeZr{1loIKh5gCOgo%T(SCeTb#}NylLo*Tzy=Tb!f/ M(^xE6RX]');
define('NONCE_KEY',        'l;?xX9uMM%78tKCohIf>3YkuL=|&X8Sefz-]M#qY3/Z!(ucv_h#Y#s}o% y*$>E*');
define('AUTH_SALT',        '^mxj1^-ZFX&&hK,{&)Xu,{d@S_!Q?U$v}M-:-&?]6=cM_rH4)u*n](90,62l<;L=');
define('SECURE_AUTH_SALT', '<Gka.4nJjOfc[sampAgo]<[ 3Mt!xOfS6V:<6`BW-dp$arBRG~=o&})4B6kK3G/[');
define('LOGGED_IN_SALT',   'EO 5eEv-$/nY^I@Vkn{9pE2b<gYVozo]b%C#|JH:;Zo>SE pA-Pz4L=@bdz#kcN!');
define('NONCE_SALT',       'YWbF@ITzE]4,Bi+~SQo_Lu.t+(61|._Il{XdRuN=fDNlg@OY~!P(Zk-&jO.U9Cky');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
