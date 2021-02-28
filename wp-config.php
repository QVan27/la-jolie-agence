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
define( 'DB_NAME', 'la_jolie_agence' );

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
define( 'AUTH_KEY',         'I{da~blOLP9g.Sw%!GX`o_Xi/@qU1$K4QiawMcT zQvd36_[-,ZR7w&@KozK]V3c' );
define( 'SECURE_AUTH_KEY',  'XRpM[ MrUwKgIat!.XJD])lLLI0}%PBN1lZYI;tl&+;su6h*i<tF91]NxCq<!86t' );
define( 'LOGGED_IN_KEY',    ']NVR$w9=WzJFNrcW+}0D(yU:]82^s._yXYLmK?jXg!v~En[a7,D~El4Hg$CQM(nA' );
define( 'NONCE_KEY',        'fpIaDw~eDo=i6med9fep&|Y|~qN;]rEs-B1_aUh!D)p#xT=0) Z`*{E|^BPbKRf`' );
define( 'AUTH_SALT',        'iH*&/-9v-|fjv49-YM:D&nlvrT}uSNFb& WKimMOeAz..SO5.nAG2t!,6}kaGB?f' );
define( 'SECURE_AUTH_SALT', 'SB&%08XpxC*U+)HOFPSoUz</Dg.[05fh4)[~P2j76z<a%6QadSR+<a<iwS$gu4R4' );
define( 'LOGGED_IN_SALT',   'd^|REucJ wG/WW:WsK.lJNbljHm([@?Ks%gg92;8>&DC,V6a0bY2HE4/PrLsJM>H' );
define( 'NONCE_SALT',       'f1h/pvzL0~LyGs-x>j/Hz9A<;ott7i`0<neb=a&ao8MScRv^2R#Bt|y>21l3$33a' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'lja_';

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
