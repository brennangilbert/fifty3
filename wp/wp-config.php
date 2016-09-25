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
define('DB_NAME', 'fifty3_main');

/** MySQL database username */
define('DB_USER', 'fifty3_main');

/** MySQL database password */
define('DB_PASSWORD', 'gyeCFJlj**2xR9Pjo#f0e4re1uk556');

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
define('AUTH_KEY',         '=pTgkIR.LmOz6u?e7qQC3FPuNZ<gg=}3U)3C`XvNw:0K9p>D{jfz3Dzh[`X/ZZ&0');
define('SECURE_AUTH_KEY',  '|&i%tVNZ)3>s|fr-8j(tJ%sO4`dP8UHSZuiS;6~PE@a;}U9As27Us0Xia%C?j[F3');
define('LOGGED_IN_KEY',    'ReZh5[v?4n|a@pq<9]WrM7%GJ,?mYswjA[2t)~jn.md40!$g+|*>o#*@-Y%G:paE');
define('NONCE_KEY',        'DT?^&{#py;W[/w$3bJh2A%2SNo_K9:ak-qSB0s,)PM4Q]mKyk$KS(3B&i)=sygL8');
define('AUTH_SALT',        'k4bxBS|LaN&.uk}o{khZ?8^?onibUsPtu#C8kh1)tG=eoRh6.{*]tYS|S*aG[CdQ');
define('SECURE_AUTH_SALT', '0tcMEWiRWy8C(dzJLwY=KL-:[Q-=QD0S@NuwE@(wo6S-t=GGDZ-~p!nh0L|3KYRZ');
define('LOGGED_IN_SALT',   'gQ6^Z`EtDuaguxL*a+Q{ZyO*=WF9ZW?Fh@sK]yZPV+*;5T|}<RQ[R3I/q}IQHZOt');
define('NONCE_SALT',       ':@(kg`85- ]+6n1=i77I|pbujjZx_bCr|lV:%FJ5c81 [#NAKza&&o&5F!Dg1_GY');

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
