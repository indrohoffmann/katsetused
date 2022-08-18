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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'katsetused' );

/** Database username */
define( 'DB_USER', 'katsetused' );

/** Database password */
define( 'DB_PASSWORD', 'konnapoiss12' );

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
define( 'AUTH_KEY',         '{d>(Ma!m=NJ14d?SF[,b<c <.}B6dMh/2WY&Fw2>l@.p|_&gk{C4la;?pq^J~%$S' );
define( 'SECURE_AUTH_KEY',  ' >:$P&ufuH@=9WNvtVV0X<?=aarUle(UQIpmXnj%R+8GJ]DOqtu#YVjx^shw/bD%' );
define( 'LOGGED_IN_KEY',    'l.*Qp#`9y!~>QsO7#o=AX>tL_(%=B/E!vsW;!AkRzPw65+m78{};Ke{7:Y,|76Kk' );
define( 'NONCE_KEY',        '|*gWIN[!S^38o8AWIvHM!Ss21FH(8]61szT_d`z`LU,[;pHP(Zl{{R9(vGW|o6YS' );
define( 'AUTH_SALT',        '}xDMT(l`I2 1nsT6i3KH$e]yp]P*W;4+DstO:73,NqwzT]pi![9*s86,nl`fVUCG' );
define( 'SECURE_AUTH_SALT', '^D*wD*d>&$Oa1|^:xu.PI,zD*G[Q#+aHu7I^n- 0d{Gm%8n +I]22ua #DJU+FcO' );
define( 'LOGGED_IN_SALT',   '4j`k ITI>4K5pz)J)FS^~Qb3n!9EWf{I?Cwj}sz==En@{;S[f@z,?QNQz1HQq;Z`' );
define( 'NONCE_SALT',       'Z:I+.@QppKFQ1)f/!8%#V-~nL*sy >9edZmO_}W~@^jJhM8-)H]Qm1*zRUto|?!0' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
