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
define( 'DB_NAME', 'clara_03' );

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
define( 'AUTH_KEY',         ',4lvT>1^.pwEY*lE`?b>z0uL6hP*T60Ww.QSqEh[B{rfQ+[;U+.d@cK09Y;Z^d%R' );
define( 'SECURE_AUTH_KEY',  'ZwgV}!{YG;rRlL}llr;X[<,Cot?`!f5/N-aC^9Vk%;uD>J_w{c$lf=1FX&}01YO/' );
define( 'LOGGED_IN_KEY',    'aSE]P%bT71PgumCyepdp][n{&&z)$ Y,gP@jkp]nB+88&EQf3F3f:3zD]vb0=I~m' );
define( 'NONCE_KEY',        'vMC1?TXvM=#=hj<o4jnceacyVc7auNk2p^GdMiSU1?=jZx{!-F!G,iVjQo{&AU.;' );
define( 'AUTH_SALT',        'Y&`TG8pA-$~g?BnUqAm@5@l<#DEyFX0?1JCH`VLz2pK)<U=~0x%:,PCq4cS9~T[-' );
define( 'SECURE_AUTH_SALT', 'T-D<^MkR}.oxfFf@)q-*{;T8(-Dd{q~k-2N`2i9<_=AI/] 9`c/WcU(WVZ[XSYJN' );
define( 'LOGGED_IN_SALT',   'fO}>@dU=eqI2SYMwz[oalzIyVz%3k0}<?PjSw+#=2yN}PE,x&qJVB4Xy;mblmDL-' );
define( 'NONCE_SALT',       'Ul:Jj}H%-as>h^}{@1e++tS7<]vgSCguF5Vb dJ7ni%2)@~N]|g,4K/y&n(IPAk:' );

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
