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
define( 'DB_NAME', 'wordpress_task' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5d=sJ2!+;hGY0>}G+pXCpxNj>x*VI(NVJ4}.ytoN7#Kbb{<BsZywb[XL9sH^:MHZ' );
define( 'SECURE_AUTH_KEY',  'b(X5[F)LH_W%7f:tSi?fGC!tt]Rl?(wGyiGb:0o}]kLaX=g&y)g7L6QiI46M3`.m' );
define( 'LOGGED_IN_KEY',    'W(>qa}G m)+GRS.#ln7[yO(3b*)|n`_1]vlT13@/aFj9H9u&annREuw;1H#wTo:[' );
define( 'NONCE_KEY',        'Se(Ei(g7/&N)pZErrn^E?IL:SlHrUG<VW?R]B4<[ixB_A;s9g[M?g7(vhWwuHx8 ' );
define( 'AUTH_SALT',        '] }A)l&E4`Vzm%c];m@{l6gAr^t89CNG,]ea.1Isj,fCU-@q>g4qbnPsb g^?CG7' );
define( 'SECURE_AUTH_SALT', 'brT.Dh%2ONk(I% $D#0!?jZ;BC*Env/zH1tqNiZxz0p)iqavwD*K`*Q:,GU8YhS@' );
define( 'LOGGED_IN_SALT',   '$aQ~koSoaNE}#>jP,2SW^-}@X)b6%pJt.2&<E;#knSJ8:Pi>M^gF&7R-romxFg*C' );
define( 'NONCE_SALT',       '=D]4c Y`OM+d=zA.R1].m~/l.FCCL|M .W#6V2C&4z>?PqC[yZV[S#dss_Qt>@F1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
