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
define( 'DB_NAME', 'planty' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3<akOb)ne+HZ6Kr,8c]uZ`@0Lzh7fzz.oAUYTo.b*0,2*m<go;~}fS+?JMaxrDTd' );
define( 'SECURE_AUTH_KEY',  'C4pT2w0aEY>Odk*ATo`I-Z.6%a%XBN3D%goL?ju2{.(R&EaX`3,N:cu6zwSvnkXq' );
define( 'LOGGED_IN_KEY',    'PDsW:W`&#22jUv:]4Kr8}8#KAvtC.zf5r^_v:oe:?yJxiP7GP6U,,M|NU4jAX9Df' );
define( 'NONCE_KEY',        '`:m7*H!RfR(z<QVG76NYLs3ax%/]([%!a8ngW|83K-B%C`}6t (Y4[-|2 *u@^mo' );
define( 'AUTH_SALT',        'x:w2l$XP!QJt|{d=n`{N*}A=qT@3llo9s~%DoTv|3t()cqWy!hi_fm5^s mS9:>D' );
define( 'SECURE_AUTH_SALT', 'vJYqQNMQUR?U(&qi7,(o%Sr#jn=A~G]ndrC[Y7lt=52mBLzWh61@Qo4=D2RR8(^O' );
define( 'LOGGED_IN_SALT',   'Cln%k;>LUk ^SddAf9O( nX=;Brs-F.xd(#nLT2z&Ru[X|Qiat}y~|jw-|8xDFd)' );
define( 'NONCE_SALT',       'c%bH`>!`{`69I5-a.zdl#iJM^q<;0K,<FgbNdooi:&Bx Uh(Sn;,+F+QGKd9c|X}' );
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
