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
define('DB_NAME', 'manopuslapis');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2tfb.:87xv$Vv]^x(=Q3U$[(Ui=OK[cEp:2@-0V@|E_(HUi6%,9)J1dYfYi#$#qw');
define('SECURE_AUTH_KEY',  '~-za~$?Qy]XW64$:s|AjE9uyIri0lyU8>6Whk&{x8t0@qvJ$;%SnF%!*<!Whp)@f');
define('LOGGED_IN_KEY',    ' PW1-TY)r!EJC+!&=&2pV_w*m)t)).;?`ujrWTjnJ[@s-1xtxXJpY% s=a:n_/g|');
define('NONCE_KEY',        '2OlzY!$9vmj]ep3Xw0bi4`u}KKkmxK|5(D]MSqA&BNSqR 7=%$ffhlraM/U5QE|(');
define('AUTH_SALT',        ';LCWOX&p?C;w>1L1|6:79kF+;x=X(HSp8wB=$;CCiHg5Nkh6bZbJnEYA!s6P;~UW');
define('SECURE_AUTH_SALT', 'yA_}FL4Xk-.^QY!!eqGR<&dQYZw]2{b`DO|6XmRr7j**n Hg&ZgjX|WW0i+u!y92');
define('LOGGED_IN_SALT',   '5Ol#NvQ6WCFPhG`{a4Uxw6>qM W&^S(wBV0!94DB1puX7zN,JV{Y=;%6sV`pKW>t');
define('NONCE_SALT',       '!rz`bYW9]a^6Z9`(Rs=pVmG-!;bLA}SX]<$Hsr4C%9]>PcUWC3*&*.tpn=O=DOp;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
