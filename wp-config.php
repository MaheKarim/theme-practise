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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'suGd75lZFtI4a4bd2ARyhQGvoo2e3lUuUQAYuLDR1xMycGFmGuXRDgKlsCzdvgFiY6mr5K0gqfTlcS06tOg6nA==');
define('SECURE_AUTH_KEY',  '/36kHr5aMVEVYOm+A+QR71mDHwZjTQecwMbGWHTs3YlELrS5E4ldlbzk8NJ9Pqc4WVyVtuLlSqtQNlt4txHI9g==');
define('LOGGED_IN_KEY',    'LPvWpw0ZsDq8NO2C704wB/lZKylH8OTUYQ+otq62XenDymuYSomYau0zlX34SEmyeplqdVzm8Ple9aNkZrTGEw==');
define('NONCE_KEY',        'gvKyCjG7KR9oPNpl1irg1TPBPiQ/gunVjUhpN29BRj55OxJpML76DAi6DzYaGyA01ZvhPimCq7wZfcTXWc7Q1A==');
define('AUTH_SALT',        'CZ45wL3oGJVkPAVK/7eS7oO2sRI4Hvvbr+in82IntdgvcYug7fRvxZv9zuwz9mTcADCsTrKqwXhjtPfjERqIiA==');
define('SECURE_AUTH_SALT', 'TnyZe1xVl8H2likQTsW8PhBYNz1LDnXuDmdUagZaYcbnANErSgDdnhl+zZusuKx1phRTgqT+1MSerNBB5+653Q==');
define('LOGGED_IN_SALT',   'hU+iwoAv1PUNSHQGiKqIhlILkIZtAlWo32C44MOSHt4xrZK7K5/XV+K6a9kBYRMMi9/hOHJvfp3BLheoUiwEvQ==');
define('NONCE_SALT',       'URrFqv8ChvLUD26O1Mk22HM01sZNeXjSjIYe1MKd/Fis06+l6t8VTPTWuRVp+JxGgoR7fKK8UUd5FAuET+MVOQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
