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
define( 'DB_NAME', 'github' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '4BLFyVTY!<&r7gx+k}TH57E{3M@6#T`[I3n|/DCjix--fG~:(7XQuwTC>9[wiN=t' );
define( 'SECURE_AUTH_KEY',  'fDaE*CQin7b?71%j,;d<cl!q}H&L N *96`FEWaa7Bo4hv-xXpc)%NQdb]m!Ee|$' );
define( 'LOGGED_IN_KEY',    'Y]6aJt>iT?39}D|2N(Hw_w09N8Wz!X1^a;C6jfQiK9-#{e9A1}/crub`EO}U~)_E' );
define( 'NONCE_KEY',        'yH@k~IHe@Tbpj/DgXpL2EWtE5/gDB`Zb#tw)jgVWxFioT0--nGD9I}G@5_V8`O1:' );
define( 'AUTH_SALT',        '2qLw2^?V>LLJr`G>):^:TMEoN>zI,IQq2e^IW|rt 4S`5%d;JQB;Og{r>?j`&;OE' );
define( 'SECURE_AUTH_SALT', '=`p}o2 C!sMQoc3;R-6dA$dW7rtvZ/9{}}W_nn*fYQ/pdMC|2$I<vEs}CjcHQA;r' );
define( 'LOGGED_IN_SALT',   'M9Ls+u}oz{)-:Gkiebm>S3;Ddjz.:ar6m0ID)i7sgsGx8^3!.tk]+]_jU.)-t5<?' );
define( 'NONCE_SALT',       '1`#6/~Ak3%K/8IdJpof?[fsHn/,.e]Xd}TD-4fQ<^}qp@f=oL$m#=L_GtU!ZyQq1' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
