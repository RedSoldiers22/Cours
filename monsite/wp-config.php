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
define( 'DB_NAME', 'monsite' );

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
define( 'AUTH_KEY',         '{7#@A56os`ypmtycTsL=LXc3x;aoz=}g=Z*M2EEQiuQ/dM{2|No!a_l@G $;t(jh' );
define( 'SECURE_AUTH_KEY',  'o$a#g@}4-GmpfR7RC1fF[INb_]s;vVx;:=Y/z4{@tqL3G*v6!J`9*T(0W}gPzPH<' );
define( 'LOGGED_IN_KEY',    'j!s)N?W0*.3ro<%qGS#!mTjB_]m(@A(r66@x:jO.zj=Ef?T5M}4}g.SuzO@9Mq}C' );
define( 'NONCE_KEY',        'r; 57ZKgOiDM7D56Z<,x1?($]?j`3+lxFOeOsx/0i{enX+b$RJf]j~:/:TJbw{y<' );
define( 'AUTH_SALT',        'R>YOw>L}LuwTD9&1|<%Iu^;BhE6Wz~E2O:@z~z^^K>.ADRY/wxzQlvIzQkpYgH~0' );
define( 'SECURE_AUTH_SALT', 'XY}N/B]40]1k|?,t^(fP&EO$tk1ZA}L|V[RUUf9UY#Mt,-.ul~`xyIekt2N`c(f!' );
define( 'LOGGED_IN_SALT',   'if.d-{3lw$Tv!wy]_BfA;$ZIeRGC}RHk@)Pz[}$P:Q #wEM/ZsU#p6JA+MRAC%8v' );
define( 'NONCE_SALT',       '{V;r4kM6R:q+q(xy$!hTeoF:pQx[#{vd)m*u6DZS7,F0Xt33b*ag(3/g+VnQTALR' );
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
