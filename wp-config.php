<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'dreamdeswpf');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dreamdeswpf');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'wpfcode');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'mysql5-9.pro');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '1[z76AG)]lZ!Vl8+>5+aw?)%%V_aF!GOS.;-E5EBenc})t(P}6T5/?BIhFLdSaKh');
define('SECURE_AUTH_KEY',  'P_ZL=1$|Wk[?CUn,*:=3s2yC%O[6q=;/Nkqwv#s=IMJ].S5x$$Gy%^Q+yWz)N|j}');
define('LOGGED_IN_KEY',    '?#3D,>m-nYDP=7`88Q$_@mmpSjc{U}:z@lkvyH CPPC1akX (G<G2s`{S-@.pg4l');
define('NONCE_KEY',        'f+3-c5YU6c<%ESfjt!?I?L]>///Ux/O!|75X.eP-f=B7Y]*UMUc{|?]-(fnDv9:l');
define('AUTH_SALT',        'ak5L]g&@=(:K+Kzl{]6i~GakcfwN_D1v5)6x{TG?{=itDVbKa(O+/ ExFq-U}n$>');
define('SECURE_AUTH_SALT', '+!{^QW{}Zbo6em1|Z0Li#rt2}$z@w2d|Im5C>mxEWqPev.(4Qj,.d 15Ab`fv^G`');
define('LOGGED_IN_SALT',   'hmR,HARmw;~}Kth.YUd@Gpwk=dhhhsoRNh26,H*->=J31Q>^&|kP?dD>9V47P.7,');
define('NONCE_SALT',       'Im1f^[r[~V$%)/FZ_p0Xe{vHt, $^<Sq:!s7?gwxcxiB-YUxmSd4M!,M[ evK<SA');
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
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');