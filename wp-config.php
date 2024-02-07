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
define( 'DB_NAME', 'wordpress-dev' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'O.7lWo]7+a~maw26_/=N}F/Q[|HHOmSU(V;9(NEFbpVUy#2{N;.A8J2?S8);Pa[O' );
define( 'SECURE_AUTH_KEY',  'mB=91GXHGVh88~_0}jbqc:+l?;@SoT6q:=EK@9@y-1u9*ien]Oz9SN3iF82U3i.P' );
define( 'LOGGED_IN_KEY',    '~pYT9.^/Vk8u4c9z1H[E^On|+eiXEd!,0P#)|r[_#iZQ*0W^g4r*/v_zp<&%rGao' );
define( 'NONCE_KEY',        'GmE$D+3aU(*sufEMJGH_soBH]FqbS*GXwC~t27EfthLOl)yKH2Q901|YO/=l#a*M' );
define( 'AUTH_SALT',        '[9X)v?<EXUrQ@Y6w-BLA.9{,Z>0Z1):{r800BjS&+08+]@x! ?<MxVN*{(fos%4Q' );
define( 'SECURE_AUTH_SALT', '0Pwc{%|}+zb2+Q<@AI<E-#|A!i>P+ES-djD>1C6Z!<]uy^[66;v^!PKB%>=OZh Q' );
define( 'LOGGED_IN_SALT',   'pLXi9aV3a}kiam?u8qOL6G=%|=.,9F/ZaL|<qcEz]6&ux {rCY5+ ~yAW+m!MPyJ' );
define( 'NONCE_SALT',       '7i2AOkIH~+6P##SLikO(Ix9lF;$i(w>z0P(sSo[|lr!?<j|-^SH}iMj4AdiSwr&d' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'di5skg_';

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
//l'éditeur va disparaitre editeur dans apparence du site
define('DISALLOW_FILE_EDIT',true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
