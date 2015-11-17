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
define('DB_NAME', 'vizit');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '&8L+M8pB+(1Z]cr~~hMRQD5Zth.8+^m|?.g)Z*Qs(B`+bI~?Y5|KPlC?=I+$Ldp-');
define('SECURE_AUTH_KEY',  'j$l<DJ,#k<]<vc2[q7C#I+I2r n=kGVZ/N=_,]+3up2H0tz5qqc|>{; `u>1KUiO');
define('LOGGED_IN_KEY',    '%No#dhn.}C |pU5o?B_zFD|~6QvQ7v0,0b_>CG@q(M7LHTSYAp*@uT;qW-N8G>*m');
define('NONCE_KEY',        '-~h9H#I:X:.A-f8>B<wD2.NT`ZRY.&+z2Oi}D|S.W)h|{/HeL_#nA[kv[,Ga}PM4');
define('AUTH_SALT',        'M~GJi*Kdj>i1xmtC+m*h|K>{y~+I|Zs~VIp$oEb8|rP4p^N@/RAC>c^C]$ajn-<V');
define('SECURE_AUTH_SALT', 'AN_5`P+X26<Rey|BT{Exdb7Z@k1#4o)6uHDU%wC%$DxMky+Hf.Z|VC 5~-Enk?`6');
define('LOGGED_IN_SALT',   'I-q%/8EEzER~7anx(cb3S)>V7:cndNEM8LY$uLdk-FT$K]#rPstaBCq#h2*ek!C8');
define('NONCE_SALT',       'NBE~oztMJZM_ixh#GdSy|!!@-8vh:6KE0iE*3!7m(:7^H#,@u|.C6h.HtH:S9+;N');

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
