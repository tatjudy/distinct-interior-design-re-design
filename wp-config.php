<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u850715948_hO3k5' );

/** MySQL database username */
define( 'DB_USER', 'u850715948_uqRuc' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SnnOcjQb14' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '[>3lfOTd~@d4/VOk@+RP=_:NTk<;eS38UJt[j3{J{~<Paq@!]_3sQ Q+OJk`pYFv' );
define( 'SECURE_AUTH_KEY',   ';ZNF[^D=PKcyI VbAuc49QPxZ}$g}GEwC;R2J2n2&9v=}<`>gk6fM 16V<Q3L1Vu' );
define( 'LOGGED_IN_KEY',     '?//@tSe g4F{RT!?D/Ws+#_J^n8JT8mwV[o)1X8%.0M,gz]>]PA!WRN+(S2#wK0s' );
define( 'NONCE_KEY',         'd|_5e-_sCym`iBL<n0v+,p;]so??lm2Uw[~@}1vXm0Sr1nc~JwV,2Yaz;ae(-NYD' );
define( 'AUTH_SALT',         'ftI1F5t#Kv{Y4g}@f/Fmc:5BUrp6 -D%] (+,>EZf=t*>64|jFva<o7=-=h.09.:' );
define( 'SECURE_AUTH_SALT',  'gWduy;)>yuk$7v#qf 8nr=hr#@TWsJyj>&DKN0WnfR!zXpz}wmQ%<mcw@TZa}%Zt' );
define( 'LOGGED_IN_SALT',    'f~r9[)hqrDtr_l`^DnU}h:3zg~h(R8y}K.#f@TBWi,U.0ZWEA<2Aj|B,0@?2z`bG' );
define( 'NONCE_SALT',        'hPl&3GZH~:d0=$+MZRLjcT##H :p?k2&o!F{^#MtMj6i7PfA7D8zl OH[#qZtr03' );
define( 'WP_CACHE_KEY_SALT', ',2c,l09NIJ1(i8e<s:dDdx1%vL,YAe5R%&X_vU]g.4mlVEp^j`7eo>%)T+:K|8oo' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
