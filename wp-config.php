<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'module8_database' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('FS_METHOD', 'direct');
define( 'AUTH_KEY',         '1N:BI_%-9c|uW<Z))lY[L7f%>*j$+O)qM*W *L,m|^gGpRm`i-/W]X9`#09^{ Gn' );
define( 'SECURE_AUTH_KEY',  'M0-&bl]dM2c3SHA.1}8n=x=^3av=FcQ(iKwu/[p&bH[N a[]D&_ @YAnsA+2(`#!' );
define( 'LOGGED_IN_KEY',    'yW)vCueBZ~<>{h>BM7^@;k: d 42MQptwI%[o>S_8H(}SH`exjNcqHqd>YvtIh>;' );
define( 'NONCE_KEY',        'J-;x ,6Y$kWda)dTHLLMW#eEJIlUptnB}ntQeXJpwes)Z_l(SFIOvSWoSPS0rT2-' );
define( 'AUTH_SALT',        'g;8m#UsQ7PF6r<Z3?y,}DE[:25uu;Bw2s|rQZK)lxSU>K2/bVV`La+6NwsIz?R=R' );
define( 'SECURE_AUTH_SALT', 'i&@/Oo]gsp6o,~1OPGwv={<={:V5.B(O:A8|HufB+=G2?Avds#,D%cgJay&P5e c' );
define( 'LOGGED_IN_SALT',   '76,!@:cP0JG}x23Y3MV@I0K~{9hTs1MwqrWbE06z1<(Y%s[KNUrD//]4Th 6SnE7' );
define( 'NONCE_SALT',       'P:YycW]gWM%X_$HUDbBEi+}zj+XPt_r!&QQh_iQv4dQ~WE!BB~xDQ53`,ZCqnvu:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
