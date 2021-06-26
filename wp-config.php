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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tailpress' );

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
define( 'AUTH_KEY',         '7g#.&:50Q??gU%KDR,GB0|0HRnOmf;L t!B*!e&e.s[Y]47{s_$gIm ^3:V}BJC7' );
define( 'SECURE_AUTH_KEY',  'PWg0,$zmtcy0G{-)mLQAp_C[4v}8WT=az5f1aX5e,]l5;14Z%iD3*J)?_u!TKeT2' );
define( 'LOGGED_IN_KEY',    'n?^xlJb;n5^*3u@Y[bJr,<l|=z>oQp=#g3f9T}DP,qlf@1FV8>l|bCCuiHictH9=' );
define( 'NONCE_KEY',        '};>$JzDOS,B6O8a;l`at5R4=MMT( qcr!n90VuVslY}vR@l%[iFTS#<u|L6xUts(' );
define( 'AUTH_SALT',        'mN,e(1sh6dQS_kvv-Hn4ldGI%i%,D/(VTbtm<N6k(qmpBOL7%dkxmt?]%ZxdK9a]' );
define( 'SECURE_AUTH_SALT', 'v:M9IWiA#MLNZwvmhD_Lue;mcR(OqlUEH`]7pS*%d -6v_0-C~r;RFJ#V>,RLFZx' );
define( 'LOGGED_IN_SALT',   '1&_-nZyX=PXgx-_+rF+y`HB~5T00DDD+@^X~^uw!0R|yr&7UThf%s=IGkvR.SZB ' );
define( 'NONCE_SALT',       '.{@DUC)=BWKmK$W}dJ,Y+f:4`8Q+.lvj!0)h/WO;7!t)m%rv%6rs}D2H@E=$kt0f' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
