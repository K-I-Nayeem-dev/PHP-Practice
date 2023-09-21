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
define( 'DB_NAME', 'blogwebsite' );

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
define( 'AUTH_KEY',         '5`C7P`12MEOs5>9+SkufqWB=a7n4o*at[g;DqS50vK#.%,a{x6p~o/)8|/Vx0FB)' );
define( 'SECURE_AUTH_KEY',  'NdZ f??b5o%/:}Hm*uppvTKADCc#=>xBhG?Gd=2n?2meJW<j;H26b[_-FpcLzeK3' );
define( 'LOGGED_IN_KEY',    'D@8v%h7lT`8~#}.5%,6}qelF2{d# /aWs#@xQZfe4bmpdly=bQO4MS-U<pB/iM;,' );
define( 'NONCE_KEY',        '9+70=^8#%WRA`a h;%G<S2zI#nG7)Cc/,nZG?2_StlT]I+Ozsz2O6ccv|EgfY#cb' );
define( 'AUTH_SALT',        '2h]:V7^VTR[V(1KBW}iTia+X9:xAki8Vlq.*Vx>mbM&jz6--.w1!F$Z`Uy!#C7`t' );
define( 'SECURE_AUTH_SALT', 'td4{!5s/nfenp91QlB}itgr-%)pq@l6e(_pq%NcLZ0y+*d1a%LRd/EcC?aFNW|..' );
define( 'LOGGED_IN_SALT',   'dDAe4fHztw/BdAcohwn%+3jXvpKVd(Ryt%>vM%)??YzQu6z3$9u~-RckXPj~XNO!' );
define( 'NONCE_SALT',       '!5g#~c`}=zVeTn|-?Bm>7B;C}^BAJMUwt>WQGAw7h$VRi9G,]oK#*j!ie^u0 arM' );

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
