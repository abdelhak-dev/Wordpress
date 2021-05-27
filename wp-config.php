<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Amazigh' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A#:zoms.UfW0MB{.Kar:#y%:P`8Xb?.w=)Z|6 f ,.>n<y0$/+/p)hF^xJED#+?[' );
define( 'SECURE_AUTH_KEY',  '#@g:VN!Ul#mBdFs?;+}ZGP621*,rtR`$Tr7OcX@t 36NzQbzs-.}cOf_Io]`vNC*' );
define( 'LOGGED_IN_KEY',    '#$A))GoQq#Rq]p+h>nOO7=%+-T.Vv<rn6H8YQXkHi/jxI)XK6>K2j$,A@*Ev >h)' );
define( 'NONCE_KEY',        'q>d;1jOmu=A5}?xn3ahjmB?+R)+c*uD;LKXHw owGR|Jj/Q`1(MSru$hd:3~C)Ug' );
define( 'AUTH_SALT',        '~OGvp w`;I_uL^,aEo%:AQwpk&%fd5b+3vFagfS}n5lOqGr K^sE+s$:J78t5YgR' );
define( 'SECURE_AUTH_SALT', ')UkKMO<Wy.CWOSj;}2Gnt9NO+:KhKdOI@g:<pm!u7K<mS(<Y^V@m`#{HOvDspmhf' );
define( 'LOGGED_IN_SALT',   '6^zL;~JzZnB:[Y3F~,.YaLVy0}(n{J!Bbc5~O;ZZItBE9kYHV86,#_RE]B[y==}O' );
define( 'NONCE_SALT',       '{OF]FsOIt5wsFV8 Kx<SS3b{u0&7Ih!8{]X70dlq`[883Ig<5#es.[66,ibB!aP6' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
