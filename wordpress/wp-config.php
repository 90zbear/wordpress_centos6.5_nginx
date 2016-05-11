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
define('DB_NAME', 'wordpress_dev');

/** MySQL database username */
define('DB_USER', 'username');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'wb/5s=W(>E:VYP_Y?i$sLe8,]R)2X:cU!!z^5AZ5Fb$L}i@!s:NH$@fBK{T9s)sL');
define('SECURE_AUTH_KEY',  'v;k<B!!+ 6s}%A$tEx-Zkmn%3/<kv,OZ~w~k2 bvhyj`/?PsxH9Z;.p ^IPV)4_l');
define('LOGGED_IN_KEY',    ';9za-R=4sGAV5Co3PJ3bKlN4(e~6TVuvrdYTTTf7*O>NK1(;kny8_>dJ+Xg#8qkh');
define('NONCE_KEY',        'qnF[N>a86%FM%!9o^,|u~gRFHo|S?I~$TOiMiLq{~&Wu@y:Pv(1E$a2NG(0$^K`(');
define('AUTH_SALT',        '-b8C#rt+:Bs; qV#N&xb~+]X]KL6x^Uo#taXh/q]g4d]n{d^ndSK+#Rd,/4!KYRX');
define('SECURE_AUTH_SALT', '6T7#z8kXZzhg JTx(h)S^&>Aln]J0HXTtI=nA-iFeds/>{`nv)Q;pqV~khM$Fk.I');
define('LOGGED_IN_SALT',   '4o4-FNZ5+5upcTZ1E#b`b?E>&5j+WPCF|Eli]m+9]~`)t *Fom /9Hw1,qW$qXQh');
define('NONCE_SALT',       '?kdX(p6mO68/1BD`)SKnC7c.%aIB`+]. i8Wa z7m>lp@_~VQU187u1 E9P,~KoA');

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
