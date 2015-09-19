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
define('DB_NAME', 'curryclubli');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'D7Hpk2lRsx');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
// database
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1m~}?FKk?8F%4R6.7G!;83E/2CifI0^Xu1Uruej3Ab9^ j0v1P0}~Bm{3VIW+B}P');
define('SECURE_AUTH_KEY',  'EqxZo6ff)3?ULjfS/Dsn}t`oP-<jZ)oBDu9nATZidpN<Y-6+:JtY-d?>Q[#DF*$H');
define('LOGGED_IN_KEY',    'O^c*6~~YM*{$^[;z+1P~EaZ/h{KvHu3*>fOwWx5|H-G]a1<vD|i_c8D+I$dc-6Dm');
define('NONCE_KEY',        '?Kam0)>j|mme_SLoZ^Nt)$U F;s1Q-9Y-YLf]X,@o0?!,NN1.-bE57u2t/)5/&IX');
define('AUTH_SALT',        '|jN#bu@LOX |KS***UKgc=ra)&ncrdqnIUR`-XF]3(]Gn PHuu:vCdv+$A5z(0El');
define('SECURE_AUTH_SALT', '$@@wWbA3%|@trV=PZ FEf]00$Xn@CeI3&HrL+FS*zdxJwh78:/thP]ms@2s5c-L1');
define('LOGGED_IN_SALT',   'U0K,*Jj82jf^NHS5&m-!+OdwJf/|@^[#m-vjbRUsHmf8v0>lu?A:i@)b|![g(zG]');
define('NONCE_SALT',       'wD-r`.n|RghpM9P/WH4[E=H8%5m)!HIG63_,)~[z&JT r|Unh-:&C|gEG hi]+}W');

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
