<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'aidadom');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');


define( 'TICKET_PLUGIN_TITLE', 'Aidadom' );

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hrik,i:B=Fe4!:aDA~dFW7S]< /f3P$PRvJfNJZz@lK7)}9#CXJH]&l&z[M~C|-E');
define('SECURE_AUTH_KEY',  '-1lKZ|k 9|&V3JCq@)fBnm85#zZCohSb8Aj;L(*CLiUQkERUCW@WuhqP%HhO$LO_');
define('LOGGED_IN_KEY',    'n5Bm:9L-Z9--t$m,N-Dh>uX:DWO3aKI^.%{2/Wgds u9$;9/O}w_5B+qR-e]gE3l');
define('NONCE_KEY',        'I9V{]8$5E)pRnwp-wns&0tt_8u5kx+rym^RGzX*!>znG0w>[%|#W||P7sn0oDoqY');
define('AUTH_SALT',        'LXQz-wMxqE+Ts[l%*szz-7qt8oNlt|ZK=e#8dt2kVKIy>u_n6rLzSvPUMn>7EwC=');
define('SECURE_AUTH_SALT', 'ox;vFJ7uh|%k+TKJtfOu[_IjstNxgj/NshL[Wt{<_]:A6JhxrCW}%f(*O(Dp4Mux');
define('LOGGED_IN_SALT',   '2@hum4j(9<gB?|~t`=7V+}elM4PCH]B<-SXI^?1xrAh.`g]3bMx/`Xk_&G]-)^X+');
define('NONCE_SALT',       'Ku6031SA-2}.;v%[5d(s}_<=3l~fSn#:Lf`}A6iVuV1|RsO~(w++f-RXJ8L-EVRV');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');