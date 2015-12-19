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
define('DB_NAME', 'GreenDB');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         ' G2CWIOQ2smsWeK!#/N~1H]h,n)fDy-&y^+1ZO-SW/6h>+Rf~S52@COC$qe(;XBx');
define('SECURE_AUTH_KEY',  'c=4%-#+]RBfiiS3;l8phY;Tz]6Jr:.8S;@_FQKt+oi$DN0F*4z-.hd|-S4~99c94');
define('LOGGED_IN_KEY',    'PH4n8WAF$hnZ%kqd6zWeUE+?NtJwByK~B;U/hb-1)%rPTyXw4+.TPUC<;ZSZm1Fc');
define('NONCE_KEY',        'yRq!s[F.yd)jKIX5&*S@RM4x|gxiGo8tbxg;-,M]}5-m6I_(? |+V`gf a1%sySe');
define('AUTH_SALT',        '2Cg1SdXr*#z9H<l}Vy1yJf2-*p8Y$rkHw3Ahg+6sZ;YBWvYlg)BZMdXmejKr%P^;');
define('SECURE_AUTH_SALT', '+f/$8;&YR}>rqq&07*wT8?kBfYIcUi|~.wBe|F!)Kk=TV-.HhK Za!L{r]fu].CQ');
define('LOGGED_IN_SALT',   'aqUecw?V3,TNf,D$H0 i,p7(Wj~?):3a-sZc|k!-gTF!!k%f=;{Pya>(4M?k.$J?');
define('NONCE_SALT',       ')-2~yr~5b7RP_xezexA2)4{v=:=D~vAZ{1FVEFp6&I+jH6N1+zLGmX%G$ygYLd[A');

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
