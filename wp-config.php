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
define('DB_NAME', 'customtheme');

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
define('AUTH_KEY',         'K+. EYZ* Qb<d/a`,0um7/t]svc`_621@+i5ABfKe2a^fGxQ!RUaXR+`y7E [eub');
define('SECURE_AUTH_KEY',  'a:`!,Z#Nz/#Cw0S<W_EQ)]iy8qVl|2Uf!{rM*ZmD[=k@yO)icL]N)=:DN&pDw>s9');
define('LOGGED_IN_KEY',    '*K:s{J1Z3rAzN6FXsmRXEBt(3/82W>w>$90PA|IsV PjjyV?w.{fOQ-s`bEErZnw');
define('NONCE_KEY',        'Dt!]zx<^8Nf|!Y}rI;&:IIJ8^3#u2]3Cz[tc?]%DUKm11GP5tUZ&Xh:.fisEqTWV');
define('AUTH_SALT',        'jf[k|vU9gmigTPv%NJ|jI&2z5C|-,eSAa2hJK]Wyr(JK8Np@DFktA1,Rg+Q?UQ6V');
define('SECURE_AUTH_SALT', 'j>5fRGc,D5(49$_)$Fcq`4Qn]/w11`$Z4pZke,F3cbh9V2zUS2Re]^E379SiYH{*');
define('LOGGED_IN_SALT',   'ca2pG#.|e=FeMr%c@Y7(F/prb=?joj+F|!taBN_R?*vIRC&]I5rx7|x80v3ahH %');
define('NONCE_SALT',       '8EAp CZGA=M YUxVtD?f%bP4tQ$$++*05tJ#}v>qI?V8JO3qTr4bS<,bdCJ~HdlL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_custom';

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
