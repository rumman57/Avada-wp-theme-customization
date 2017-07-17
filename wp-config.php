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
define('WP_HOME','http://localhost/avada40new');
define('WP_SITEURL','http://localhost/avada40new');
define('DB_NAME', 'wptest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '/>^f|;N2L:O4JXwJ-|f&_yhM{$q^BKSJE7TM.c.xY`Gi<H]}1y-03{~Fle~(F4es');
define('SECURE_AUTH_KEY',  'v$!NI1{{fVi|jB?2(P&&5Kqr9VhXX8FhY%^y}.-q ~^U0$RwO|0%Pl9V`vZ.Zs0/');
define('LOGGED_IN_KEY',    '5GVnnHT$/SC(O,n$8p}-E9CFp0)l6-]o7lC(JjrP{.Jj1>q+#tLhd3R26;:}Z]*%');
define('NONCE_KEY',        '3uNZf?rUakxvF@$h^FxU:R{Qe4iJg~Q/>E)aLJyUxdhL@dMprul+YXmF;fPf`JyQ');
define('AUTH_SALT',        '+8UWWS$`g*&06M$-PH$3#h,C6sL (;[Bnn3x(y*KkXJg=-8;Uc4/lClo&#Ef))lt');
define('SECURE_AUTH_SALT', 'V`r5~&R8rB0J~JOeB1OJg{_Z4iI!>3{w.W#QPhpS{Mgp#em7MiwG9qG`UpLp=Mpe');
define('LOGGED_IN_SALT',   '&S&W]_IYQ=D:@g#z~WU9VU<? AFkuh:g1~$F;58gP(L[ixno&%=J#nu._Y8}`.l%');
define('NONCE_SALT',       '%4C,S_p^&hmjVb$]qAr}[MJ;XfIS+WswcD[5iX]=`TJF:dPz5PNgL7Bu}>6%+bjO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_first';

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
