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
define('DB_NAME', 'greendb');

/** MySQL database username */
define('DB_USER', 'GPRJUser');

/** MySQL database password */
define('DB_PASSWORD', 'PassGPRJUser8832_');

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
define('AUTH_KEY',         '5v|$BI3KTMIIzq,=am`d1G&anPe5PZY]HY5?-;2#t+hdk45; |q`O7ab`3019QA|');
define('SECURE_AUTH_KEY',  '%)=I|#!i&p Q+5x:h;l[YHxrK4{S;Wl`JApy2W)Lx}NfG<F`6^/#m(7v^r `sB+?');
define('LOGGED_IN_KEY',    'e)|lis&2}wLz@Znc^:e+|oHcTy-5,(O??+- 3`eDxn(fTdP*R^#kQ2T7kjmh{Ts+');
define('NONCE_KEY',        '!SPkJ(;>_Z)-QIkTOAh<O$AEeIl!Kmt-e-4OdUa3.)+7[Mr>$Jac_!M!_`~pP$r3');
define('AUTH_SALT',        '~j-?g*Y!Ef!AI:HjS*BlN|LLVcQQuJ/l{lMaOc|1KtV0,M~VoIj?,)8w>q2 G:Bs');
define('SECURE_AUTH_SALT', '7r@MMGsd{bfFVq|GZy]$Hef^gU#)X_s[4BO5RU6)V%bxew4D;n}MGg@3[u]&U|4b');
define('LOGGED_IN_SALT',   '=+&iJ>kO&f]n3}IBfb7_N9gp?{>$8EBONN&5RYvoI$c!APrhB|+7A| #P[;yOr-3');
define('NONCE_SALT',       ',F9j6L}Gi@6d6c+Horc70_JVY5wI[8UQ%whzoD$-e}M_SXqfLP~/R[^6ZvysnuQd');

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
