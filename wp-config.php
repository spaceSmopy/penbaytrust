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

define( 'DB_NAME', "penbaytrust" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );


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

define( 'AUTH_KEY',         'usv/v|p#PGVOzK!1G#2yDty+sg/?~k*1[,7vWibBdY1sS:O(e)bp<tx55N%~N7?U' );

define( 'SECURE_AUTH_KEY',  '6~r`f>u*m_ez<L3?x^dns2F3;Xy:!h}IIx4(LVOng#c[_t:w8+jmk<WGz9*;;G<G' );

define( 'LOGGED_IN_KEY',    'WzsfYSSm1h{Wp1<9C;_:|oZ9>v<i4TlRp)w>QH&V>`FYODsi#3^//6KqRf`$8PT]' );

define( 'NONCE_KEY',        '[Sy$X&yUq 8inHJj.Y [h?%I}s75&^(6W|IV`ms9/Y}C8y3az2bE=djFi]mF*VS3' );

define( 'AUTH_SALT',        'd0uBwmmewi1**Q(%x</b97{^WMFD:-,fHN9mY0`EjwkVT>3kC$c;+r}rbxPCZI>8' );

define( 'SECURE_AUTH_SALT', '^/6C05fgK;B2C [4y8ixBTUykP}/[[gNW&bew=|Z[8+z(9h;Y@SeD,_v4>&pVUrb' );

define( 'LOGGED_IN_SALT',   'TYn`QuWv6_:a)t`=H5@qiYuyeuJ:C[5]RcDNX#oM.T_&N,Dqr/H@kgYdUJ>N7`=,' );

define( 'NONCE_SALT',       'rVZk-m,S.kWa&!u2Uf2c{RP?r<Nhi;j[Dv|>Vf} tu4|PHOGobj:!Nx>NRpS:?W+' );


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

