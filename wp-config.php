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
define( 'DB_NAME', 'aquiles_equipamentos_db' );

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
define( 'AUTH_KEY',         '{(AL7B;DT,dL&~Ud) b+:4Ck?-)B_05Taa|*b-ev@-~&@RHA3_hf#31Wun:>hz82' );
define( 'SECURE_AUTH_KEY',  'kW0Wf@Y(DCz/cRd7{=uIL,l,Y4aDn yic3F/w.Bwx#Ka1f##ZLj{0Z?1}fk`YMZd' );
define( 'LOGGED_IN_KEY',    '__D(HFFjS)i+|5AOnb+rS%M-zch9eeN*i-eir2V#(qc`,t@gKCdDI`_DiqOdfb--' );
define( 'NONCE_KEY',        'mtb_W;tx]),{d<&:V~<W8V(.c~Ral:KP}w7|fY{xjv@]imJPoh<j.#;I2vherrRR' );
define( 'AUTH_SALT',        'k %~Fhl@8&BS `Xk,Hll*|# gS.Przcw;l:<-,BpyXdE^`*$Y:W0e@f-gK243HOh' );
define( 'SECURE_AUTH_SALT', 'g5yJD?zz{qjV>j6!oKI#{X$]%*IP,i=gPS0fXyDB%(^r7%izP4k`<?o82LfhKdPE' );
define( 'LOGGED_IN_SALT',   'A#6%b*ququ&2C^@9`CrY-|lWKM&%C+ye5w;)gB-$/,:yWI.BL~=,I(a#ISc(o3ZI' );
define( 'NONCE_SALT',       'dsRF]uY0F1s>(>E1)y4TvLMQWk7Uc6@jPGpZwo[!`]<Rs@6=Bw@[>A}M(z8bJ(%B' );

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
