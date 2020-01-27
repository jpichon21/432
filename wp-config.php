<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', '432' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd}bhoGb#c}273:q<r)U^.sBM`}L`umf%Vo-K,T{Bzssj>#ce7$8IN`M$<w&TuSCj' );
define( 'SECURE_AUTH_KEY',  'Xc9/|l;xk;9gCOeqYtA< dDL)I@8Fv&Bs> [rVX`.;RWp!m+x$}D-lLYZ6jttfD1' );
define( 'LOGGED_IN_KEY',    'UR^|D</^y|?L NNqe@-;gJRzvQ0KnA7eX. ZcYx{LObfxeT $]W!b0u*5#U|g/Iz' );
define( 'NONCE_KEY',        'jP2MJgMRg2q1K){%bcF*)Tn|O[!n-+%/)0]ylBkrtGus*m]6<vlHbrrcNeD^8d8g' );
define( 'AUTH_SALT',        'G5@7T=.K5q6MD}%arA=1zO^R7NX&7eath|:v(82=yXT*:w=)<TU+rMblvq_+Joa=' );
define( 'SECURE_AUTH_SALT', 'Qg$Ro?V^jl (C k9j(ri I=w:y{;Y(e4E7~jEVB~D3}*(g#FUNR?n3|5d8)t~yy+' );
define( 'LOGGED_IN_SALT',   'cLTLJ]?O}x,TK6}ZmyANmIUe|4FR  o2x#bt#b{(@p&3n]^V[nuHbW|KxRYf}.rY' );
define( 'NONCE_SALT',       '(s?JxGRWocJy8YU)$0Is%Rgft7]e}-e.8>JnK;ffDtY%<Zg.JNiTzt)nvz=X FrJ' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
