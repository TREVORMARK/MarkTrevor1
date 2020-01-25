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
define( 'DB_NAME', 'marktrevor1_db' );

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
define( 'AUTH_KEY',         'v#V(LTU~>vS#;od7Vg SO})z2g_+!Ol?r%mj>.V(}mD}: rM0Y&:EyBRxLdI]PGa' );
define( 'SECURE_AUTH_KEY',  '<zf0eK=[j`L,B=%-A9Ykz%{pR+)(l?YC> 0F-{zt$q]`65|r!1;W>I~&e=B@)0N)' );
define( 'LOGGED_IN_KEY',    'S _>=5[X}:BB5LWwn9&&QdH`f:2*(~qZ:-dcc%~>iM4]g{wJi69yCDhe]c0)mc_F' );
define( 'NONCE_KEY',        'Wk0j]N:Zd]2I[R,I;jg,N(`F~nw{YW}7`OG}k AZvXen9$tb1sdj=k/V7}TXT~:i' );
define( 'AUTH_SALT',        'f=2BfIOJr(Tu`1*U1)!m&3AxG.`RTsh!KwE=n_a~[(}Rp+s<w9G[Q>O{r[]M@veO' );
define( 'SECURE_AUTH_SALT', '%H%r7A7+lN4h>|]K,`<p8<N}j]F9>5ptqc[G9is4]W6##9}4(d=Hsg<uG[-Pf Ce' );
define( 'LOGGED_IN_SALT',   '$g +I,*4/f+CI?sS]DVpHFnz,(s.mlm9ILE=|M5b k%lOq=PM*GE%;mW7Ff DuOk' );
define( 'NONCE_SALT',       '24oW5)c#8CyK8CB^mBXSJliZ{ 0amnExgZW, [2mS0<NBzg8DJ@sj`{OT:c_w|<;' );

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
