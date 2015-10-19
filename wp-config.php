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
define('DB_NAME', 'blog_1019');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'qneoq0?AWBVC6xYiMb6==I!,Qr|:^6A:Wd*ee=e.k13^HLK1e,6Z%Q>e0@@-,uFy');
define('SECURE_AUTH_KEY',  'o-GVE.J-[y`=NR$Iq~sF_$pV2lDy!U4n;x:_O#pSX{}3?x@zJ7%G^2kZxHCo%&e+');
define('LOGGED_IN_KEY',    'E?+>e~~k G+q_iu_mGe1~!o>h]Zs4KGeardga!:+{WVdT@aV&[XlFp|2<jC<ZBU;');
define('NONCE_KEY',        '.NmsI r,1j;N#F)B:iEKb?Kd6!I@%VD<d}fh60Ecou>}<fD#<;b1q ]GsyXx)4Sq');
define('AUTH_SALT',        '6#dRJfnX]GV(&Q7-h5oXMGg~GEa 3Lev,pU{Bu=*Ms<[Yh{jY=-ri5?q8+Gk8&`]');
define('SECURE_AUTH_SALT', 'S?P]hJYi%W|@hH1p:%ztxt+y!;O?ym!@FsMQGN,lD5VSC5tc.4hkI]Ut4MW?`[1W');
define('LOGGED_IN_SALT',   'R/#. ,|Scz#34I)W>23}K!#ez)Zm!ln*diEX5-MTQNtv[zz*nn2nLumH28}!BtT~');
define('NONCE_SALT',       '9MEEp+bwcn^<7`|$UY_ZuW1+eoU}LvR_!)@5-0v3d,Z#1_c5z8NGi=#z0gVq<PA+');

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
