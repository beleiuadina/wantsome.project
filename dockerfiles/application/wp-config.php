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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wpadmin' );

/** Database password */
define( 'DB_PASSWORD', 'Ad6KsvYEPCaG4fe8' );

/** Database hostname */
define( 'DB_HOST', 'database' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'qb<SEJd3s^TXw/32N IR+y`<)uPaPw/7t.Nsb:$q[HL Wc@o,6R`K|y;9)uieO*&');
define('SECURE_AUTH_KEY',  '#M5p0-+?4o^HdtpHG]Fl ~WbW9#K>%&Jx}4o}e`Oss8gmm_T$rJ~n&xOq}X[G^4{');
define('LOGGED_IN_KEY',    '?&W@!6{jB{O1EQrHM`j>W7Uqm3su_cEFWv+g d;iwdHjd>J/MVi@4@P6O28oV+/8');
define('NONCE_KEY',        'n5*q|q#XPV-dZvZ(~}VW|}L6Ed!tNIk&+P!`5j(.M>TnS72-5 ob)_t3s?K4pjLI');
define('AUTH_SALT',        '%@lxM&R/_b[kjp#6e[dU~<#aD9LX Ae^?qS@{u<VoO.^]8X WC~vvJ*hx3mU<o-*');
define('SECURE_AUTH_SALT', '#g7#W>b@r(VuN?b+X9I=|{^7~j$Udv+$NqF47#C{AS&cKk|BH*-D.]Y?)zn4h3U,');
define('LOGGED_IN_SALT',   'ax&w*Y7T6EDUgl1SU{-^NPv]t`TX`Uhdfy/6UiPWw[I_3ILZngJX7{7;~i>/1|X&');
define('NONCE_SALT',       '1t6:*w#%;^nFe`fUwKkCSFV#C--8@ d`B%Ca+<!Fjp1B1?f5bH76/EMC7/G_E#K`');

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
