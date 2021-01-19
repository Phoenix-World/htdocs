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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '3$Iu (FKA<!lHrLLJT T?|U)!YDY(hH={g,o#jpfA,ps}&rP{sB/G%i*Sy 7f/_+' );
define( 'SECURE_AUTH_KEY',  'Uv HG& v$GD2ym.%>/9tC+D[Jx{gv~j`z]Wp~`:=D&uI3#iG}Qif*z5;R5r[0[Y1' );
define( 'LOGGED_IN_KEY',    'q(F#mAuiRZ$]2V@]i=yvk/U]fFJZIz56S25s:MBMF*hJzx5O9,a`+$l%>HN4fzpn' );
define( 'NONCE_KEY',        '6H._gP!|g4qG[9m1t#SRY}we-kqSYpgJ&wqG2= lP.]&,#nIp?,gq`OJqE~<.TWH' );
define( 'AUTH_SALT',        '1E95cpcMcD*NwCp HFh63ffUBH@51cASM+ds(@1vWaLb=,vxP;lpa9f(k{BdP|GU' );
define( 'SECURE_AUTH_SALT', 'ZPGjiXzsLY L_/+VleD?iEu9pNR35*jS8%Fy<,6,`T>_uPDHkf l&x7QM-7!CZnv' );
define( 'LOGGED_IN_SALT',   'W<qQmuqb,NxE063nV5>3mP-TSttW~[_8gXpYV_(7>)T?.sg_k2>0w#(JI2?QVJtm' );
define( 'NONCE_SALT',       'LKOKS.#=b<|WYL;WFXSJHAKpg^|qVqR=.0X|yBzNVTU:ll:@dmH}GqFyw!t*hH%7' );

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
