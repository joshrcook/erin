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
define('DB_NAME', 'erin_wp');

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
define('AUTH_KEY',         '6[&0gB{O7x)+HT i#kW5j>~$k_XFDB<sY[SU:YoD*1x(F]rQNDILh-!f)}|j%1Q;');
define('SECURE_AUTH_KEY',  '&AR?jhDCUJ||F9?ROw!jFlB+0[ytGlcrJC++XNjJ,%-+g1+*Khz=lH)J.gUa4^3f');
define('LOGGED_IN_KEY',    '@!Q$9??4?GIx1A?NrIh injVEd)yml,y_|VB{rC9LQN7HH~D/&FEmL$ v3vqhG5&');
define('NONCE_KEY',        '1];F*YzH:)pu8k:r%8fA4>G7~!L=~@9qm4SC| 8F[f@]|Z):j)p7@v>A*K-KE!j+');
define('AUTH_SALT',        '@.=l`esB2CygwxUUCBFzB36r-!AYHiJ(MZzB5jR|#4NEnIh8+$~o`Mt]X|&:R<76');
define('SECURE_AUTH_SALT', '==DK~jotX-Sy?<f<LC]7/#NR]~F~tZMZYF*}BBi)YYLY_3<m4a$FW+XGb1lnCz[q');
define('LOGGED_IN_SALT',   'tFdbMid&tmA@`~,&pyCaO6w2urSH`>Uv55*0c,H0[tT(mAq zCu~G;W*jcN5UO-=');
define('NONCE_SALT',       '1f{<B}-x;3gVE)X<yH#*?0l`q|>tFcuebuHy*k6 &4MUA)r3YXH(#(bSGbw(g*G`');

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
