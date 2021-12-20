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
define( 'DB_NAME', 'wordpress_portfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
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
define( 'AUTH_KEY',         'yD]#_:<_U;ENa8oHzCz2wdT>->}NeX3JsHb&ZqJ,lE:dE`;NH+LVR&]]84*~`>G_' );
define( 'SECURE_AUTH_KEY',  'O]Apoe0{m/5}mm{eW;C0FJYl$`U#51*SR/V1dpzZbi4{2m}xwy)j`-q7r*CFBC*~' );
define( 'LOGGED_IN_KEY',    'k[1ja%-A1BHJn&))&7sb]1v<eTP8c`-h.:4]Pm1x^ijZrON.EDFrRw%~<o@.G+$h' );
define( 'NONCE_KEY',        '3y`WpZf-Sf2!do.oPL4E=vY^HXhiR7vi36)TqEnI1*ApMy?B!:pl~j@SFWwF5X<q' );
define( 'AUTH_SALT',        '?wyj0;D$K9IwC_Fv0$iAsWiYy~oM,C7^vdDgJvA>6no)I/eELYDXP0BR/}Ea`TKE' );
define( 'SECURE_AUTH_SALT', 'p@];HR*^K+Sr3[(Mj4zKWoM%&^lJX1-5dM;vKHs){c]0=vPXDNsR6OkiWaF**kWE' );
define( 'LOGGED_IN_SALT',   'fTnB@nVv2{vc j<%J_{loT2`Fd<v`w`FXPu>:!T.b1sC0qOeWuO,In]9X(.3R3y_' );
define( 'NONCE_SALT',       '+R*J`iXX.4y!YMTyvU6@6;@TD~.<rR5ryBH5YNf70<ZA(-jS+1}3C:YltRul3:o=' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_p';

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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
