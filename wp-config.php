<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '1~B{O+4mQ}n3o>-VQZJk@mL3car-YfC1yc*m2;+lt#*t$?x0Pw-owoLo*k)~w6E<');
define('SECURE_AUTH_KEY',  'IOz|yeiif+[nfY)7vk-O#nQRJy8m(NK,#f?ia5^i+e!%N/qe6,j?!Okmf37nMk1z');
define('LOGGED_IN_KEY',    'U R~@m&?61!VdKjS,<rK?}Ld&KO#P s)Xy+h*8Q[4Q2&IrkZ>%IH!e}?ie-6n6|J');
define('NONCE_KEY',        'r`A{U$b|)KSXsMOq;%+Mp{?Y@myOtRc|-/4gs|#XM<D[BO{oZFX2=AE=zBz{v1Mo');
define('AUTH_SALT',        'E:(%/H8~Yl(ftJ61]H-^3KzmJ*-hMH|H2rN3}e$~O0d%mDNd|@6S&|VX-i|FTRUT');
define('SECURE_AUTH_SALT', 'R~|9@[GnR9GzHMrd:i{`foA>B,s-cSh%+,*+k$EiVc`PBg[;4fp]]W(Gzopqh+3 ');
define('LOGGED_IN_SALT',   '%zm+.Z]4Ny}^,-3us`N]A,XO=GH[b<Qb`{.#=K_,/61Mp-*o}N!arLUL+#q?J;OU');
define('NONCE_SALT',       '-Y3<QVj?{N2}ATlwnChMNJK-%?}le<4ur(])_jv3o*>[uHF<f2)m%1Lb440NO}}(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
