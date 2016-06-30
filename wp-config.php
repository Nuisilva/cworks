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
define('DB_NAME', 'devft_collegeworks_dev');

/** MySQL database username */
define('DB_USER', 'devft_cw');

/** MySQL database password */
define('DB_PASSWORD', 'L$I+qIxcl9VF');

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
define('AUTH_KEY',         'EVC&R s 1/hMZ)-J.OTJbD]DV8;#Al`/ZUrj]d];fG:65g+inAaTH(i9?5e9 cS7');
define('SECURE_AUTH_KEY',  'mTex2U-}P+@gM>*FY|R]8uiLj2^[c+#vp|z:D2wKQRTHrn) +TV]>INMUMmF|3}r');
define('LOGGED_IN_KEY',    '5aiSp{6;[N3i+/q.VeRN;t>6#S?{yT6BDJ@Zo|c-^he|)C}Y.,>ID;c6@%gU,*Sf');
define('NONCE_KEY',        '#6+^`QE2x^+~V2?ZCP#2P2SM:B+->r:1YTGO:5qUB]Eu^L&K7m|D!>GUBnK)sm-]');
define('AUTH_SALT',        'K-7CN~_B3%N-3[HlZOV=C|E!sN9UYA|ezH`94L+&%C!Y-+W#TQ/YzSl<,Q0HxKpJ');
define('SECURE_AUTH_SALT', 'bWs``$Y$^5(HO%5#n^+][3ph6f_I-zZbxpygOK3nPeX4X:yL#<~HK0b{+lka-{NZ');
define('LOGGED_IN_SALT',   '.U79:b>kVVakR~<qN0kQD$NX.r_sehT+X 5*w5ztA!X5YzY`u#|wkMQI~]ANMuTc');
define('NONCE_SALT',       'n/,+|*vl::VS$)QBw$jXF9n0_U;P!`HTu[&A,v!s&h[NMiJ/4$F1xXmG!RrRa?vY');

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
