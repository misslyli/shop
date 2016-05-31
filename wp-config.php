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
define('DB_NAME', 'wp_init');

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
define('AUTH_KEY',         '@G$ltnTF9g|OFc>nPA*WWWid{;1nPL&>~G68l9^Xx-p>?wwFV&K^{L<twxiMY0@k');
define('SECURE_AUTH_KEY',  'Z1f~Pslm#:5ZPGMJaEz8D7M=z;35+TKE*$uEzi4$Zc?Tfs|)EFhhN;h|10G+x2Mm');
define('LOGGED_IN_KEY',    '9~u=+t.=2hwP?i_%Brs)h0$;!P3M[<B$b/@XH:Y!%%nbz:+~lB{6.D>8<ySF^msC');
define('NONCE_KEY',        'lv,SPm77qGv:D$p07fQg#jWOL@ugOY=INt<L?z,)AqlAXy(hWd5Rit^@?@XufEvC');
define('AUTH_SALT',        'TzHILiTAjh/Po,4ncX.!Oc#~_JZ  {?5Nj_6kQ;Yvz;[PH#6KTznZV^c7V+Wy[q)');
define('SECURE_AUTH_SALT', 'Vs2jE+NtO`)XB~`<yIq~Y,xM_X00+ WP2Rlf&Fc<vRTPhanoY|jJ9z&M9/Z[YA7W');
define('LOGGED_IN_SALT',   'KkBKh&<o{W%4(a2J}O^mj48A0sA}%&?/|i3-G~:?]i iy(OH2a[<Tm0k.z9OPaRZ');
define('NONCE_SALT',       'l|u.cK=7D#N-Jbo}|O5}PSY`b*XlYF~r_.fU.f>eGaz!.`qL(R_PBoJs jZCnD8&');

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
