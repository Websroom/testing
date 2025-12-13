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
define( 'DB_NAME', 'wp_webs_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'webs.test' );

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
define( 'AUTH_KEY',         '_%3IUt4V$:Sb6)a^TT$6qPQ*%G!v^%z_2}%uX0m<[B 1vc~-8S`!#CF^]S^$?Sr$' );
define( 'SECURE_AUTH_KEY',  'Zj`Q)q{c##4m-U`TdJgO!tqu>V4sU`&6nGZj!|(>d78gNic$QF&|ny5Uk+vf5_Ue' );
define( 'LOGGED_IN_KEY',    '%%Jq$mo_W0JcVD(=httsuE#S`Dd$P;`$u1L(gTg>VhWK=wnspOY#4eYr6JsTys,p' );
define( 'NONCE_KEY',        '!;;Pl12v7.ZS`Jx:jEj^fGY s5()b1|4,?)kwSGux]!34,=bGy&|^N3MpsctHiW~' );
define( 'AUTH_SALT',        'mbDO&U^y!H8C{7+cN5FB`z}#]bvdf(!e9:<i3tS>CeI)qIgIF7DV(fX,MC+5TXF5' );
define( 'SECURE_AUTH_SALT', 'Anw|+1/p5GtCm&ar&hvFvb5_0GW_t)UL%wfx@ _stLGc/91(kjZw>a#{OE%e_dRw' );
define( 'LOGGED_IN_SALT',   '&Nvd2{Fm},S6&%xi~6P/oZO?PRiW5OftX%[wbNx53AY>TN!3*R`0$3[7zQ7Vj*mp' );
define( 'NONCE_SALT',       '}SQ0~P!9PZsQ7:;y($Um(YvoWc}1sK&$LvxyRpVn/IE{~E^R7$9s=HYZ[FFJ!8W]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
