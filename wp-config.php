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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

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
define( 'AUTH_KEY',         '}d&kG/RYdr2Y39mg@S?;pD(xUXZNOVHP=([BC|OxTgZKT/XQVq79_K>sd=h8.<?$' );
define( 'SECURE_AUTH_KEY',  '~Xbfg:x}#9^%y|?4!7]x`<R}lekC?Z(~J:UmPt G62AD]Li}Vk)kc!>uIg:]5cBe' );
define( 'LOGGED_IN_KEY',    'yNN9uenk`T<`%DVu5M`.%[%I5zaf?5TG|dG$ZXXiB&<(iE?w2iXr!4_0fmJImVA}' );
define( 'NONCE_KEY',        '^W/JPrpPj)Elo%/*Uu7.o|N0b6rhA0#=!_c0kg4D^Zzx*t!)JvuIC_!j@^sW_vlQ' );
define( 'AUTH_SALT',        'G6S8a4|lDrUY.w3+9py-8JpJr^vlqmnhyo7%cCD}T{Me}0.y&]4ENvmyoCbSg}1I' );
define( 'SECURE_AUTH_SALT', 'v4:(r>_q9KPw.Lo1^`IgL7Y84ya8_l%WNXD.^al` dAOTGsaOYi1Sk~qU}p_|52.' );
define( 'LOGGED_IN_SALT',   'E}T9&fDhD^mW>/<T+)m8|?k+HSyei^MF0Gz,J^^bFYxV#`jb+}/(K j]<#k8_15+' );
define( 'NONCE_SALT',       '348`%]W#}-j&<aqk9Qt=5_^*C/8dZAj}TtW_q(|mn2,Bu289BLblV29QVAT+(0T[' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
