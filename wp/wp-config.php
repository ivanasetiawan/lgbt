<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lgbt_db');

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
define('AUTH_KEY','Q-jU`aahLg}ulEJsK/#7ZUMVHJcp&*mdLDMoFU8|>Rf=RVQ)emq^:}3*n/[|($-x');
define('SECURE_AUTH_KEY','zK1!upR<QNa<E(hDu|1k/n_;MHtt@<c#jDTLxYN B-,gGY?HRmuN++MW1&H:QTRX');
define('LOGGED_IN_KEY','>^U)7}<4|;t+oU<.WM6R|}1?V`-XSn?w>rg^|*rDE%pF|[KNy4(5E3[M+.geL#ul');
define('NONCE_KEY','Qy(@o@A wKnT{L!8Ke3vcr}` S4:x:]T~o->`uI_kMOV;f~u)(B8Gn-R-^+C.ynt');
define('AUTH_SALT','#kloZv-g.tDIf@XA0+5 qJdH|NKa!O&Mv-4^Oui5C{EQ}Pq8yie+?V+OcdW31){g');
define('SECURE_AUTH_SALT','R%$j6vdOT8IxOi5#N5joC4Q6,r4uQT%`qD-I+7FLq NFafR1xV+(^3dK->8#6-Iq');
define('LOGGED_IN_SALT','W3dM=%M4gM-asB-:((v@>U!ndap(!Dqv1~c=cBB4rr|UQn*jZ j|{Q99CC[I8e4l');
define('NONCE_SALT','p{U:1NO$fF1Rczz{`bk WZ(L+Q1+0,Q<c`{qlm_{GzqdIXN e|g7S_k|vW,g#>PD');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
