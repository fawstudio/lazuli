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
define( 'DB_NAME', 'lazuli' );

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
define( 'AUTH_KEY',         'vW(Hoz1qKbLe%/[v>K:%v?Z0:tvXD+DERkHOa8(cC5-IhuAG}0/g(=1iQ*<1l!qS' );
define( 'SECURE_AUTH_KEY',  '2uiFc,R?rr/(+#}ePz`x$ClB90^rya}UG=Y6@iv|YB+dX(elrwL+,Zq!sukY]8Os' );
define( 'LOGGED_IN_KEY',    'y}UYuijYlXT(ovcB%82Uw*aw;_ScJ^@S,zO`XrTkb!cd0q,~C?Ed`xUsF8_7y*>S' );
define( 'NONCE_KEY',        '63c`#oS8UYW+cGdkbpB[[~rs>M5?j2~5b jrGWH>d&lc1ND%G&T27n mtu:s~+YF' );
define( 'AUTH_SALT',        'ZIaP,P6`rgKi>L-akatVN1WW&8*2c0~Ui%$njA(NS^VAnqRNGI<0@D20#h9B7HD=' );
define( 'SECURE_AUTH_SALT', ': i(_?.qk$ZyHleVfJ 6Qs$EI9t$-aP;|{<vzjGR;-&7 C2Y:J#X~ef1t8/h;(nb' );
define( 'LOGGED_IN_SALT',   '</>azbPL)x`G8/16gAYTCn;IFj]!?wH}f%mg{Ei+H&<ZFd(J(yfCWvgkj,E:;(Go' );
define( 'NONCE_SALT',       '!t%M^u,DaV96($U.]uw_R4gL?1-t,H`TVpl0dl$X};92g$uS<gUrc/=7?G/[$?aw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lazuli_';

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
