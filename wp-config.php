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

// define('WP_HOME','http://hurmainsider.loc');
// define('WP_SITEURL','http://hurmainsider.loc');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hurmainsider');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'mariadb');

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
define('AUTH_KEY',         'p4Pvg|qHA0%Zsh}7Guoq}LR6qi>6H <^[_h]s^XwN.]q5nZesvEbd7G.9QZ_^T+4');
define('SECURE_AUTH_KEY',  '29{FJ+:@eI5 ]q%{GPq>xhrNONjk)q#*=MgF;gCO(6Cu8:J:a0.MgZeG#-Y2~6n>');
define('LOGGED_IN_KEY',    'v<xCE(TmLqTY3unlLexhX12X;oid:Q-aMaYj26) 1*G` NGlS_UYV7aW,F7dK<<y');
define('NONCE_KEY',        '[I:A%7;qv#9!wo7SlR[p;7>]yz)9!(Ek1tzLi(xGot;JkX1FG8?BxIZZ*HpC#!3H');
define('AUTH_SALT',        'uN`R&+@rT/]G%o~w:s??t{HW:, O:y24:UgT$=V{G{]-qv*0C4&CN$]Ou}&4]y[0');
define('SECURE_AUTH_SALT', '+)3.aWb2r0}3<Rr }e6>srT=jG$W7)r/8xus;BR8!eafmeXwj*zk_eJG!w1gA8pW');
define('LOGGED_IN_SALT',   'JW1%<cH+)C#Dg(BalfeV,4kA^&Ot,8NPwM)w*/)%gvg6]7z|Krdx5Mm.$I!y& S6');
define('NONCE_SALT',       '3.#%fSPD|9K*GNC3s5ehLYp dKJF36UNJQl)yDIt.G-dXMyrq`,WqxJ+~%F{z+8k');

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
