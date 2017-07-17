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
define('DB_NAME', 'tecnosur_website');

/** MySQL database username */
define('DB_USER', 'tecnosur_wp');

/** MySQL database password */
define('DB_PASSWORD', 'q9T%uBcte7hD*qJ');

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
define('AUTH_KEY',         '-$B|hbe1JM0?L/yn/eiE|%c/a4wVQ:cby6@{<@f8,u1nPUCid{!f@lO_he1i3bK#');
define('SECURE_AUTH_KEY',  'rUwTHk+k:ix->Mx=7s)(``x)EMX58rB?o)Pd$Ef4(b wYb <i_bztIfyT5wFxng&');
define('LOGGED_IN_KEY',    'Rh7PJuLz_h9Ha&B=rr59c(9G_8!5@zIs+AX{Zl=JjGZ%Z/GJ#;Pr_RL$hyltL9UY');
define('NONCE_KEY',        'q1xBnEk7ue_aAp|E*D70z{3t4e6AEPe{M)L.?L%05*}2#S.%cOw0M/9!>A!J3uj^');
define('AUTH_SALT',        'Nzc~o%uNzl&p@dR.x0}B}@LdHqSb32]xlt$}baEh~zH-AU#q:H2Mov[;!HY3*(w<');
define('SECURE_AUTH_SALT', '|#nGBB>PEhlj}!3>nIzhLMJ Yip7NO.O2b<ICXWw]gZ(R2a%tBh2Cp1~q;:b@B~|');
define('LOGGED_IN_SALT',   '4o#3S-T47`Jfkc43,qoUxe#t_bm$]]`}rl$9h$#]]meA9Od>pwED=oJXkM.J5iKF');
define('NONCE_SALT',       '7J%l<~i$xb#n2;2p>=nOY)H)Y@DLG),k)U,W(]ABPcNJ%>!y9w[B=#_v322V&3t+');

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
