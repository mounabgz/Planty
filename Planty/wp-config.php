<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZxB$-/2J:J{}~h7`yxC.8W_+6fUDW.0(yA!<Z5PiwCT5>My3c$j.U!|~!jFIglH3' );
define( 'SECURE_AUTH_KEY',  'kaW0w?7@P$-QNMh1?]!7H[%p8-2muFQm%iJfC)`(JK3UYI0&m0.-d{pkY2VcV*Wm' );
define( 'LOGGED_IN_KEY',    '^A8tk89oUo{rz AM%q2PZgKGv&R6Me(aw`?5gl2I98^CLOm;/ }1qRru)Ls%K`5?' );
define( 'NONCE_KEY',        'Yd}zZkF2$?JB>OjY!gjP Ufelr*]IOQZ#|b`#]vHq~3fuyqqb 0[c%iMw7BP@3sI' );
define( 'AUTH_SALT',        'ZXuWEA{Z{ &NmMo:.ji6eS$$KX~^Q^EXz2>cgsQg3o:BXFL2v|a]/pFLL,DY;*C ' );
define( 'SECURE_AUTH_SALT', 'Qf8>SNZa[~Q(_GVz}q^#Txgx[G/0c3ccTLUF4J7l*r]M@R=hW~D=o`2[t!eNv=sN' );
define( 'LOGGED_IN_SALT',   'tomR{nEDu*<>{^h[0_kRi6Z9H#/~rzl8nX*s;LT( <dlswJ](B]wn>XV0{64Q}jJ' );
define( 'NONCE_SALT',       'm+.l8m@wse<,Jb[h2$8=fr=hYkdUap$q|CbbxW:tVv@fH<;jJ&{d-]:CM2r8?IFJ' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
