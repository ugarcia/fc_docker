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
define('DB_NAME', $_ENV["FC_CMS_DB_NAME"]);

/** MySQL database username */
define('DB_USER', $_ENV["FC_CMS_DB_USER"]);

/** MySQL database password */
define('DB_PASSWORD', $_ENV["FC_CMS_DB_PASSWORD"]);

/** MySQL hostname */
define('DB_HOST', $_ENV["FC_CMS_DB_HOST"]);

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
define('AUTH_KEY',         '#ga,(;k G0Gu1o%J}t*MtvrR|!;[c|mlp}?5p|XbL8s.0T=a~|3xS&l+rd7EvykW');
define('SECURE_AUTH_KEY',  'v|kq||?8Sky=I!?bdhrHPwc[0M=S%[vh8b[:=79wRk@zxV>^UR#`V:R7v<k_+[}X');
define('LOGGED_IN_KEY',    'IgNDX+N5[_e?#/TV~/HOFL?L-!MXOdlZoSJ0[QH?lI5I,C1IqM|}+$cQj+mW+heN');
define('NONCE_KEY',        'Iu{|X#YOcf)qvR(0)b!B3cWOA9}c+6L[xr|lDL?E8hp_Y_O8|pn0ERCz)U~&|/|5');
define('AUTH_SALT',        '{BE^wE|P47$9aQ oELSPJQ7C]-.H)$d(a=l2A;E(:W*(M$Hp5*SM,Z4ATUpSRO<Y');
define('SECURE_AUTH_SALT', '<$reBkAlv/}m5F)V>ote25.&FwiqIrv1+()9!bRtv:%/]!J|Q!Lx078#WOx&-!-O');
define('LOGGED_IN_SALT',   'w0+4ETUk}j;utRjPTt~U-e8Y>UOL(FE&g&yWBVyLt @NG: ~}CDc88Q[;I=UF-`2');
define('NONCE_SALT',       '9}&ia:$AjAhB*BjYyh.f[+nUJiL3(avYT#PesbVs6hzZ`4mr5<`u6v~3.5P+T)ul');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fc_wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
