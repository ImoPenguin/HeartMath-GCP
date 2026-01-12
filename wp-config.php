<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'heartmathgcp' );

/** Database username */
define( 'DB_USER', 'heartmath_admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'W<}$=CKr6/T{DZk[~3z~/;Mt84F= x8rsqf]_wN-!%GZCDT~:*]Ap 3vU#540,{1' );
define( 'SECURE_AUTH_KEY',  'qZMM2}mJ/aS6!38_)BMi{wFA1#`hce0MtU^%*sTfXdH3dIwt+ZpCO#MALC3?q_`+' );
define( 'LOGGED_IN_KEY',    'br2Y;;g*J!fW,V}Q~F)Q,zWx(c&0-, <@^^85X]tb6[$2LoGV:_n=t:-&5nOt;`2' );
define( 'NONCE_KEY',        '7Szo@NRqw@OF:6<=3r6N(z<qz>$|+QaC)$`uThnh2b9=SX))@gr&iO#1h !<hnhp' );
define( 'AUTH_SALT',        'A^jYtz7v1[K5q{FO.~Z;p9-AMaXw3IYHeWBe%Lk#ZudW2# 84 |<z.YM)xfeRR}6' );
define( 'SECURE_AUTH_SALT', 'IzlQd1C<jFn{cLB<ZGHR#<IJz{0J.w?o<G2mAO3^l.wu71F*N:yp8?S<y5 A#$MW' );
define( 'LOGGED_IN_SALT',   '0T)3CCridiPyTuv,s)Ac6Z$XpJq:OM8(_K9*>|tb|- W[Ks$IxJ7~w#;)X)([N3v' );
define( 'NONCE_SALT',       '8;Jx#tBZS?m,SM)fNa{b5}$L/4-}wjR{s*sIeb`6/e$n`zbW0~%N}RxVds/y~K$P' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
