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
define( 'DB_NAME', 'wpfront' );

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

define( 'FS_METHOD', 'direct' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OB0xK<HR<V- M%[#}Kz|}YEtyyI^p2AHo@e`l-%|VS/j9ZX,e2YOp*nRSQ+~hWnk' );
define( 'SECURE_AUTH_KEY',  ',K*#M>*e]BA<;x&M9g%ZA60N)R;3`s:<$;24sJMq{d5mpIlzOQ7o9.IA[1^s1+@J' );
define( 'LOGGED_IN_KEY',    'MMSDJ(isZb`@v4w&wyDA 7^yES.FA.8)LIBW:{ElQg(d,:;G7L@Hkmd~wX;c&C<=' );
define( 'NONCE_KEY',        'phuO1> 9o3#R;6i9^1B(Y9wGVDluYv}4=?b 0T-&9CGZa<8&VdWL+d;j!VEB%7J;' );
define( 'AUTH_SALT',        'Fg^,O}&<2^N(pV0mY!g32Jeu4H:p)34k5(s?v72Hz!{5lH!>Qa*!BuWhKP]Ngktx' );
define( 'SECURE_AUTH_SALT', 'A$F[fdw0nT?k~(;cSIN,0{@XcC2]byl.9kMu6p:=_;Am{`cNP%2zu%@}*m@YG/Di' );
define( 'LOGGED_IN_SALT',   '6S[0$!wBV8xr%AFIcginTi3fKylN?I<@Y7aUuu^d.ayYuq3|tVaR1<jbzWOfj,IR' );
define( 'NONCE_SALT',       'THx85Vi2G?8z*Eu (i@-a/c/OX~7a0zO(EJN#02#o^E{>l0>KnXwbgUB94b~GWeo' );

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
