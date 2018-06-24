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
define('DB_NAME', 'MyPortfolio');

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
define('AUTH_KEY',         'oayf(w9j@ %NzDQw>1V[G~*6&m!}!|TWt6cQo]FIP|U_<jWI4an$45?8lMq:V?5%');
define('SECURE_AUTH_KEY',  '5!i*|%0{v=7mh`LxfMxX<[lV5{=Asu+hwR*a)yb?mcvrkp1_n8L*pIiu#QQVt2G$');
define('LOGGED_IN_KEY',    'wte>Oy>~s%)/tRnq&wLr09k`3ni#RL+^xU!%`?3Rbi]~@dg&*ev4@KC4@:0Ef{&[');
define('NONCE_KEY',        '}fJ~kR>OQXQjUM 4Z-Z$Eux|xfP]{*fX.[+jRI=MV*w! ?,lF2.W-h3EMEcp+=Wk');
define('AUTH_SALT',        'V@fa?@D:GhnX.}m9L13fd&j%AJ7$SuU  ,j.o}qXVV74*jG72q<WI:FvQ3^~P#G4');
define('SECURE_AUTH_SALT', ':v|&=Qt*I}cKOYg] 2v*YWZrD4~v}9~a-3zD+{g(U/ZEFv }X@ftlVkAn.~iicgM');
define('LOGGED_IN_SALT',   '7~gjH^IP|cq3ah,{s [i]t/ X!uIxd(m1YX<ZeAf!1hIt&}F|BX3]B%8NE$m>:{O');
define('NONCE_SALT',       'nE](kuJ~;l 2m+Z5Ov_rpMfw}`<L~=+HyRIr,R9GP%oZBV]C<JnYc?#Z9]3S^{;v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mp_';

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
