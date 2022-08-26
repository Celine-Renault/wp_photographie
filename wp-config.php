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
define( 'DB_NAME', 'wp_test_3' );

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
define( 'AUTH_KEY',         '&=dc1.tKd]$%A~7la^I.Kk_cG,x0MmoZp_z2TzBm%s C#-}j{)y{UuP!.hjmbK)p' );
define( 'SECURE_AUTH_KEY',  'BL*B1@a? 7)^1/ugRF^ZFKL=WEK><_MG*H7Ml_Lom/LDT-E$%Un{oh^y]ae0nGc?' );
define( 'LOGGED_IN_KEY',    '6Hs<b+t)^P^QRQ;y=NXjR$d:t(:(P:81LFLeK|K=G3ZL(~04uC@#zDyGfctvcp<H' );
define( 'NONCE_KEY',        '@C!/[D}ZajoDYLrAm@^r_y;$PFpe~GrDAs#H%UQg/j*vCrC6g4&q{KT_1A*x[EN^' );
define( 'AUTH_SALT',        'H5,w.9M}8 _w]W>RTTqK+RL~^SIEsp;{b9kK1mC!cwHwoN|:rx]M9jM5`Al79=oL' );
define( 'SECURE_AUTH_SALT', 'r]+qTKND^7FgCvHP@yOipWZB>rS%&h8a1L;yjOo;1!|ed?_+oqUn4Tq8rgI]S4u|' );
define( 'LOGGED_IN_SALT',   'q(&.|g5;%C<itogBm_>YsUN8Z;:&Lku@GCx}%kGMIQb)pOso{ Sgu`)k)M0=xqbq' );
define( 'NONCE_SALT',       '}4v>ts$W#<gM!PQe5hcOm?cPrVbtlTZZ`&I|O0NI ^6zo_kTu+VwnVmR?-*tvtR7' );
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
